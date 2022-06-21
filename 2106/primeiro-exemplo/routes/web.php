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
    print "<!DOCTYPE html>
    <html>
    <head>
        <title>Primeira página</title>
    </head>
    <body>
        <h1>Títulos</h1>
    </body>
    </html>";
});

Route::get('/itens', function () {
    print "GET itens";
    print $_SERVER['REQUEST_METHOD'];
});

Route::get('/itens{id}', function ($id) {
    print "Você está acessando o registro com id = {$id}";
   
});

Route::get('/bem-vindo{nome}', function ($nome) {
    print "Seja bem vindo, {$nome}";
   
});

Route::POST('/itens', function () {
    print "Post itens";
});