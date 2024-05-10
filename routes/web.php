<?php

use App\Http\Controllers\LoginController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('welcome');

Route::get('/login', [LoginController::class,'login']);
