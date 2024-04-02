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
        return redirect()->intended('/');
    }
    public function get_email()
    {
        $emails = Email::all();
        return view('Admin.Email.index', ['emails' => $emails]);
    }

    public function show()
    {
        return view('Admin.Email.create');
    }
    public function new_email(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'emial' => 'required'
            ]
        );
        if (!isset($validator)) {
            return view('Admin.Email.index');
        } else {
            Email::create([
                'email' => $request->email
            ]);
        }
        return redirect()->intended('Admin_email');
    }
    public function get_update_email($id)
    {
        $email = Email::find($id);
        return view('Admin.Email.edit', ['email' => $email]);
    }
    public function email_update(Request  $request, int $id)
    { {
            $validator = Validator::make(
                $request->all(),
                [
                    'email' => 'required'
                ]
            );
        }
        $Email =  Email::where('id', $id)->first();
        $Email->update(
            [
                'id' => $request->id,
                'email' => $request->email,
            ]
        );
    }
    public function email_post_update(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'id' => 'required',
                'email' => 'required'
            ]
        );
        if (!isset($validator)) {
            return redirect()->intended('get_update_email');
        } else {
            Email::update([
                'id' => $request->id,
                'email' => $request->email,
            ]);
        }
    }


    public function delete(Email $email)
    {
        $email->delete();
        return redirect()->intended('Admin_email');
    }
}
