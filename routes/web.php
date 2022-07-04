<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;


Route::get('/',HomeController::class);

Route::controller(CursoController::class)->group(function(){
    Route::get('cursos', 'index')->name('')->name('cursos.index');
    Route::get('cursos/create', 'create')->name('cursos.create');
    Route::get('cursos/{curso}', 'show')->name('cursos.show');
    Route::post('cursos','store')->name('cursos.store');
    Route::get('cursos/{curso}/edit', 'edit')->name('cursos.edit');
    Route::put('cursos/{curso}','update')->name('cursos.update');
});

 