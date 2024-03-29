<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class registerController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
           
         $validatedData = $request->validate([
             'username' => [ 'required', 'min:3', 'max:255', 'unique:users'],
             'password' => 'required|min:5|max:255'
         ]);

         $validatedData['password'] = bcrypt($validatedData['password']);

         User::create($validatedData);
         return redirect('/login');
        
    }
}
