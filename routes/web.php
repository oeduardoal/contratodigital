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

// Native
Auth::routes();

Route::get('/', function () {
    return redirect('/contrato/novo');
});

Route::get('/home', 'HomeController@index');

// API
Route::get('api/v1/clientes', 'ApiController@clientes');

// Contrato
Route::get('/contrato', function(){
	return redirect('/contrato/novo');
});

Route::post('/contrato/novo', 'NovoContratoController@save');

// Contrato
Route::get('/contrato', function(){return redirect('/contrato/novo');});

Route::get('/contrato/novo', 'NovoContratoController@index');
Route::get('/contrato/enviado', 'NovoContratoController@enviado');

// Admin
Route::get('/a/painel', 'PainelController@index');
Route::get('/a/painel/adicionarServicos/{id}', 'PainelController@adicionarServicos');
Route::get('/a/painel/cancelarContrato/{id}', 'PainelController@cancelarContrato');

