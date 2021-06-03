<?php

use App\Http\Controllers\Api\AuthenticationController;
use App\Http\Controllers\Api\CheckInOutController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/user/login', [AuthenticationController::class, 'login']);
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/check-in', [CheckInOutController::class, 'checkIn']);
    Route::post('/check-out', [CheckInOutController::class, 'checkOut']);
});
