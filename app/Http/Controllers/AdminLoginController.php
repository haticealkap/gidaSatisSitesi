<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index(){
        return view('dashboard.login');
    }
    public function login(Request $request){
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password,'admin'=>0]))
        {
            return redirect('/');
        }else if(Auth::attempt(['email' => $request->email, 'password' => $request->password,'admin'=>1])){
            return redirect('/admin');
        }   
        
        return redirect()->intended('/admin/login')->withErrors('Email veya Şifre Hatalı');
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
