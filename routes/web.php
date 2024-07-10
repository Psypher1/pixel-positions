<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


Route::get('/', [JobController::class, 'index']);


// AUTH ROUTEs

Route::middleware('guest')->group(function () {

    Route::get('/auth/register', [RegisterUserController::class, 'create']);
    Route::post('/auth/register', [RegisterUserController::class, 'store']);

    Route::get('/auth/login', [SessionController::class, 'create']);
    Route::post('/auth/login', [SessionController::class, 'store']);
});

Route::delete('/auth/logout', [SessionController::class, 'destroy'])->middleware('auth');

