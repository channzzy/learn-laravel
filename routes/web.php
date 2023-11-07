<?php

use App\Http\Controllers\BrgController;
use Illuminate\Support\Facades\Route;

// //Cara lama
// // Route::get('/', function () {
// //     return view('home');
// // });

// //Cara baru
// // Route::view('/','home');
// Route::view('/','blog.home');

// /*Perbedaan compact dan array biasa untuk mengirimkan variable 
// Jika compact key dan value harus sama agar tidak terjadi error,
// sedangkan untuk array key dan value bisa berbeda
// */
// Route::view('profile','blog.profile' );
// Route::view('blog','blog.show');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});

Route::get('dashboard',[BrgController::class,'index'])->name('dashboard');
Route::view('register','auth.register')->name('register');
Route::post('create',[BrgController::class,'store'])->name('create.proses');
Route::view('/create','create')->name('create');
Route::get('edit/{brg:kode_brg}',[BrgController::class,'edit'])->name('edit');
Route::put('edit/{brg:kode_brg}',[BrgController::class,'update'])->name('update.proses');
Route::delete('delete/{brg:kode_brg}', [BrgController::class, 'destroy'])->name('delete.proses');
