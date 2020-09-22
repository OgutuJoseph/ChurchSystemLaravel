<?php

namespace App\Http\Controllers;

use Session;
use App\Contact; 
use Illuminate\Http\Request;
session_start();

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();
        return view('welcome');
    }

    public function sendMessage(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
 
        return redirect()->back()->with('success', 'Message Sent Successfully. Thank Your For Reaching Out');
    }
}
