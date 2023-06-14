<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
Use Illuminate\Support\Str;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function halamanlogin(){
        return view('login.login');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/dashboard');
        }
        return redirect('/');
    }

    public function regis(){
        return view('login.regis');
    }

    public function simpanregis(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return view('welcome');
    }
}
