<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request)
    {
        $name = $request->input("name");
        $email = $request->input("mail");
        $subject = $request->input("subject");
        $msg = $request->input("message");
        Mail::to($email)->send(new \App\Mail\ContactForm\Mail($name, $email, $subject, $msg));
        Mail::to("wooflaravel@gmail.com")->send(new \App\Mail\ContactForm\Mail($name, $email, $subject, $msg));
        return redirect('/contactPage');
    }
}
