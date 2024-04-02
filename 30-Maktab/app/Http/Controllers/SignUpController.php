<?php

namespace App\Http\Controllers;

use App\Models\Sign_up;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SignUpController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                "name" => "required",
                "email" => "required",
                "subject" => "required",
                "class" => 'required'
            ]
        );

        if (!isset($validator)) {
            return view('index');
        } else {
            Sign_up::create([
                "name" => $request->name,
                "email" => $request->email,
                "subject" => $request->subject,
                "class" => $request->class,

            ]);
        }
      

        return redirect()->intended('/');
        
    }
    public function sign(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                "name" => "required",
                "email" => "required",
                "subject" => "required",
                "class" => "required"
            ]
        );

       
        if (!isset($validator)) {
            return view('about');
        } else {
            Sign_up::create([
                "name" => $request->name,
                "email" => $request->email,
                "subject" => $request->subject,
                "class" => $request->class,

            ]);
        }
      

        return view('about');
        
    }
    
}
