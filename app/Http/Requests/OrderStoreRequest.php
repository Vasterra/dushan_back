<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderStoreRequest extends FormRequest
{
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
	 */
	public function rules(): array
	{
		return [
			'departure_date' => 'required',
			'departure_time' => 'required',
			'first_name' => 'required',
			'last_name' => 'required',
			'phone' => 'required',
			'email' => 'required',
			'custom_notes' => 'nullable',
			'is_pm' => 'boolean',
			'adults' => 'integer',
			'children' => 'integer',
			'car_type_id' => 'exists:car_types,id',
			'location_travel_id' => 'exists:location_travel,id',
			'pickup_location_id' => 'exists:locations,id',
			'drop_off_location_id' => 'exists:locations,id',
			'stops_id' => 'array',
			'stops_id.*' => 'exists:location_added_stops,id',
		];
	}
}
