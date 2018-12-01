<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rsvpMail extends Controller
{
    public function initialRSVP($user, $rsvp, $plus_one)
    {
        $data = array("name" => $user, "rsvp" => $rsvp, "plus_one" => $plus_one);
        Mail::send("rsvp_mail", $data, function($message) {
             $message->to('nik.schoe@gmail.com', "New Year's Eve")->subject
                ('New RSVP Submit!');
        });
        dd('Mail Send Successfully');
    }
}
