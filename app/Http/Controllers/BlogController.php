<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __invoke(Request $request, $username){
        return view('blog.show', ['username' => $username]);
    }
}
