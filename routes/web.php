<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/books', [BookController::class, 'index'])->name('index'); // untuk list semua buku yang udah ada
Route::get('/books/create', [BookController::class, 'create'])->name('create'); // untuk form buku yang mau ditambahkan user
Route::post('/books', [BookController::class, 'store'])->name('store'); // untuk simpen data bukunya ke database
Route::get('/books/{book}', [BookController::class, 'show'])->name('show'); // untuk tunjukin 1 buku datanya secara detail
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('edit'); // untuk form edit buku
Route::put('/books/{book}', [BookController::class, 'update'])->name('update'); // untuk update buku yang udah diedit user
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('destroy'); // untuk delete 1 buku
