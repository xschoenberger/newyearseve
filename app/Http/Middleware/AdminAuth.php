<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Auth\AuthenticationException;

class AdminAuth
{
    public function handle($request, Closure $next)
    { 
        if(Auth::guest() || auth()->user()->u_group !== 1) {
            return redirect()->route("enter")->with("warning", "Please login!");
        }
        return $next($request);
    }
}
