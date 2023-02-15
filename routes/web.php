<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\IdentitasLembagaController;
use App\Http\Controllers\KepalaPendidikanController;
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

Route::get('profile', function () {
    return view('frontend/profile');
});

// Backend Route
Route::get('login', [UserController::class, 'login'])->name('login');

Route::post('login', [UserController::class, 'authLogin'])->name('auth.login');

Route::get('registrasi', [UserController::class, 'register'])->name('register');

Route::post('registrasi', [UserController::class, 'registerAction'])->name('register.action');

Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    // only authenticated users with roles 0 or 1 can access this route
    return view('backend/dashboard/index');
})->middleware(['auth', 'roles:0,1']);

Route::middleware(['auth', 'roles:1'])->group(function () {
    // only authenticated users with roles=1 can access this route

    // [IDENTITAS LEMBAGA ROUTE]
    Route::get('lembaga', [IdentitasLembagaController::class, 'lembaga'])->name('lembaga');

    // [USERS ROUTE]
    Route::get('users', [UserController::class, 'users'])->name('users');

    Route::get('/edit-user/{user}', [UserController::class, 'editUser'])->name('edit-user');

    Route::put('/edit-user/{user}', [UserController::class, 'update'])->name('user.update');

    Route::delete('/users/{id}', [UserController::class, 'delete'])->name('users.destroy');

    // [KEPALA PENDIDIKAN ROUTE]
    Route::get('kepala-pendidikan', [KepalaPendidikanController::class, 'kepalaPendidikan'])->name('kepala-pendidikan');

    Route::get('/kepala-pendidikan/{kp}', [KepalaPendidikanController::class, 'editKepalaPendidikan'])->name('edit-kp');

    Route::put('/kepala-pendidikan/{kp}', [KepalaPendidikanController::class, 'update'])->name('kp.update');

    // [GURU ROUTE]
    Route::get('guru', [GuruController::class, 'guru'])->name('guru');

    Route::get('/guru/{guru}', [GuruController::class, 'editGuru'])->name('edit-guru');

    Route::put('/guru/{guru}', [GuruController::class, 'update'])->name('guru.update');

    Route::delete('/guru/{id}', [GuruController::class, 'delete'])->name('guru.destroy');
});
