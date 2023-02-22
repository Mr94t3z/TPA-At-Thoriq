<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\IdentitasLembagaController;
use App\Http\Controllers\KepalaPendidikanController;
use App\Http\Controllers\ListrikDanInternetController;
use App\Http\Controllers\LuasTanahController;
use App\Http\Controllers\PendukungController;
use App\Http\Controllers\PenggunaanLahanController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\BeritaController;
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

// [--Frontend Route--]
Route::get('/', [WebsiteController::class, 'home']);

Route::get('profile', [WebsiteController::class, 'profile']);

Route::get('berita', [WebsiteController::class, 'berita']);

Route::get('/berita/read/{slug}', [WebsiteController::class, 'readBerita'])->name('read');

Route::get('fasilitas', [WebsiteController::class, 'fasilitas']);


// [--Backend Route--]
Route::get('login', [UserController::class, 'login'])->name('login');

Route::post('login', [UserController::class, 'authLogin'])->name('auth.login');

Route::get('registrasi', [UserController::class, 'register'])->name('register');

Route::post('registrasi', [UserController::class, 'registerAction'])->name('register.action');

Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'roles:0,1'])->group(function () {
    // only authenticated users with roles=0 or roles=1 can access this route

    // [DASHBOARD ROUTE]
    Route::get('dashboard', [DashboardController::class, 'countData'])->name('dashboard');

    // [MY PROFILE ROUTE]
    Route::get('my-profile', [UserController::class, 'myProfile'])->name('my-profile');

    Route::get('/my-profile/edit/', [UserController::class, 'editMyProfile'])->name('edit-my-profile');

    Route::put('/my-profile/edit/', [UserController::class, 'updateMyProfile'])->name('myprofile.update');

    Route::get('change-password', [UserController::class, 'changePassword'])->name('change-password');

    Route::put('change-password', [UserController::class, 'updatePassword'])->name('password.update');
});



