<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        // dd($request);
        $credentials = $request->validate([
            'username'=>'required',
            'password'=>'required|min:5'
        ]);

        if(auth()->attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors()([
            'username'=>'Username anda salah',
            // 'password'=>'Password anda salah',
        ])->onlyInput('username');
    }

    public function postLogout(Request $request)
    {
        Session::flush();
        Auth::logout();
        $request->session()->invalidate();
        return redirect('login');
    }
}
