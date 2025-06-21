<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'index'])->name('welcome');

Route::resource('/authors', AuthorController::class)->only(['index','store', 'update', 'destroy']);
Route::resource('/books', BookController::class)->only(['store', 'update', 'destroy']);
