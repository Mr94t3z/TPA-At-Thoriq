<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Frontend Route
Route::get('/', function () {
    return view('frontend/website');
});

Route::get('/profile', function () {
    return view('frontend/profile');
});

// Backend Route
Route::get('/login', [UserController::class, 'login'])->name('login');

Route::post('/login', [UserController::class, 'authLogin'])->name('auth.login');

Route::get('/registrasi', [UserController::class, 'register'])->name('register');

Route::post('/registrasi', [UserController::class, 'registerAction'])->name('register.action');

Route::get('/dashboard', function () {
    return view('backend/dashboard');
});
