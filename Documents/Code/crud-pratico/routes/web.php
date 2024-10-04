<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;

// Definição das rotas a serem usadas no projeto

Route::get('/', [HomeController::class, 'index'])->name('home');
 
// Rota que engloba todas as rotas criadas anteriormente:
Route::resource('books', BookController::class);
