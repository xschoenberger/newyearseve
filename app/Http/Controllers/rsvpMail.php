<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class rsvpMail extends Controller
{
    public static function initialRSVP($user, $rsvp, $plus_one)
    {
        $data = array("name" => $user, "rsvp" => $rsvp, "plus_one" => $plus_one);
        Mail::send("rsvp_admin", $data, function($message) {
        	$name = ucfirst(auth()->user()->name);
             $message->to('newyearseve@ineffable.at', "Niklas")->cc("nik.schoe@icloud.com", "Steffi")->subject("RSVP submission from $name");
        });
        // dd('Mail Send Successfully');
    }

    public static function updateRSVP($user, $rsvp, $plus_one) {
    	$data = array("name" => $user, "rsvp" => $rsvp, "plus_one" => $plus_one);
        Mail::send("rsvp_update", $data, function($message) {
        	$name = ucfirst(auth()->user()->name);
             $message->to('newyearseve@ineffable.at', "Niklas")->cc("nik.schoe@icloud.com", "Steffi")->subject("$name updated the RSVP!");
        });
    }
}
