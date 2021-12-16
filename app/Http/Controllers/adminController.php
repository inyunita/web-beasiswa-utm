<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function index()
    {
        return view('adminlogin');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password'=> 'required'
        ]);

        if(Auth::attempt($credentials)){
            //menghindari orang nge hack dengan session yang sama (session regenerate)
            //intended untuk redirect user ke sebuah tempat sebelum melewati middleware

            $request->session()->regenerate();
            return redirect()->intended('/listbea');
        }

        return back();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin');
    }
}
