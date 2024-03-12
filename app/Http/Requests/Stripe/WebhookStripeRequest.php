<?php

namespace App\Http\Requests\Stripe;

use Illuminate\Foundation\Http\FormRequest;

class WebhookStripeRequest extends FormRequest
{
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
	 */
	public function rules(): array
	{
		return [
				'id' => ['required', 'string'],
				'object' => ['required', 'string'],
				'type' => ['required', 'string'],
				'api_version' => ['required', 'string'],
				'created' => ['required', 'numeric'],
				'data' => ['array'],
				'data.object' => ['array'],
				'data.object.id' => ['required', 'string'],
				'livemode' => ['boolean'],
				'pending_webhooks' => ['numeric'],
				'request' => ['array'],
				'request.id' => ['nullable'],
				'request.idempotency_key' => ['nullable'],
		];
	}
}
