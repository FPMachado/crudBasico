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

Route::get('/', function () {
    return view('welcome');
});


########### OBSERVAÇÃO ###############
/* Os nomes depois do @ são os nomes das funções no controller*/


//Rota responsavel por mostrar o Formulário
Route::get('/produto/novo', 'ProdutosController@create');

//Rota responsavel por salvar o produto (ATENÇÃO PARA DEPOIS DO @)
Route::post('/produto/novo', 'ProdutosController@store')->name('registrar_produto');

//Rota responsavel pro trazer os inputs preenchidos 
Route::get('/produto/ver/{id}', 'ProdutosController@show');


Route::get('/produto/editar/{id}', 'ProdutosController@edit');
Route::post('produto/editar/{id}', 'ProdutosController@update')->name('alterar_produto');

Route::get('produto/excluir/{id}', 'ProdutosController@delete');

//Metodo Destroy 
Route::post('produto/excluir/{id}', 'ProdutosController@destroy')->name('excluir_produto');
