<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Admin;

class MainController extends Controller
{
    use AuthenticatesUsers;


    public function __construct()
    {
        $this->middleware('web')->except('logout');
    }
    
    public function loginrequest(Request $request){
        // return $request->input();

        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);

        
        $creds = $request->only('email','password');
        // dd($creds);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            // return redirect()->route('dashboard');
            return redirect('/admin/dashboard');
            
        }else{
            return redirect('/');
        }  

    }

    public function dashboard()
    {

        return view('dashboard');
    }

    public function logout(Request $request)
                {
                    Auth::guard('web')->logout();
                    return redirect('/');
                }
}







