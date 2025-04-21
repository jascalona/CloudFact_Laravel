<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\CustomerController::class, 'index'])->name('.dashboard');

//Route::get('home', [App\Http\Controllers\HomeController::class,'index'])->name('home');

/**
 * Declaracion de rutas
 */

 Route::get('/park', [App\Http\Controllers\ScreensController::class, 'park'])->name('.park');

 Route::resource('/customers',CustomerController::class)->names('customer');


 /**rutas de lecturas */
 Route::get('/lead', [App\Http\Controllers\ScreensController::class,'lead'])->name('.lead');

 /**ruta lectura general */
Route::get('/Lgeneral', [App\Http\Controllers\ScreensController::class,'Lgeneral'])->name(  'Lgeneral');
 