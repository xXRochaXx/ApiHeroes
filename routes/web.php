<?php

use App\Http\Controllers\ConsumirApiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;

Route::get('home/{id?}', [HomeController::class, 'index']);


