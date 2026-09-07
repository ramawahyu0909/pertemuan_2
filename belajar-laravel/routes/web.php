<?php

use Illuminate\Support\Facades\Route;
// 1. Import controller yang sudah dibuat
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MemberController;

Route::get('/', function () {
    return view('welcome');
});

// 2. Tambahkan route untuk MVC pertemuan 5
Route::get('/books', [BookController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/members', [MemberController::class, 'index']);