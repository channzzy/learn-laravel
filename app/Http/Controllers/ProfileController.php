<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function create(){
        return view('blog.profile');
    }

    public function store(){
        dd('data berhasil dikirim');
    }
}
