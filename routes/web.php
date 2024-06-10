<?php

use App\Http\Controllers\ReviewController;
use App\Http\Controllers\GenreController;
use App\Http\controllers\Productcontroller;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { 
    return view('welcome');
});


Route::get('/products', [ProductController::class, 'index']);

Route::resource('/movies', MovieController::class);

Route::resource('/genres', GenreController::class);

Route::resource('/reviews', ReviewController::class);

