<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function store(Request $request)
    {
        $login = $request->validate([
            "name" => "required",
            "password" => "required"
        ]);
        if (Auth::attempt($login)) {
            $request->session()->regenerate();
            return redirect()->intended('registerate');
        }
        return back()->withErrors([
            "name" => "Salom",
        ])->onlyInput();
    }
    public function destroy(Login $login)
    {
        return view('login');
    }
}
