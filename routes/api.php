<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('telemetry',[\App\Http\Controllers\TelemetryController::class,'telemetry'])->name('telemetry');
Route::post('telemetry',[\App\Http\Controllers\TelemetryController::class,'storeIP'])->name('store.ip');
