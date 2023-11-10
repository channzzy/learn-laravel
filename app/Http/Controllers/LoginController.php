<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    //Middleware dengan menggunakan construct
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    public function create(){
    return view('auth.login');
    }

    public function store(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);


        //Login tanpa menggunakan attempt
        // $user = User::where('email',$request->email)->first();
        // // dd($user);
        // if($user){
        //     if(Hash::check($request->password,$user->password)){
        //         // dd($user);
        //         Auth::login($user);

        //         return redirect('/');
        //     }
        // }

        //Login dengan menggunakan attempt
        //Bisa menggunakan array
        // $credentials = [
        //     'email' => $request->email,
        //     'password' => $request->password
        // ];

        //Bisa menggunakan request only
        // $credentials = $request->only('email', 'password');
        // dd($credentials);
        // if(Auth::attempt()){
        //     return redirect('/')->with('success', 'Anda berhasil login');
        // }

        //Langsung menggunakan validate
        // dd($credentials);
        if(Auth::attempt($credentials)){
                return redirect(RouteServiceProvider::HOME)->with('success', 'Anda berhasil login');
        }
        throw ValidationException::withMessages([
            'email' => 'Password yang anda masukan tidak sesuai'
        ]);
    }
}
