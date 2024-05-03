<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\SiteController;
use App\Models\Client;
use Illuminate\Support\Facades\Route;

Route::get('home', [SiteController::class, 'home']);
Route::get('contato', [SiteController::class, 'contato']);
Route::get('sobre', [SiteController::class, 'sobre']);
Route::get('servico/{codigo?}', ServicoController::class);

Route::get('clientes', [ClientController::class, 'index']);
Route::get('clientes/create', [ClientController::class, 'create']);
Route::post('clientes', [ClientController::class, 'store'])->name('clientes.store');