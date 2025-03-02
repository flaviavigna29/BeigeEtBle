<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage']) ->name('homepage');

Route::get('rooms', [PublicController::class, 'rooms']) ->name('rooms');

Route::get('cassiopea', [PublicController::class, 'cassiopea']) ->name('cassiopea');
Route::get('aries', [PublicController::class, 'aries']) ->name('aries');
Route::get('orione', [PublicController::class, 'orione']) ->name('orione');
Route::get('hydra', [PublicController::class, 'hydra']) ->name('hydra');

Route::get('contact_us', [PublicController::class, 'contact_us']) ->name('contact_us');

Route::post('contact_us/send', [PublicController::class, 'send_email'])->name('send_email');

Route::get('book_now', [PublicController::class, 'book_now']) ->name('book_now');

Route::get('/privacy-policy', [PublicController::class, 'privacy_policy']) ->name('privacy-policy');

//language
Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('setLocale');