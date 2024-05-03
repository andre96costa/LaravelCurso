<?php

use App\Http\Controllers\CarrinhoControlle;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/carrinho/listar', [CarrinhoControlle::class, 'listar']);
Route::get('/carrinho/adicionar', [CarrinhoControlle::class, 'adicionar']);
Route::get('/carrinho/remover', [CarrinhoControlle::class, 'remover']);