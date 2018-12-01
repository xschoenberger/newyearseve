<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rsvpMail extends Controller
{
    public function initialRSVP($user, $rsvp, $plus_one)
    {
        $data = array("name" => $user, "rsvp" => $rsvp, "plus_one" => $plus_one);
        Mail::send("rsvp_mail", $data, function($message) {
             $message->to('newyearseve@ineffable.at', "New Year's Eve")->cc("nik.schoe@icloud.com")->subject
                ('New RSVP submission!');
        });
        dd('Mail Send Successfully');
    }
}
