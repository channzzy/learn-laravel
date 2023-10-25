<?php

use Illuminate\Support\Facades\Route;

//Cara lama
// Route::get('/', function () {
//     return view('home');
// });

//Cara baru
// Route::view('/','home');
Route::view('/','blog.home');

/*Perbedaan compact dan array biasa untuk mengirimkan variable 
Jika compact key dan value harus sama agar tidak terjadi error,
sedangkan untuk array key dan value bisa berbeda
*/
Route::view('profile','blog.profile' );
Route::view('blog','blog.show');