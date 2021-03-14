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

Route::get('/index', 'App\Http\Controllers\LojaController@index')->name('index');
Route::get('/login', 'App\Http\Controllers\LojaController@login')->name('login');

Route::get('/vendas', 'App\Http\Controllers\VendasController@vendas')->name('venda');
Route::get('/vendas/cadastrar', 'App\Http\Controllers\VendasController@cadvenda')->name('cad-venda');
Route::post('/vendas/cadastrar', 'App\Http\Controllers\VendasController@storevenda')->name('store-venda');
Route::get('/vendas/editar', 'App\Http\Controllers\VendasController@editvenda')->name('edit-venda');

Route::get('/fornecedores', 'App\Http\Controllers\FornecedoresController@fornecedores')->name('fornecedor');
Route::get('/fornecedores/cadastrar', 'App\Http\Controllers\FornecedoresController@cadfornecedor')->name('cad-fornecedor');
Route::post('/fornecedores/cadastrar', 'App\Http\Controllers\FornecedoresController@storefornecedor')->name('store-fornecedor');
Route::get('/fornecedores/editar', 'App\Http\Controllers\FornecedoresController@editfornecedor')->name('edit-fornecedor');

Route::get('/produtos', 'App\Http\Controllers\ProdutosController@produtos')->name('produto');
Route::get('/produtos/cadastrar', 'App\Http\Controllers\ProdutosController@cadproduto')->name('cad-produto');
Route::post('/produtos/cadastrar', 'App\Http\Controllers\ProdutosController@storeproduto')->name('store-produto');
Route::get('/produtos/editar', 'App\Http\Controllers\ProdutosController@editproduto')->name('edit-produto');

Route::get('/usuarios', 'App\Http\Controllers\UsuariosController@usuarios')->name('usuario');
Route::get('/usuarios/cadastrar', 'App\Http\Controllers\UsuariosController@cadusuario')->name('cad-usuario');
Route::post('/usuarios/cadastrar', 'App\Http\Controllers\UsuariosController@storeusuario')->name('store-usuario');
Route::get('/usuarios/editar', 'App\Http\Controllers\UsuariosController@editusuario')->name('edit-usuario');