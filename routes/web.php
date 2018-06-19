<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/preguntas_frecuentes', function(){
	return view('preguntas_frecuentes');
})->name('faqs');

Route::get('/promociones', function(){
	return view('promociones');
})->name('promociones');

Route::get('/contacto', function(){
	return view('contacto');
})->name('contacto');