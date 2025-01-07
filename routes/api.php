<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/edit', [UserController::class, 'edit']);
Route::post('/order', [OrderController::class, 'newOrder']);
Route::get('/logout', [UserController::class, 'logout']);
