<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function store(Request $request)
    {
        return view('Auth.login');


        $login = $request->validate([
            "name" => "required",
            "password" => "required"
        ]);
        if(Auth::attempt($login)){
            $request->session()->regenerate();
return redirect()->intended('registerate');

        }
        return back()->withErrors([
            "name" => "Salom",
        ])->onlyInput();
    }

    /**
     * Store a newly created resource in storage.
     */
//     public function store(Request $request)
//     {
//         $login = $request->validate([
//             "name" => "required",
//             "password" => "required"
//         ]);
//         if(Auth::attempt($login)){
//             $request->session()->regenerate();
// return redirect()->intended('registerate');

//         }
//         return back()->withErrors([
//             "name" => "Salom",
//         ])->onlyInput();
//     }

    /**
     * Display the specified resource.
     */
    public function show(Login $login)
    {
        return view('index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Login $login)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Login $login)
    {
        //
    }
}
