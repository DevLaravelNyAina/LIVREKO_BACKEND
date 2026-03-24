<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::post('/register',[AuthController::class,'register']);

Route::post('/login',[AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group( function(){

    Route::apiResource('/post',PostController::class)->except(['show']);

    Route::apiResource('/user',UserController::class)->except(['index','create','store','show']);

    Route::post('/logout',[AuthController::class, 'logout']);

});
