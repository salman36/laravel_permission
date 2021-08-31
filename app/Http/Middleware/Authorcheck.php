<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Role;
use Auth;
class Authorcheck
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
        if((Auth::user()->role->role === 'Author' || Auth::user()->role->role === 'Super Admin' || Auth::user()->role->role === 'Admin') && Auth::user()->role_access === 'on' || Auth::user()->account_access === 'on'){
            return $next($request);
    
           }else{
               return redirect('admin/dashboard');
           }
        return $next($request);
    }
}
