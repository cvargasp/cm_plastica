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

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/promociones', function(){
	return view('promociones');
})->name('promociones');

Route::get('/preguntas_frecuentes', function(){
	return view('preguntas_frecuentes');
})->name('faqs');

Route::get('/contacto', function(){
	return view('contacto');
})->name('contacto');

Route::get('/procedimientos/cirugia-estetica', function(){
	return view('cirugia_estetica');
})->name('cirugia_estetica');

Route::get('/procedimientos/cirugia-reparadora', function(){
	return view('cirugia_reparadora');
})->name('cirugia_reparadora');

Route::get('/procedimientos/minimamente-invasivos', function(){
	return view('minimamente_invasivos');
})->name('minimamente_invasivos');

Route::get('promociones/{promoId}', function ($promoId) {
   	return view('detalle_promociones', ['promoId' => $promoId]);
})->name('promo_detalles');

Route::resource('promotions','PromotionController');