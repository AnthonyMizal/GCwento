<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function show() {
        return view('auth.login');
    }

    public function showAdmin() {
        return view('auth.adminlogin');
    }

    public function login(Request $request) {
  

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);


        if (Auth::attempt($credentials)) {
            $user = Auth::user();
    
            if ($user->status === 'Active') {
                $request->session()->regenerate();
    
                if ($user->role === 'Admin') {
                    return redirect()->intended('admin/index');
                } else {
                    return redirect()->intended('stories/index');
                }
            } else {
                Auth::logout();
                return back()->withErrors([
                    'email' => 'Your account is currently banned.'
                ])->onlyInput('email');
            }
        }


        return back()->withErrors([
            'email' => 'The provided credentials do not match!'
        ])->onlyInput('email');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
