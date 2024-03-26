<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
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
 
public function delete($id)
{
    $contact = Contact::findOrFail($id);
    $contact->delete();

    return redirect()->route('Admin.Contact.index');
}
public function get_update($id)
{
    $contacts = Contact::find($id);
    return view('Admin.Contact.edit' , ['contact' => $contacts]);
}
public function contact_update(Request $request , $id)
{

// Validate qilish
$request->validate([
    'name' => 'required|string|max:25',
    'email' => 'required|string|email|max:25',
    'subject' => 'required|string|max:30',
    'message' => 'required|string|max:30'
]);

// Ma'lum bir kontakt obyektini topamiz
$contact = Contact::findOrFail($id);

// Ma'lumotlarni o'zgartiramiz
$contact->name = $request->input('name');
$contact->email = $request->input('email');
$contact->subject = $request->input('subject');
$contact->message = $request->input('message');

// Ma'lumotlarni saqlash
$contact->save();

// Foydalanuvchini yangilangan ma'lumotlarni ko'rishga yo'naltiramiz
return redirect()->route('contacts.index')->with('success', 'Kontakt ma\'lumotlari muvaffaqiyatli yangilandi');
}

}
