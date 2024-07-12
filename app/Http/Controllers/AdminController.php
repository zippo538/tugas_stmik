<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showLoginForm(){
        return view('admin.login');
    }
    public function login(Request $request){
        $credential = $request->only('email','password');
        if(Auth::guard('admin')->attempt($credential)){
            return redirect()->route('admin.dashboard');
        }
        return redirect()->back()->withErrors(['Email'=> 'Email dan password salah']);
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }

}
