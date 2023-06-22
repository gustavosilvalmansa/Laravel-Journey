<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/laravel', function () {
    return view('welcome');
});

//Call controllers
Route::get('/','PrincipalController@principal');
Route::get('/contato','ContatoController@contato');
Route::get('/sobre-nos','SobreNosController@sobreNos');
Route::get('/login', function(){return 'login';});

Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){return 'Clientes';});
    Route::get('/fornecedores', function(){return 'fornecedores';});
    Route::get('/produtos', function(){return 'produtos';});
});



