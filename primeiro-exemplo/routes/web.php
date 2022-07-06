<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\LivrosController;
use Illuminate\Http\Request;
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


Route::get('/itens', function () {
    print "GET itens";
    print $_SERVER['REQUEST_METHOD'];
});

Route::get('/itens{id}', function ($id) {
    print "Você está acessando o registro com id = {$id}";
})->where('id', '[0-9]+');


Route::get('/bem-vindo{nome}', function ($nome) {
    print "Seja bem vindo, {$nome}";

});

Route::get('/bem-vindo/{nome}/{sobrenome?}', function ($nome, $sobrenome = "") {
    print "Seja bem vindo, {$nome} {$sobrenome}";

});

Route::POST('/itens', function () {
    print "Post itens";
});



Route::get('/pessoas', [PessoaController::class, 'index']);
Route::get('/pessoas/{id}/show', [PessoaController::class, 'show'])->where('id','[0-9]+');
Route::get('/pessoas/create', [PessoaController::class, 'create']);
Route::post('/pessoas/store', [PessoaController::class, 'store']);
Route::get('/pessoas/{id}/edit', [PessoaController::class, 'edit']);
Route::post('/pessoas/update', [PessoaController::class, 'update']);
Route::get('/pessoas/{id}/destroy', [PessoaController::class, 'destroy']);



Route::get('/livros/create', [LivrosController::class, 'create']);
Route::post('/livros/store' , [LivrosController::class, 'store']);
Route::get('/livros/{id}/edit', [LivrosController::class, 'edit']);
Route::post('/livros/update', [LivrosController::class, 'update']);
Route::get('/livros/{id}/destroy', [LivrosController::class, 'destroy']);
Route::get('/livros', [LivrosController::class, 'index']);
Route::get('/livros/{id}/show', [LivrosController::class, 'show'])->where('id','[0-9]+');


