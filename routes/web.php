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
Route::get('/','PrincipalController@principal')->name('site.index');
Route::get('/contato','ContatoController@contato')->name('site.contato');
Route::get('/sobre-nos','SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/login', function(){return 'login';})->name('site.login');

//App
Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores','FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function(){return 'produtos';})->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');



Route::fallback(function(){
    echo "<h1> Rota inexistente </h1>";
    echo '<a href="'.route('site.index').'"> Voltar </a>';
});



