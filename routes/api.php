<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BookController;


    // Register the resource route for books
    Route::apiResource('books', BookController::class);

