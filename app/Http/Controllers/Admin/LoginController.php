<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function home(){
        return view('admin.home');
    }

    public function loginPost(Request $request){
        if(Auth::guard('admin')->attempt($request->only('email','password'))){
            $cookie_name ="admin";
            $cookie_value =Auth::guard('admin')->id()."-".$request->email."-".$request->password;
            setcookie($cookie_name, $cookie_value, time() + 86400, "/");

            return redirect()->route('admin.home');
        }
        else{
            return redirect()->route('admin.login')->withErrors('Email Adresi veya Şifresi Hatalı!');
        }
    }

    public function logout(){
        Auth::guard('admin')->logout();

        return redirect()->route('admin.login');
    }
}
