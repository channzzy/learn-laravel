<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/Chandra', function(){
//     return 'Ini adalah test route';
// });

// //Route dengan parameter
// Route::get('/user/{id}', function ($id){
//     return 'Ini adalah user '.$id;
// });

// //Route dengan parameter opsional
// Route::get('/user/name/{name?}', function($name = null){
//     return $name;
// });

// //Route dengan parameter opsional dan default value
// Route::get('/user/umur/{umur?}', function($umur = '18'){
//     return $umur;
// });

//Route Name
// Route::get('/user/profile', function(){
// 	//
// })->name('profile');

//Route Tanpa Route Group
// Route::get('/user', [UserController, 'index'])->middleware('auth');
// Route::get('/post', [PostController, 'index'])->middleware('auth');

//Route dengan Route Gruop
// Route::middleware('auth')->group(function (){

//     Route::get('/user', [UserController, 'index']);
//     Route::get('/post', [PostController, 'index']);
// });

//Route dengan prefix
// Route::prefix('admin')->group(function (){
//     //     Route::get('/user', [UserController, 'index']);
//     //     Route::get('/post', [PostController, 'index']);
// });

//Route dengan middleware
// Route::get('/profile',function (){
//     //
// })->middleware('checkAge');

//Route dengan middlewre parameter
// Route::get('/profile', function(){
//     //
// })->middleware('role:admin');

//Route dengan controler
Route::get('/chandra',[UserController::class, 'index']);
//Route dengan single action controller
Route::get('/test',PostController::class);
//Route dengan view memparsing data
Route::view('/view','home',['name' => "Chandra Ardiansyah"]);