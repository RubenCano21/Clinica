<?php

use App\Http\Controllers\Login;
use App\Http\Controllers\LoginController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('welcome');

Route::get('/login', [Login::class,'login']);
Route::post('/usuario', [Login::class,'index'])->name('r.usuario');
