<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/api/books', [BookController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});
