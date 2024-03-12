<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('locations')->group(function () {
	Route::get('/', [App\Http\Controllers\LocationController::class, 'index']);
	Route::get('/travels', [App\Http\Controllers\LocationTravelController::class, 'index']);
});
Route::get('car_types', [App\Http\Controllers\CarTypeController::class, 'index']);
Route::prefix('orders')->group(function () {
	Route::get('/', [App\Http\Controllers\OrderController::class, 'index']);
	Route::post('/', [App\Http\Controllers\OrderController::class, 'store']);
	Route::get('/{any_order}', [App\Http\Controllers\OrderController::class, 'show']);
});

Route::prefix('stripe')->group(function () {
	Route::post('/webhook', [App\Http\Controllers\StripeController::class, 'webhookHandler']);
	Route::get('/session-id/{any_order}', [App\Http\Controllers\StripeController::class, 'createSessionId']);
});
