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
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', 'App\Http\Controllers\LojaController@index')->middleware(['auth'])->name('dashboard');

Route::get('/vendas', 'App\Http\Controllers\VendasController@vendas')->middleware(['auth'])->name('venda');
Route::get('/vendas/cadastrar', 'App\Http\Controllers\VendasController@cadvenda')->middleware(['auth'])->name('cad-venda');
Route::post('/vendas/cadastrar', 'App\Http\Controllers\VendasController@storevenda')->middleware(['auth'])->name('store-venda');
Route::get('/vendas/ver/{id}', 'App\Http\Controllers\VendasController@showvendas')->middleware(['auth'])->name('showvendas');
Route::get('/vendas/ver/{id}', 'App\Http\Controllers\VendasController@showvendas')->middleware(['auth'])->name('showvendas');
Route::get('/vendas/editar/{id}', 'App\Http\Controllers\VendasController@editvenda')->middleware(['auth'])->name('edit-venda');
Route::post('/vendas/editar/{id}', 'App\Http\Controllers\VendasController@atualizar')->middleware(['auth'])->name('update-venda');
Route::delete('/vendas/excluir/{id}', 'App\Http\Controllers\VendasController@destroy')->middleware(['auth'])->name('vendas.destroy');


Route::get('/fornecedores', 'App\Http\Controllers\FornecedoresController@fornecedores')->middleware(['auth'])->name('fornecedor');
Route::get('/fornecedores/cadastrar', 'App\Http\Controllers\FornecedoresController@cadfornecedor')->middleware(['auth'])->name('cad-fornecedor');
Route::get('/fornecedores/ver/{id}', 'App\Http\Controllers\FornecedoresController@showfornecedores')->middleware(['auth'])->name('showfornecedores');
Route::post('/fornecedores/cadastrar', 'App\Http\Controllers\FornecedoresController@storefornecedor')->middleware(['auth'])->name('store-fornecedor');
Route::get('/fornecedores/editar/{id}', 'App\Http\Controllers\FornecedoresController@editfornecedor')->middleware(['auth'])->name('edit-fornecedor');
Route::post('/fornecedores/editar/{id}', 'App\Http\Controllers\FornecedoresController@atualizar')->middleware(['auth'])->name('update-fornecedor');
Route::delete('/fornecedores/excluir/{id}', 'App\Http\Controllers\FornecedoresController@destroy')->middleware(['auth'])->name('fornecedores.destroy');

Route::get('/produtos', 'App\Http\Controllers\ProdutosController@produtos')->middleware(['auth'])->name('produto');
Route::get('/produtos/cadastrar', 'App\Http\Controllers\ProdutosController@cadproduto')->middleware(['auth'])->name('cad-produto');
Route::post('/produtos/cadastrar', 'App\Http\Controllers\ProdutosController@storeproduto')->middleware(['auth'])->name('store-produto');
Route::get('/produtos/ver/{id}', 'App\Http\Controllers\ProdutosController@showprodutos')->middleware(['auth'])->name('showprodutos');
Route::get('/produtos/editar/{id}', 'App\Http\Controllers\ProdutosController@editproduto')->middleware(['auth'])->name('edit-produto');
Route::post('/produtos/editar/{id}', 'App\Http\Controllers\ProdutosController@atualizar')->middleware(['auth'])->name('update-produto');
Route::delete('/produtos/excluir/{id}', 'App\Http\Controllers\ProdutosController@destroy')->middleware(['auth'])->name('produtos.destroy');

Route::get('/usuarios', 'App\Http\Controllers\UsuariosController@usuarios')->middleware(['auth'])->name('usuario');
Route::get('/usuarios/cadastrar', 'App\Http\Controllers\UsuariosController@cadusuario')->middleware(['auth'])->name('cad-usuario');
Route::post('/usuarios/cadastrar', 'App\Http\Controllers\UsuariosController@storeusuario')->middleware(['auth'])->name('store-usuario');