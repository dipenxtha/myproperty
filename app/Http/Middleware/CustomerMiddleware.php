<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            if(Auth::user()->role_as =='0'){
                return$next($request);
            }
            else{
                return redirect('/')->with('status', 'Access Denied! ');
            }   
        }
        else{
            return redirect('/index')->with('status','Please Login First'); 
        }
    }
}
