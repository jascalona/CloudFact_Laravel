<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('.dashboard');

Route::get('home', [App\Http\Controllers\HomeController::class,'index'])->name('home');

/**
 * Declaracion de rutas
 */

 Route::get('/park', [App\Http\Controllers\ScreensController::class, 'park'])->name('.park');
