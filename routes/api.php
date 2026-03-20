<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/login',[AuthController::class, 'login']);

Route::apiResource('post',PostController::class)->except(['show']);
Route::apiResource('user',UserController::class)->except(['show']);