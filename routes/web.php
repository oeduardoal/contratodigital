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
    return redirect('/contrato/novo');
});

Route::get('/home', 'HomeController@index');

Route::get('/contrato', function(){
	return redirect('/contrato/novo');
});

Route::get('/contrato/novo', 'NovoContratoController@index');
Route::post('/contrato/novo', 'NovoContratoController@save');
Route::get('/contrato/enviado', 'NovoContratoController@enviado');

// Admin
Route::get('/a/painel', 'PainelController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
