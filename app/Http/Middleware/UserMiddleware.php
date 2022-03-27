<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()?Auth::user()->role_id:"" == 2)
        {
            return $next($request);
        }
        else
        {
            // return redirect('/')->with('status', 'You are not allowed to admin dashboard area');
            //return redirect('/customer-login')->with('status', 'You are not allowed to admin dashboard area');
            return redirect()->back();
        }
    }
}
