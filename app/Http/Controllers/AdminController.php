<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function loginHandler(Request $request){
        $fieldType = 'username';

        $request->validate([
            'login_id'=>'required|exists:admins,username',
            'password'=>'required|min:5|max:45'
        ],[
            'login_id.required'=>'Username is required!',
            'login_id.exists'=>'Username is not exists in system',
            'password.required'=>'Password is required!'
        ]);

        $creds = array(
            $fieldType => $request->login_id,
            'password' =>$request->password
        );

        if (Auth::guard('admin')->attempt($creds)) {
            return redirect()->route('admin.home');
        }else{
            session()->flash('fail','Data salah');
            return redirect()->route('admin.login');
        }
    }
}
