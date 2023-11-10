<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserControler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Cara lama
// Route::get('/', function () {
//     return view('home');
// });

//Cara baru
// Route::view('/','home');
// Route::view('/','blog.home');

/*Perbedaan compact dan array biasa untuk mengirimkan variable 
Jika compact key dan value harus sama agar tidak terjadi error,
sedangkan untuk array key dan value bisa berbeda
*/
//Get data dengan menggunakan request 
// Route::get('profile', function(Request $request){
//     $name = $request->name ?? 'User';
//     return view('blog.profile', ['name' => $name]);
// });

//Get data dengan menggunakan wildcard

// Route::get('profile/{username}', function($username = 'User'){
//     return view('blog.profile', ['name' => $username]);
// });
// Route::view('blog','blog.show');

//Route with controller
Route::get('/', HomeController::class);
Route::get('profile', [ProfileController::class, 'create']);
Route::post('profile', [ProfileController::class, 'store']);
Route::get('blog/{identify}', [BlogController::class, '__invoke']);

//Tanpa menggunakan resource Route
// Route::get('task', [TaskController::class, 'index']);
// // Route::get('task/create', [TaskController::class, 'create']);
// Route::post('task', [TaskController::class, 'store']);
// Route::get('task/{id}/edit', [TaskController::class, 'edit']);
// Route::put('task/{id}', [TaskController::class, 'update']);
// Route::delete('task/{id}', [TaskController::class, 'destroy']);


Route::middleware('auth')->group(function(){
    //Dengan menggunakan resource Route
    Route::resource('task', TaskController::class);
    Route::post('logout', [LogoutController::class, '__invoke'])->name('logout');

});
Route::get('users', [UserControler::class, 'index']);

//Route dengan identifier custom
Route::get('users/{user:username}/show', [UserControler::class, 'show'])->name('users.show');

//Middleware dengan tanpa group route
// Route::get('register', [RegisterController::class, 'create'])->name('register')->middleware('guest');
// Route::post('register', [RegisterController::class, 'store'])->name('create.account')->middleware('guest');
// Route::get('login', [LoginController::class, 'create'])->name('login')->middleware('guest');
// Route::post('login', [LoginController::class, 'store'])->name('login.proses')->middleware('guest');

//Middleware dengan group route
Route::middleware('guest')->group(function(){
    Route::get('register', [RegisterController::class, 'create'])->name('register');
    Route::post('register', [RegisterController::class, 'store'])->name('create.account');
    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store'])->name('login.proses');
});