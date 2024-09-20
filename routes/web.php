<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

// Posts Route
Route::get('', function () {
    return view('posts.index');
});

// Registration Routes
Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// Login Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.create');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Logout Route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard Route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// Redirect Root to Login
// Route::get('/', function () {
//     return redirect()->route('login.create');
// });
