<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PracticasController; // Cambiar el espacio de nombres

Route::get('/', function () {
    return view('home');
});
Route::view('hme','home')->name('home');
Route::controller(PracticasController::class)->group(function(){
    Route::get('practicas', 'index')->name('practicas.index');
    Route::get('practicas/create', 'create')->name('practicas.create');
    Route::post('practicas', 'store')->name('practicas.store');
    Route::get('practicas/{practica}', 'show')->name('practicas.show');
    Route::get('practicas/{practica}/edit', 'edit')->name('practicas.edit');
    Route::put('practicas/{practica}', 'update')->name('practicas.update');
    Route::delete('practicas/{practica}', 'destroy')->name('practicas.destroy');
});

Route::view('nosotros','nosotros')->name('nosotros');

Route::resource('practicas',PracticasController::class);
