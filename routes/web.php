<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;


Route::get('/', [JobController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/jobs/create', [JobController::class, 'create']);
    Route::post('/jobs', [JobController::class, 'store']);
});

Route::get('/jobs/{job}', [JobController::class, 'show']);

// invokable controller
Route::get('/search', SearchController::class);
Route::get('/tags/{tag:name}', TagController::class);


// AUTH ROUTES
Route::middleware('guest')->group(function () {

    Route::get('/auth/register', [RegisterUserController::class, 'create']);
    Route::post('/auth/register', [RegisterUserController::class, 'store']);

    Route::get('/auth/login', [SessionController::class, 'create']);
    Route::post('/auth/login', [SessionController::class, 'store']);
});

Route::delete('/auth/logout', [SessionController::class, 'destroy'])->middleware('auth');

