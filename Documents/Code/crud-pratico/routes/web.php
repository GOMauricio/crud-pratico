<?php

use Illuminate\Support\Facades\Route;

// Definição das rotas a serem usadas no projeto

Route::get('/', function () {
    Route::get('/books', [BooksController::class, 'index'])->name('home');
    Route::get('/books/create');
    Route::post('/books');
    Route::get('books/{id}');
    Route::get('/books/{id}/edit');
    Route::put('books/{id}');
    Route::delete('/books/{id}');
});
