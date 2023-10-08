<?php

use Illuminate\Support\Facades\Route;

//Cara lama
// Route::get('/', function () {
//     return view('home');
// });

//Cara baru
// Route::view('/','home');
$appName = 'Laravel 9';
Route::view('/','home',['appName' => $appName]);

/*Perbedaan compact dan array biasa untuk mengirimkan variable 
Jika compact key dan value harus sama agar tidak terjadi error,
sedangkan untuk array key dan value bisa berbeda
*/

Route::get('profile', function(){
    $name = 'Chandra Ardiansyah';
    return view('profile',[
        "name" => $name,
    ]);
});

Route::view('posts/first-post','post.show');