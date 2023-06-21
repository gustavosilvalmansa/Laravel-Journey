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


//REQUIRED PARAM LIKE {PARAM}
//OPTIONAL PARAM LIKE {PARAM?} AND FUNCTION(STRING $param = "DEFAULT" )
Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem?}', function(string $nome, string $categoria, string $assunto, string $mensagem = "MSG NÃO INFORMADA"){
    
    echo "Nome: $nome <br>";
    echo "Categoria: $categoria <br>";
    echo "Assunto: $assunto <br>";
    echo "Mensagem: $mensagem <br>";

});

//->where('categoria_id', '[0-9]+'); ->where('nome', '[A-Za-z]+')
//REGEX [0-9]+ param categoria_id must be a number and + then 1 lenght
//REGEX [A-Za-z]+ param nome must be a letter and + then 1 lenght
Route::get('/contato2/{nome}/{categoria_id}', function(string $nome, int $categoria = 1){
    
    echo "Nome: $nome <br>";
    echo "Categoria ID: $categoria <br>";

})->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');
