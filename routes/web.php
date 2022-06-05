<?php

use App\Http\Controllers\LoginController;
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

// Route::get('/', function () {
//     return 'Olá esou por aqui';
// });


//Nomeando rotas
Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/pedido', 'PedidoController@pedido')->name('site.pedido');
Route::get('/produto', 'ProdutoController@index')->name('site.produto');

Route::get('/login/{erro?}', 'LoginController@index')->name('site.login');
Route::post('/login', 'LoginController@autenticar')->name('site.login');


//Rotas agrupadas
Route::middleware('autenticacao')->prefix('/app')->group(function () {
Route::get('/sair', 'LoginController@sair')->name('app.sair');
Route::get('/pedido', 'PedidoController@pedido')->name('app.pedido');

;

Route::resource('produto', 'ProdutoController');
Route::resource('pedido', 'PedidoController');

});

//Rota de Fallback

Route::fallback(function(){
    echo 'A rota acessada não existe.<a href="'.route('site.index').'"> clique aqui para ir para a página inicial</a>';
});
