<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::view('/' , 'home');

Route::prefix('/jobs')->group(function() {
    Route::get('/' , [JobController::class, 'index']);
    Route::get('/create' , [JobController::class, 'create']);
    Route::get('/{job}' , [JobController::class, 'show']);
    Route::get('/{job}/edit', [JobController::class, 'edit']);
    Route::post('/' , [JobController::class, 'store']);
    Route::patch ('/{job}', [JobController::class, 'update']);
    Route::delete('/{job}', [JobController::class, 'destroy']);
});

Route::view('/contact' , 'contact');


//Auth

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout' , [SessionController::class, 'destroy']);