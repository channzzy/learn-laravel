<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
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
Route::get('task', [TaskController::class, 'index']);
// Route::get('task/create', [TaskController::class, 'create']);
Route::post('task', [TaskController::class, 'store']);
Route::get('task/{id}/edit', [TaskController::class, 'edit']);
Route::put('task/{id}', [TaskController::class, 'update']);
Route::delete('task/{id}', [TaskController::class, 'destroy']);