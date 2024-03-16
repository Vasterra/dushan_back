<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
	public function login(LoginRequest $request)
	{
		$credentials = [
				'email'    => $request['email'],
				'password' => $request['password'],
		];

		$exp = $request['isRemember'] ? Carbon::now()->addMonths(2)->timestamp * 1000 : now()->addHour()->timestamp * 1000;

		if (! JWTAuth::attempt($credentials)) {
			throw ValidationException::withMessages(['message' => 'Authorization error, check your details.']);
		}

		if ($admin = Admin::query()->whereEmail($credentials['email'])->first()) {
			if (! Hash::check($credentials['password'], $admin->password)) {
				throw ValidationException::withMessages(['message' => 'Неверный пароль']);
			}

			Auth::shouldUse('api-admin');

			Auth::login($admin, $request['isRemember']);
		}

		return response()->json([
				'user'       => $admin,
				'token'      => JWTAuth::fromUser($admin),
				'expires_in' => $exp,
				'is_admin'   => true,
		]);
	}
}
