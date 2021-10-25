<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;



Route::get('Pagprin',[InicioController::class,'principio'])->name('inicio.inicio');

Route::get('Registro',[InicioController::class,'Regcom'])->name('register.register');

Route::post('Perfil', [InicioController::class,'store'])->name('register.store');

Route::get('contacto',[InicioController::class,'contac'])->name('contac.contac');


Route::get('Registro/{id}',[InicioController::class,'modificar'])->name('mostrar.modificar');

Route::get('Registro/{loles}/edit',[InicioController::class,'edit'])->name('mostrar.edit');

Route::put('Registro/{loles}',[InicioController::class,'safe'])->name('mostrar.actualizar');






