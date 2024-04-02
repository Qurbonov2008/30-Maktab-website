<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function authenticate(Request $request)
    {
        $login = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($login)) {
            $request->session()->regenerate();
        }
        return back()->withErrors([
            'name' => 'Ozodbek',
            'password' => '12345678',
        ])->onlyInput('email');
        
        return view('index');
    }
}
