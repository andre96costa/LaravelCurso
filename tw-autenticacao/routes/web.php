<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterController;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', HomeController::class)->name('home');
    Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');
    Route::resource('posts', PostsController::class);
});

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store'])->name('register');

    Route::get('/login', [AuthenticationController::class, 'login'])->name('login.form');
    Route::post('/login', [AuthenticationController::class, 'logar'])->name('login');

    Route::get('/forget-password', [PasswordResetController::class, 'request'])->name('password.request');
    Route::post('/forget-password', [PasswordResetController::class, 'email'])->name('password.email');

    Route::get('/reset-password', [PasswordResetController::class, 'reset'])->name('password.reset');
    Route::post('/reset-password', [PasswordResetController::class, 'update'])->name('password.update');
});


