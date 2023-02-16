<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\IdentitasLembagaController;
use App\Http\Controllers\KepalaPendidikanController;
use App\Http\Controllers\LuasTanahController;
use App\Http\Controllers\PenggunaanLahanController;
use App\Http\Controllers\SiswaController;
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

    Route::get('/users/edit/{user}', [UserController::class, 'editUser'])->name('edit-user');

    Route::put('/users/put/{user}', [UserController::class, 'update'])->name('user.update');

    Route::delete('/users/delete/{id}', [UserController::class, 'delete'])->name('users.destroy');

    // [KEPALA PENDIDIKAN ROUTE]
    Route::get('kepala-pendidikan', [KepalaPendidikanController::class, 'kepalaPendidikan'])->name('kepala-pendidikan');

    Route::get('/kepala-pendidikan/edit/{kp}', [KepalaPendidikanController::class, 'editKepalaPendidikan'])->name('edit-kp');

    Route::put('/kepala-pendidikan/put/{kp}', [KepalaPendidikanController::class, 'update'])->name('kp.update');

    // [GURU ROUTE]
    Route::get('guru', [GuruController::class, 'guru'])->name('guru');

    Route::get('guru/create', [GuruController::class, 'create'])->name('create-guru');

    Route::post('guru/post', [GuruController::class, 'createAction'])->name('guru.action');

    Route::get('/guru/edit/{guru}', [GuruController::class, 'editGuru'])->name('edit-guru');

    Route::put('/guru/put/{guru}', [GuruController::class, 'update'])->name('guru.update');

    Route::delete('/guru/delete/{id}', [GuruController::class, 'delete'])->name('guru.destroy');

    // [SISWA ROUTE]
    Route::get('siswa', [SiswaController::class, 'siswa'])->name('siswa');

    Route::get('siswa/create', [SiswaController::class, 'create'])->name('create-siswa');

    Route::post('siswa/post', [SiswaController::class, 'createAction'])->name('siswa.action');

    Route::get('/siswa/edit/{siswa}', [SiswaController::class, 'editSiswa'])->name('edit-siswa');

    Route::put('/siswa/put/{siswa}', [SiswaController::class, 'update'])->name('siswa.update');

    Route::delete('/siswa/delete/{id}', [SiswaController::class, 'delete'])->name('siswa.destroy');

    // [LUAS TANAH ROUTE]
    Route::get('luas-tanah', [LuasTanahController::class, 'luasTanah'])->name('luas-tanah');

    Route::get('luas-tanah/create', [LuasTanahController::class, 'create'])->name('create-lt');

    Route::post('luas-tanah/post', [LuasTanahController::class, 'createAction'])->name('lt.action');

    Route::get('/luas-tanah/edit/{lt}', [LuasTanahController::class, 'editLuasTanah'])->name('edit-lt');

    Route::put('/luas-tanah/put/{lt}', [LuasTanahController::class, 'update'])->name('lt.update');

    Route::delete('/luas-tanah/delete/{id}', [LuasTanahController::class, 'delete'])->name('lt.destroy');

    // [PENGGUNAAN LAHAN ROUTE]
    Route::get('penggunaan-lahan', [PenggunaanLahanController::class, 'penggunaanLahan'])->name('penggunaan-lahan');

    Route::get('penggunaan-lahan/create', [PenggunaanLahanController::class, 'create'])->name('create-pl');

    Route::post('penggunaan-lahan/post', [PenggunaanLahanController::class, 'createAction'])->name('pl.action');

    Route::get('/penggunaan-lahan/edit/{pl}', [PenggunaanLahanController::class, 'editPenggunaanLahan'])->name('edit-pl');

    Route::put('/penggunaan-lahan/put/{pl}', [PenggunaanLahanController::class, 'update'])->name('pl.update');

    Route::delete('/penggunaan-lahan/delete/{id}', [PenggunaanLahanController::class, 'delete'])->name('pl.destroy');
});
