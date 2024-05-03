<?php

use App\Http\Controllers\CadastroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('gravar2', [CadastroController::class, 'storeApi']);
Route::post('/gravar', [CadastroController::class, 'store'])->name('store');



