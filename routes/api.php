<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::post('/login', [\App\Http\Controllers\API\AuthController::class, 'login']);
Route::post('/register', [\App\Http\Controllers\API\AuthController::class, 'register']);
Route::post('/refresh', [\App\Http\Controllers\API\AuthController::class, 'refreshToken']);

Route::group(['middleware' => ['auth:api']], function () {
    Route::get('/me', [\App\Http\Controllers\API\AuthController::class, 'me']);
    Route::post('/logout', [\App\Http\Controllers\API\AuthController::class, 'logout']);
    Route::apiResource('/employee', \App\Http\Controllers\API\EmployeeController::class);
});
