<?php

namespace App\Http\Controllers;

use App\Invitations;
use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('admin.auth');
    }

    public function cp() {
    	$guests = Invitations::all();
    	// Create empty guest list array
    	$guest_list = [];
    	// Create 2 subarrays. --
    	// --> "rsvp" for the people who are coming && "plus_one" for people who will bring someone
    	// -- Push every guest into both subarrays with the value of either rsvp or plus_one -->
    	foreach ($guests as $key => $guest) {
    		$guest_list["rsvp"][$guest->user->name] = $guest->rsvp;
    	 	$guest_list["plus_one"][$guest->user->name] = $guest->plus_one;
	    	// remove guests who are not coming from "rsvp" subarray
	    	if (($key = array_search("not coming", $guest_list["rsvp"])) !== false) {
			    unset($guest_list["rsvp"][$key]);
			}
	    	// remove guests who will not bring anyone from "plus_one" subarray
	    	if (($key = array_search("no", $guest_list["plus_one"])) !== false) {
			    unset($guest_list["plus_one"][$key]);
			}
    	}
    	return view("cp", compact("guests", "guest_list"));
    }
}
