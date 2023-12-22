<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboard extends Controller
{
    public function myaccount()
    {
        return view("pages.my_account");
    }

    public function dologin(Request $request)
    {
        
    }
}
