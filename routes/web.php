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

Route::get('/', function () {
    return 'olá seja bem vindo ao curso';
});


Route::get('/contato/{nome}/{sobrenome?}',
    function(string $nome = 'nome não informado',
    string $sobrenome= 'sobre nome não informado')
    {
        echo "estamos aqui - $nome - $sobrenome";
    });

*/

Route::get('/', [\App\Http\Controllers\principalController::class,'principal'])-> name('site.index');
Route::get('/sobre-nos', [\App\Http\Controllers\sobreNosController::class,'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [\App\Http\Controllers\contatoController::class,'contato'])->name('site.contato');
Route::get('/login', function() {return 'login';})->name('site.login');


Route::prefix('/app')->group(function(){
    Route::get('/clientes', function() {
        return 'clientes ';
    })->name('app.clientes');
    Route::get('/fornecedores', function() {
        return 'fornecedores ';
    })-> name('app.fornecedores');
    Route::get('/produtos', function() {
        return 'produtos ';
    })->name('app.produtos');
});
