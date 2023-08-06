<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;

Route::get('', function(){
    return view('welcome');
});

Route::get('/auth/google', [SocialController::class, 'redirectGoogle'])->name('redirect-google');
Route::get('/auth/google/callback', [SocialController::class, 'loginGoogle'])->name('login-google');

Route::get('/auth/facebook', [SocialController::class, 'redirectFacebook'])->name('redirect-facebook');
Route::get('/auth/facebook/callback', [SocialController::class, 'loginFacebook'])->name('login-facebook');
