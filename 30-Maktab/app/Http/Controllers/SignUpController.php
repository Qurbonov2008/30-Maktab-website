<?php

namespace App\Http\Controllers;

use App\Models\Sign_up;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SignUpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                "name" => "required",
                "email" => "required",
                "subject" => "required",
            ]
        );

        if (!isset($validator)) {
            return view('index');
        } else {
            Sign_up::create([
                "name" => $request->name,
                "email" => $request->email,
                "subject" => $request->subject,

            ]);
        }
      

        return view('index');
        
    }
    public function sign(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                "name" => "required",
                "email" => "required",
                "subject" => "required",
            ]
        );

       
        if (!isset($validator)) {
            return view('about');
        } else {
            Sign_up::create([
                "name" => $request->name,
                "email" => $request->email,
                "subject" => $request->subject,

            ]);
        }
      

        return view('about');
        
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('login');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sign_up $sign_up)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sign_up $sign_up)
    {
        //
    }
}
