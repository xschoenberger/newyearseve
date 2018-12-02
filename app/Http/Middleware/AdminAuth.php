<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Auth;

class AdminAuth
{
    public function handle($request, Closure $next)
    { 
        if(auth()->user()->u_group !== 1) {
            return redirect()->route("enter")->with("info", "Please login!");
        }
        return $next($request);
    }
}