Route::middleware(['auth', 'roles:1'])->group(function () {
    // only authenticated users with roles=1 can access this route

    // [IDENTITAS LEMBAGA ROUTE]
    Route::get('lembaga', [IdentitasLembagaController::class, 'lembaga'])->name('lembaga');

    Route::get('/lembaga/edit/{lembaga}', [IdentitasLembagaController::class, 'editLembaga'])->name('edit-lembaga');

    Route::put('/lembaga/edit/{lembaga}', [IdentitasLembagaController::class, 'update'])->name('lembaga.update');

    // [MANAJEMEN WEBSITE ROUTE]
    Route::get('website', [WebsiteController::class, 'website'])->name('website');

    Route::get('/website/edit/{website}', [WebsiteController::class, 'editWebsite'])->name('edit-website');

    Route::put('/website/edit/{website}', [WebsiteController::class, 'update'])->name('website.update');

    // [MANAJEMEN BERITA ROUTE]
    Route::get('post-berita', [BeritaController::class, 'berita'])->name('post-berita');

    Route::get('post-berita/create', [BeritaController::class, 'create'])->name('create-berita');

    Route::post('post-berita/create', [BeritaController::class, 'createAction'])->name('berita.action');

    Route::get('/post-berita/create/checkSlug', [BeritaController::class, 'checkSlug']);

    Route::get('/post-berita/edit/{berita}', [BeritaController::class, 'editBerita'])->name('edit-berita');

    Route::put('/post-berita/edit/{berita}', [BeritaController::class, 'update'])->name('berita.update');

    Route::delete('/post-berita/delete/{id}', [BeritaController::class, 'delete'])->name('berita.destroy');

    // [USERS ROUTE]
    Route::get('users', [UserController::class, 'users'])->name('users');

    Route::get('/users/edit/{user}', [UserController::class, 'editUser'])->name('edit-user');

    Route::put('/users/edit/{user}', [UserController::class, 'update'])->name('user.update');

    Route::delete('/users/delete/{id}', [UserController::class, 'delete'])->name('users.destroy');

    // [KEPALA PENDIDIKAN ROUTE]
    Route::get('kepala-pendidikan', [KepalaPendidikanController::class, 'kepalaPendidikan'])->name('kepala-pendidikan');

    Route::get('/kepala-pendidikan/edit/{kp}', [KepalaPendidikanController::class, 'editKepalaPendidikan'])->name('edit-kp');

    Route::put('/kepala-pendidikan/edit/{kp}', [KepalaPendidikanController::class, 'update'])->name('kp.update');

    // [GURU ROUTE]
    Route::get('guru', [GuruController::class, 'guru'])->name('guru');

    Route::get('guru/create', [GuruController::class, 'create'])->name('create-guru');

    Route::post('guru/create', [GuruController::class, 'createAction'])->name('guru.action');

    Route::get('/guru/edit/{guru}', [GuruController::class, 'editGuru'])->name('edit-guru');

    Route::put('/guru/edit/{guru}', [GuruController::class, 'update'])->name('guru.update');

    Route::delete('/guru/delete/{id}', [GuruController::class, 'delete'])->name('guru.destroy');

    // [SISWA ROUTE]
    Route::get('siswa', [SiswaController::class, 'siswa'])->name('siswa');

    Route::get('siswa/create', [SiswaController::class, 'create'])->name('create-siswa');

    Route::post('siswa/create', [SiswaController::class, 'createAction'])->name('siswa.action');

    Route::get('/siswa/edit/{siswa}', [SiswaController::class, 'editSiswa'])->name('edit-siswa');

    Route::put('/siswa/edit/{siswa}', [SiswaController::class, 'update'])->name('siswa.update');

    Route::delete('/siswa/delete/{id}', [SiswaController::class, 'delete'])->name('siswa.destroy');

    // [LUAS TANAH ROUTE]
    Route::get('luas-tanah', [LuasTanahController::class, 'luasTanah'])->name('luas-tanah');

    Route::get('luas-tanah/create', [LuasTanahController::class, 'create'])->name('create-lt');

    Route::post('luas-tanah/create', [LuasTanahController::class, 'createAction'])->name('lt.action');

    Route::get('/luas-tanah/edit/{lt}', [LuasTanahController::class, 'editLuasTanah'])->name('edit-lt');

    Route::put('/luas-tanah/edit/{lt}', [LuasTanahController::class, 'update'])->name('lt.update');

    Route::delete('/luas-tanah/delete/{id}', [LuasTanahController::class, 'delete'])->name('lt.destroy');

    // [PENGGUNAAN LAHAN ROUTE]
    Route::get('penggunaan-lahan', [PenggunaanLahanController::class, 'penggunaanLahan'])->name('penggunaan-lahan');

    Route::get('penggunaan-lahan/create', [PenggunaanLahanController::class, 'create'])->name('create-pl');

    Route::post('penggunaan-lahan/create', [PenggunaanLahanController::class, 'createAction'])->name('pl.action');

    Route::get('/penggunaan-lahan/edit/{pl}', [PenggunaanLahanController::class, 'editPenggunaanLahan'])->name('edit-pl');

    Route::put('/penggunaan-lahan/edit/{pl}', [PenggunaanLahanController::class, 'update'])->name('pl.update');

    Route::delete('/penggunaan-lahan/delete/{id}', [PenggunaanLahanController::class, 'delete'])->name('pl.destroy');

    // [PENDUKUNG ROUTE]
    Route::get('pendukung', [PendukungController::class, 'pendukung'])->name('pendukung');

    Route::get('pendukung/create', [PendukungController::class, 'create'])->name('create-pendukung');

    Route::post('pendukung/post', [PendukungController::class, 'createAction'])->name('pendukung.action');

    Route::get('/pendukung/edit/{pendukung}', [PendukungController::class, 'editPendukung'])->name('edit-pendukung');

    Route::put('/pendukung/edit/{pendukung}', [PendukungController::class, 'update'])->name('pendukung.update');

    Route::delete('/pendukung/delete/{id}', [PendukungController::class, 'delete'])->name('pendukung.destroy');

    // [LISTRIK DAN INTERNET ROUTE]
    Route::get('listrik-dan-internet', [ListrikDanInternetController::class, 'listrikDanInternet'])->name('listrik-dan-internet');

    Route::get('/listrik-dan-internet/edit/{lni}', [ListrikDanInternetController::class, 'editlistrikDanInternet'])->name('edit-lni');

    Route::put('/listrik-dan-internet/edit/{lni}', [ListrikDanInternetController::class, 'update'])->name('lni.update');
});
