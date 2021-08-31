<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Role;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::with('role')->paginate(10);
        // dd($admins);
        return view('admin.user.index',['admins'=> $admins]);
    }


    public function view(){
        $admins = Role::get();
        // dd($admins);
        return view('admin.user.create', ['admins' => $admins]);
    }

    public function save(Request $request){
        // dd($request->all());
        $request->validate([
            'name'=>'required',
            'username'=>'required',
            'role'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:5|max:12'
        ]);

        $admin = new Admin;
        $admin->name = $request->name;
        $admin->username = $request->username;
        $admin->role_id = $request->role;
        $admin->email = $request->email;
        $admin->admin_access = $request->admin_access;
        $admin->role_access = $request->role_access;
        $admin->account_access = $request->account_access;
        $admin->password = Hash::make($request->password);

        // dd($admin);
        $admins = $admin->save();
         return redirect('/admins');
    }
}
