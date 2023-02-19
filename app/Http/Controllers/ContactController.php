<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact.index');
    }

    public function sendEmail(Request $request)
    {
        $infos = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        $send = "pangakevin@gmail.com";

        Mail::to($send)->send(new ContactMail($infos));
        return back()->with('message','Votre message a été envoyé');
    }
}
