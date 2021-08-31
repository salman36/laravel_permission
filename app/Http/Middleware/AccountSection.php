<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;

class AccountSection
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
        // if(Auth::user()->role_id === 4 || Auth::user()->role_id === 1){
        //     return $next($request);
    
        //    }else{
        //        return redirect('admin/dashboard');
        //    }
        return $next($request);
    }
}
