<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validations;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function contactDetails(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'string|email|max:255',
            'subject' => 'nullable|string',
            'message' => 'nullable|string',
        ]);



        $contact = new contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        return redirect('contact')->with('success', 'Details saved successfully!');
    }
}
