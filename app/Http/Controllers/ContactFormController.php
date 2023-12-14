<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function contactForm(Request $request){


        $incomingFields = $request->validate([
            'contactName' => 'required',
            'contactEmail' => 'required|email',
            'contactSubject' => 'required',
            'contactMessage' => 'required',
        ]);

        $contactName = $incomingFields['contactName'];
        $contactEmail = $incomingFields['contactEmail'];
        $contactSubject = $incomingFields['contactSubject'];
        $contactMessage = $incomingFields['contactMessage'];

        Mail::to($contactEmail)->send(new ContactFormMail($contactName, $contactEmail,$contactSubject, $contactMessage));
        return redirect("/")->with('success','Email sent.');
    }


}
