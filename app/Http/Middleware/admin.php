<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Role;
use Auth;

class admin
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
        // $data = Auth::user()->role->role === 'Admin' && Auth::user()->role_access === 'on';
        // dd($data);

        if((Auth::user()->role->role === 'Admin' || Auth::user()->role->role === 'Super Admin' || Auth::user()->role->role === 'Author') && Auth::user()->role_access === 'on'){
            return $next($request);
    
           }else{
               return redirect('admin/dashboard');
           }
        return $next($request);
    }
}
