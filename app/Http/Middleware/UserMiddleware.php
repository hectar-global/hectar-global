<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

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
      // if(Auth::user()->role_id == 2)
        {
            return $next($request);
        }
        else
        {
            // return redirect('/')->with('status', 'You are not allowed to admin dashboard area');
            //return redirect('/customer-login')->with('status', 'You are not allowed to admin dashboard area');
            //return redirect()->back();
            // return redirect('/home')->with('status', 'You are not allowed to admin dashboard area');
            return redirect('/userlogin')->with('status', 'You are not allowed to admin dashboard area');
        }

        // if(Auth::user()->role_id == 2)
        // {
        //     return $next($request);
        // }
        // else
        // {
        //     return redirect('/home')->with('status', 'Please login');
            
        // }
    }
}
