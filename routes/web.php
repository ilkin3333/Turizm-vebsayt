<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// Register formunu göstermek için GET route
Route::get('/register', [RegisterController::class, 'create'])->name('register.create');

// Register formunu işlemek için POST route
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// Login formunu göstermek için GET route
Route::get('/login', [LoginController::class, 'create'])->name('login.create');

// Login formunu işlemek için POST route
Route::post('/login', [LoginController::class, 'login'])->name('login.store');

// Logout işlemi için POST route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Ana sayfa için route
Route::get('/', function () {
    return view('front.index');
})->name('index');
