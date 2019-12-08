<?php

namespace HanhDo\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use HanhDo\Contact\Mail\ContactMailable;
use HanhDo\Contact\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        Mail::to(config('contact.send_email_to'))
            ->send(new ContactMailable($request->name, $request->message));
        Contact::create($request->all());
        return redirect()->route('contact');
    }
}
