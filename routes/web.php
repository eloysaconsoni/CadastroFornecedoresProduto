<?php
Auth::routes();
use App\Produto;
use App\Fornecedor;
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

Route::get('/cadastrarFornecedor', function () {
    
    return view('cadastrarFornecedor');
});

Route::get('/controller/visualizarFornecedor/','FornecedorController@index');

Route::get('/controller/editarFornecedor/{id}',function($id){
    $id = Fornecedor::find($id);
    return view('editarFornecedor',$id);
});

Route::get('/controller/updateFornecedor/{id}','FornecedorController@update');

Route::get('/controller/excluirFornecedor/{id}','FornecedorController@destroy');

Route::get('/controller/cadastrarFornecedor/','FornecedorController@store');


//PRODUTO
Route::get('/cadastrarProduto', function () {
    $fornecedor = Fornecedor::all();
    return view('cadastrarProduto',compact('fornecedor'));
   
});

Route::get('/controller/visualizarProduto/','ProdutoController@index');

Route::get('/controller/editarProduto/{id}',function($id){
    $id = Produto::find($id);
    return view('editarProduto',$id);
});

Route::get('/controller/updateProduto/{id}','ProdutoController@update');

Route::get('/controller/excluirProduto/{id}','ProdutoController@destroy');

Route::get('/controller/cadastrarProduto/','ProdutoController@store');