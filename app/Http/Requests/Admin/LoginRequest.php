<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
	 */
	public function rules(): array
	{
		return [
				'email'      => ['required', 'email', 'exists:users,email'],
				'password'   => ['required'],
				'isRemember' => ['boolean'],
		];
	}

	public function messages()
	{
		return [
				'email.exists' => 'This is email not exists',
		];
	}
}
