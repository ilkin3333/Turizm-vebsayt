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

use App\Http\Controllers\PageController;


Route::get('/afgan', [PageController::class, 'afgan'])->name('afgan');
Route::get('/azer', [PageController::class, 'azer'])->name('azer');
Route::get('/norvay', [PageController::class, 'norvay'])->name('norvay');
Route::get('/sweden', [PageController::class, 'sweden'])->name('sweden');
Route::get('/ticket', [PageController::class, 'ticket'])->name('ticket');
Route::get('/turbir', [PageController::class, 'turbiro'])->name('turbir');
Route::get('/turiki', [PageController::class, 'turiki'])->name('turiki');
Route::get('/turkey', [PageController::class, 'turkey'])->name('turkey');
Route::get('/turuc', [PageController::class, 'turuc'])->name('turuc');
Route::get('/ticket', [PageController::class, 'ticket'])->name('ticket');



// Ana sayfa için route
Route::get('/', function () {
    return view('front.index');
})->name('index');
