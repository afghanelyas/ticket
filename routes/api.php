<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('auth.sanctum')->post('/logout', [AuthController::class, 'logout']);

Route::get('/login', [AuthController::class, 'login']);

Route::post('/register', [AuthController::class, 'register']);

Route::apiResource('tickets', TicketController::class);
Route::apiResource('users', UserController::class);
