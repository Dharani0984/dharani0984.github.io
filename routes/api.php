<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Auth\LogoutController;



Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/user', [UserController::class, 'getAllUsers']);
Route::get('/logout', [LogoutController::class, 'logout']);

// Protected routes (require authentication)
Route::middleware('auth:api')->group(function () {


});
