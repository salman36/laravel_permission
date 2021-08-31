<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function dailyrep()
    {
        return view('admin.account.daily');
    }

    public function monthlyrep()
    {
        return view('admin.account.monthly');
    }
}
