<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create(){
        return view('auth.register');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'username' => 'required|min:10|unique:users',
            'password' => 'required|min:8'
        ],
        [
            'name.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'email.unique' => 'Email sudah digunakan',
            'username.unique' => 'Username sudah digunakan',
            'username.required' => 'Username harus diisi',
            'username.min' => 'Username harus berisi minimal 10',
            'email.email' => 'Email harus berbentuk email',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password harus berisi minimal 8'
        ]);
        //Mengecek apakah email dan username sudah ada karena unique
        // $user = User::where('email', $request->email)
        //         ->orWhere('username', $request->username)->first();
        // if($user){
        //     dd('user sudah ada');
        // }

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/')->with('success','Terima kasih anda sudah melakukan register');
    }
}
