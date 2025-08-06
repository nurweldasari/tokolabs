<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


// Route utama login
Route::get('/', function () {
    return view('login'); 
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});


Route::get('/akun', function () {
    return view('akun');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/schedule', function () {
    return view('schedule');
});

Route::get('/etalase', function () {
    return view('etalase');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/kategori', function () {
    return view('kategori');
});


Route::post('/ubah_password', [AuthController::class, 'updatePassword'])->middleware('auth');

