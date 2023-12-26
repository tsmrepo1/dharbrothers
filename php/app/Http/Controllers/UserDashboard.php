<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboard extends Controller
{
    public function myaccount()
    {
        $avatar = $this->generateGravatarURL(Auth::user()->email);
        $orders = Order::where("user_id", Auth::user()->id)->get();
        return view("pages.my_account", ["avatar" => $avatar, "orders" => $orders]);
    }

    public function dologin(Request $request)
    {
        
    }

    function generateGravatarURL($email, $size = 80, $defaultImage = 'identicon') {
        $emailHash = md5(strtolower(trim($email)));
        return "https://www.gravatar.com/avatar/$emailHash?size=$size&d=$defaultImage";
    }
}
