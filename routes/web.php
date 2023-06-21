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

Route::get('/','PrincipalController@principal');
Route::get('/contato','ContatoController@contato');
Route::get('/sobre-nos','SobreNosController@sobreNos');

Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem?}', function(string $nome, string $categoria, string $assunto, string $mensagem = "MSG NÃO INFORMADA"){
    echo "Nome: $nome <br>";
    echo "Categoria: $categoria <br>";
    echo "Assunto: $assunto <br>";
    echo "Mensagem: $mensagem <br>";

});


/*
Route::get('/sobre-nos', function () {
    return "Sobre Nós";
});

Route::get('/contato', function () {
    return "Contato";
});
*/