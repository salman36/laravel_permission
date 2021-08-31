<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;


class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::paginate(10);
        // dd($roles);
        return view('admin.role.index',['roles'=> $roles]);
    }

    public function view()
    {
        return view('admin.role.create');
    }

    public function save(Request $request)
    {
        $request->validate([
            'role'=>'required'
            
        ]);

        $roles = new Role;
        $roles->role = $request->role;
        // dd($roles);
        $roledata = $roles->save();
         return redirect('/roles');
    }

    
}
