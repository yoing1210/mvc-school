<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
   public function index()
   {
   
        return view ('/login.index', [
            "title" => "login"
        ]);
   }

   public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/admin');
        }
        return back()->with('loginError', 'login failed !');

    }

    public function logout(Request $request)
    {
        Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');

    }
}
