<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    protected $username = 'username';

    public function getLogin()
    {
        return view("layouts.master");
    }

    public function authEnter(Request $request)
    {
        // dd(Hash::make("xsZy4"));
        $this->validate($request, [
            'name'    => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only(['name', 'password']);
        if (auth()->attempt($credentials)) {
            return redirect()->route("enter")->with("success", "Successfully logged in!");
        }
        return redirect()->back();
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('/')->with('check', 'Successfully logged out! Bye!');
    }
}
