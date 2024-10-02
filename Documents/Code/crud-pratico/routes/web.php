<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;

// Definição das rotas a serem usadas no projeto

Route::get('/', function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Rotas do Controller BookController
    Route::get('/books', [BookController::class, 'index'])->name('books.index');
    Route::get('/books/create', [BookController::class, 'index'])->name('books.index');
    Route::post('/books', [BookController::class, 'create'])->name('books.create');
    Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');
    Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
    Route::put('/books/{book}', [BookController::class, 'update'])->name('boooks.update');
    Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');

    // Rota que engloba todas as rotas criadas anteriormente:
    // Route::resource('books', BookController::class);
});
