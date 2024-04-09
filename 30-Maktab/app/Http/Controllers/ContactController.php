<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Contracts\Service\Attribute\Required;

class ContactController extends Controller
{
    public function conatact()
    {
        return view('contact');
    }
    public function index()
    {
        $contacts = Contact::all();
        return view('Admin.Contact.index', compact('contacts'));
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
    public function get_contact()
    {
        return view('Admin.Contact.create');
    }
    public function new_contact(Request  $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required',
                'subject' => 'required',
                'message' => 'required'
            ]
        );

        if (!isset($validator)) {
            return view('Admin.Contact.create');
        } else {
            Contact::create(
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'subject' => $request->subject,
                    'message' => $request->message
                ]
            );
        }
        return redirect()->intended('Admin_contact');
    }

    public function delete(Contact $contact)
    {
       $contact->delete();

    //    return redirect()->intended('Admin_contact');
    }
    public function get_update($id)
    {
        $contacts = Contact::find($id);
        return view('Admin.Contact.edit', ['contact' => $contacts]);
    }
    public function contact_update(Request $request)
    { {
            $validator = Validator::make(
                $request->all(),
                [
                    "id" => "required",
                    "name" => "required",
                    "email" => "required",
                    "subject" => "required",
                    "message" => "required",
                ]
            );

            $Product = Contact::first();
            $Product->update([
                "id" => $request->id,
                "name" => $request->name,
                "email" => $request->email,
                "subject" => $request->subject,
                "message" => $request->message,
            ]);

            return redirect()->intended('Admin_contact');
        }
    }
}
