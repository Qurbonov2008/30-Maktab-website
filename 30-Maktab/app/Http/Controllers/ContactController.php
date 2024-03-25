<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::limit(100)->get()->toArray();
        return view('Admin.Contact.index' , ['$contacts' => $contacts]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                "name" => "required",
                "email" => "required",
                "subject" => "required",
                "message" => "required",
            ]
        );

       
        if (!isset($validator)) {
            return view('about');
        } else {
            Contact::create([
                "name" => $request->name,
                "email" => $request->email,
                "subject" => $request->subject,
                "message" => $request->message,
            ]);
        }
        return view('contact');
    }
}
