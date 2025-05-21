<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);
Route::get('/products', [ProductController::class, 'index']);
Route::post('/register', [AuthController::class, 'register']);

Route::middleware('auth:api')->group(function () {
    Route::get('/me', [AuthController::class, 'me']);
    Route::get('/products/{id}', [ProductController::class, 'show']);
});
