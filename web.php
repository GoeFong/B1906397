<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DangnhapController;

Route::middleware('auth')->group(function(){
    Route::get('/dsnhanvien', function () {
        return view('nhanvien.dsnhanvien');
    })->name('home');
    
});

Route::view('/',"welcome");
Route::get('/dangnhap', [DangnhapController::class, 'dangnhap'])->name('login');
Route::post('/dangnhap', [DangnhapController::class, 'dangnhappost'])->name('login.post');
Route::get('/dangky', [DangnhapController::class, 'dangky'])->name('register');
Route::post('/dangky', [DangnhapController::class, 'dangkypost'])->name('register.post');


