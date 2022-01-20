<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidationRequest;
use App\Models\Contact;

class ContactController extends Controller{
    public function submit(ValidationRequest $req){
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');
        $contact->phone = $req->input('phone');

        $contact->save();

        return redirect()->route('home-page')->with('success', 'Info was added');
    }
}
