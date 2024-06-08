<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

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

