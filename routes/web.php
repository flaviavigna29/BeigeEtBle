<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage']) ->name('homepage');

Route::get('rooms', [PublicController::class, 'rooms']) ->name('rooms');

Route::get('contact_us', [PublicController::class, 'contact_us']) ->name('contact_us');

Route::get('book_now', [PublicController::class, 'book_now']) ->name('book_now');