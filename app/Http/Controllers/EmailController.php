<?php

namespace App\Http\Controllers;

use App\Mail\AppointmentMail;
use App\Mail\ContactMail;
use App\Mail\SubscriberMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function appointment(Request $request) {
        //Validate the request...
        $this->validate($request, [
            'name' => 'required',
            'email' => ['email', 'required'],
            'child_name' => 'required',
            'child_age' => 'required',
            'message' => 'required',
        ]);
        //dd($request->all());

        $name = $request->name;
        $email = $request->email;
        $child_name = $request->child_name;
        $child_age = $request->child_age;
        $message = $request->message;

        //Gathering the data from the AppointmentMail.php
        $compose = [
            'name' => $request->name,
            'email' => $request->email,
            'child_name' => $request->child_name,
            'child_age' => $request->child_age,
            'message' => $request->message,
        ];

        $schoolMail = "info@gurusandgeniusschools.org";
        
        Mail::to($schoolMail)->send(new AppointmentMail($name, $email, $child_name, $child_age, $message ));
        
        return back()->with('success', 'Message sent successfully. We will get back to you shortly, thank you.');
    }

    public function subscriber(Request $request) {
        //Validate the request...
        $this->validate($request, [
            'email' => ['email', 'required'],
        ]);
            //dd($request->all());

            //Setting up variables
            $email = $request->email;

            //Gathering the data from the subscriber.php
            $compose = [
                'email' => $request->email,
            ];

            $schoolMail = "info@gurusandgeniusschools.org";

            //Looping through the people and sending email
            Mail::to($schoolMail)->send(new SubscriberMail($email));
      
            return back()->with('success', 'Message sent successfully. We will get back to you shortly,  thank you.');
    }

    public function contact(Request $request) {
        //Validate the request...
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        //dd($request->all());

        //Setting up variables
        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;

        //Gathering the data from the contact.php
        $compose = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        $schoolMail = "info@gurusandgeniusschools.org";

        //Looping through the people and sending email
        Mail::to($schoolMail)->send(new ContactMail($name, $email, $subject, $message));

        return back()->with('success', 'Message sent successfully. We will get back to you shortly, thank you.');
    }
}
