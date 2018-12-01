<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rsvpMail extends Controller
{
    public static function initialRSVP($user, $rsvp, $plus_one)
    {
        $data = array("name" => $user, "rsvp" => $rsvp, "plus_one" => $plus_one);
        Mail::send("rsvp_mail", $data, function($message) {
             $message->to('newyearseve@ineffable.at', "Niklas")->cc("nik.schoe@icloud.com", "Steffi")->subject
                ('New RSVP submission!');
        });
        dd('Mail Send Successfully');
    }
}
