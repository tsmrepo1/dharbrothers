<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use Illuminate\Support\Facades\Auth;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        $user = Auth::user();

        if ($user->role == "ADMIN")
        {
            return redirect()->intended('/admin');
        } 
        elseif($user->role == "USER" ) 
        {
            return redirect()->intended('/my-account');
        }
        else 
        {
            return redirect()->intended('/');
        }
    }
}
