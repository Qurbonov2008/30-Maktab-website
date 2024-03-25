<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                "email" => "required",
            ]
        );
            Email::create([
                "email" => $request->email ?? view('index'),
            ]);
            return view('index');


    }
    public function create()
    {
        return view("index");
    }
}
