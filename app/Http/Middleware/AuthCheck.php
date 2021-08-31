<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
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

        // if(!session()->has('LoggedUser'))
        // {
        //     return redirect('/')->with('fail', 'You must logged in');
        // }
        

        // if(session()->has('LoggedUser') && ($request->path() == '/auth/login' || $request->path() == '/auth/register' ) ){
        //     return back();
        // }

        // if (false == Auth::guard('AuthCheck')->check()) {
        //     return redirect()->route('dashboard');
        // }


        return $next($request);
    }
}
