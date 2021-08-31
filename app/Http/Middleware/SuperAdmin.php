<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Role;
use Auth;


class SuperAdmin
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
        // Auth::admin('admin')->role_id == 1;
        // $admin = app()->session->get('LoggedUser');
        //  $check=  Admin::where('role_id',1)->get();
        //  dd($check);
        // $check = $admin->role_id;
        // $check = Auth::admin()->role_id == 1;
        // dd($check);
        // $roles = Role::all();
        // dd($roles->Admin);

        // $check = Auth::user()->role->role;
        // dd($check);
        // $data = Auth::user()->role->role === 'Super Admin';

        // dd($data);
       
       if(Auth::user()->role->role === 'Super Admin'){
        return $next($request);

       }else{
           return redirect('admin/dashboard');
       }
    // dd($check);
        
        
        // dd(auth()->user());
    
        return $next($request);
    }
}
