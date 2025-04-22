<?php

use App\Http\Controllers\ImportController;
use App\Http\Controllers\ParkController;
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

  /**ruta park */
 Route::get('/park', [App\Http\Controllers\ScreensController::class, 'park'])->name('.park');
 Route::resource('/parks', App\Http\Controllers\ScreensController::class)->names('park');

 Route::resource('/customers',CustomerController::class)->names('customer');



 /**ruta lecturas */
 Route::get('/lead', [App\Http\Controllers\ScreensController::class,'lead'])->name('.lead');


/**ruta for ImportCSV */
Route::get('Lgeneral', [App\Http\Controllers\ImportController::class,'form'])->name('form');

Route::post('Lgeneral',[App\Http\Controllers\ImportController::class, 'import'])->name('import');

 /**ruta lectura general */
Route::get('/Lgeneral', [App\Http\Controllers\ScreensController::class,'Lgeneral'])->name(  'Lgeneral');
 
Route::resource('Lgenals', App\Http\Controllers\ScreensController::class)->names('Lgenal');

Route::get('/LCustomer', [App\Http\Controllers\ScreensController::class,'LCustomer'])->name('LCustomer');