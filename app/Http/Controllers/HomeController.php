<?php

namespace App\Http\Controllers;

use App\Http\Controllers\rsvpMail;
use App\Invitations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function delRegister() {
        return response()->view('errors.404', [], 404);
    }

    public function enter() {
        // dd(Hash::make("!phillipp_31.12!"));
        // auth()->logout();
        $rsvp_submitted = Invitations::where("user_id", auth()->id())->get();
        if(!empty($rsvp_submitted[0])) {
            $info = $rsvp_submitted[0];
            return redirect()->route("rsvp.fin")->with("success", "You already submitted your RSVP infos. You can change them here if you want :)");
        }
		return view("home");
    }

    public function rsvpSubmit(Request $request) {
        $validator = Validator::make($request->all(), [
            "rsvp" => "required"
        ]);
        $plus_one = (!isset($request->plus_one) || $request->rsvp == "not coming") ? "no" : "yes";
        // Validation Error
        if ($validator->fails()) {
            return redirect()->route("enter")
            ->withErrors($validator)
            ->withInput();
        }
        Invitations::create([
            "user_id" => auth()->id(),
            "rsvp" => $request->rsvp,
            "plus_one" => $plus_one
        ]);

        $format_plus_one = ($plus_one == "no") ? " not" : " ";
        rsvpMail::initialRSVP(ucfirst(auth()->user()->name), $request->rsvp, $format_plus_one);

        return redirect()->route("rsvp.fin")->with("success", "Nice! Thanks for the RSVP!");
    }

    public function rsvpFin() {
        // auth()->logout();
        $info = Invitations::where("user_id", auth()->id())->get();
        if(empty($info[0])) {
            return redirect()->route("enter");
        }
        $info = $info[0];
        return view("fin", compact("info"));
    }

    public function rsvpUpdate(Request $request) {
        $plus_one = (!isset($request->plus_one) || $request->rsvp == "not coming") ? "no" : $request->plus_one;
        Invitations::where("user_id", auth()->id())->update(["rsvp" => $request->rsvp, "plus_one" => $plus_one]);

        $format_plus_one = ($plus_one == "no") ? " not" : " ";
        rsvpMail::updateRSVP(ucfirst(auth()->user()->name), $request->rsvp, $format_plus_one);
        
        return redirect()->back()->with("success", "Successfully updated your details :)");
    }
}
