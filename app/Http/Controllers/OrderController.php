<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderStoreRequest;
use App\Models\LocationAddedStop;
use App\Models\LocationTravel;
use App\Models\Order;
use App\Models\OrderStatus;
use Carbon\Carbon;
use Illuminate\Validation\ValidationException;

class OrderController extends Controller
{
	public function store(OrderStoreRequest $request)
	{
		\DB::beginTransaction();

		try {
			$location_travel = LocationTravel::where([
					'pickup_location_id' => $request['pickup_location_id'],
					'drop_off_location_id' => $request['drop_off_location_id'],
			])->first();

			if (! $location_travel === $request['location_travel_id']) {
				throw ValidationException::withMessages(['location_travel_id' => 'The route you selected does not exist']);
			}

			$departure_date = Carbon::parse($request['departure_date'])->toDateString();
			$departure_time = Carbon::parse($request['departure_time'])->toTimeString();

			if (Carbon::parse("$departure_date $departure_time")->diffInHours(now()) < 48) {
				throw ValidationException::withMessages(['departure_date_time' => 'You can book your trip at least 48 hours before departure']);
			}

			$order_exists = Order::where([
					'location_travel_id' => $location_travel->id,
					'car_type_id' => $request['car_type_id'],
					'email' => $request['email'],
					'departure_date' => $departure_date,
					'departure_time' => $departure_time,
			])
					->where(\DB::raw('adults + children'), '=', $request['adults'] + $request['children'])
					->whereHas('stops', function ($t) use ($request) {
						$t->whereIn('location_stop_id', $request['stops_id']);
					})->exists();

			if ($order_exists) {
				throw ValidationException::withMessages(['order_exists' => 'An unpaid trip for this time, with selected stops and for this mail already exists']);
			}

			$order = Order::create(
				$request
						->safe()
						->merge([
								'uuid' => \Str::uuid(),
								'cost' => 0,
								'departure_date' => $departure_date,
								'departure_time' => $departure_time,
								'status_id' => OrderStatus::CREATED,
						])
						->except('stops_id', 'pickup_location_id', 'drop_off_location_id')
			);
			$order->update([
					'status_id' => 2,
			]);
			$cost = $location_travel->prices()->where('car_type_id', $request['car_type_id'])->first()?->price ?? 0;
			$passengers_count = $request['adults'] + $request['children'];
			if (count($request['stops_id'])) {
				foreach ($request['stops_id'] as $id) {
					$location_stop = LocationAddedStop::find($id);
					$cost += $passengers_count === 8 ? $location_stop?->price_for_8_pax : $location_stop?->price;

					$order->stops()->create([
							'location_stop_id' => $id,
					]);
				}
			}

			$order->update([
					'cost' => $cost,
			]);

			\DB::commit();

			$order_refresh = $order->refresh();

			return $order_refresh;
		} catch (\Exception $exception) {
			info($exception->getMessage());
			\DB::rollBack();
			throw ValidationException::withMessages(['order' => $exception->getMessage()]);
		}
	}

	public function show(Order $order)
	{
		return [
				'id' => $order->id,
				'uuid' => $order->uuid,
				'departure_date' => Carbon::parse($order->departure_date)->format('F d, Y'),
				'departure_time' => Carbon::parse($order->departure_time)->format('H:i'),
				'is_pm' => $order->is_pm,
				'pickup_location' => $order->travel->pickUpLocation,
				'drop_off_location' => $order->travel->dropOffLocation,
				'stops' => $order->stops,
				'car_type' => $order->carType,
				'adults' => $order->adults,
				'children' => $order->children,
		];
	}
}
