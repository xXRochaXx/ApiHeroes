<?php

use App\Http\Controllers\ConsumirApiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('home/{name?}', [HomeController::class, 'index']);



Route::get('/auth/redirect', function () {
    return Socialite::driver('facebook')->redirect();
});

Route::get('/auth/callback', function () {
    $user = Socialite::driver('facebook')->user();

    // $user->token
});
