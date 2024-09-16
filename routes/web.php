<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\CodeArsipController;
use App\Http\Controllers\PegawaiController;
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

Route::get('/', [LoginController::class, 'home'])->name('home')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
Route::get('/lupapassword', [LoginController::class, 'lupapassword'])->name('lupapassword')->middleware('guest');
Route::get('/registadmin', [LoginController::class, 'registadmin'])->name('registadmin')->middleware('guest');
Route::post('/registadmin', [LoginController::class, 'registadminStore'])->name('registadminstore')->middleware('guest');
Route::post('/lupapassword', [LoginController::class, 'lupapasswordstore'])->name('lupapasswordstore')->middleware('guest');


Route::middleware('auth')->group(
    function () {  //grouping route hanya boleh diakases ketika login
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
        Route::resource('user', UserController::class);
        Route::resource('category', CategoryController::class);
        Route::resource('arsip', ArsipController::class);
        Route::get('/downloadFile/{arsip}', [ArsipController::class, 'downloadFile'])->name('arsip.downloadFile');
        Route::get('/downloadexcel', [ArsipController::class, 'downloadexcel'])->name('arsip.downloadexcel');
        Route::get('/detailunduhan/{arsip}', [ArsipController::class, 'detailunduhan'])->name('arsip.detailunduhan');
        Route::get('/downloadword', [ArsipController::class, 'downloadword'])->name('arsip.downloadword');
        // Route::post('getklasifikasi', [ArsipController::class, 'getklasifikasi'])->name('arsip.getklasifikasi')->middleware('guest');
        Route::get('getklasifikasi', [ArsipController::class, 'getklasifikasi'])->name('arsip.getklasifikasi');
        Route::resource('codearsip', CodeArsipController::class);
        Route::resource('pegawai', PegawaiController::class);
        Route::get('profile', [UserController::class, 'profile'])->name('user.profile');
        Route::post('profile', [UserController::class, 'profileStore'])->name('user.profile.store');

    }
);