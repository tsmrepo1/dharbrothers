<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Order;
use App\Models\Post;
use App\Models\Service;
use App\Models\TestimonialPage;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserPermission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $banners = Banner::all();
        $services = Service::all();
        $testimonials = TestimonialPage::all();
        $posts = Post::where("status", "PUBLISH")->limit(3)->get();

        return view("pages.home", [
            "banners" => $banners,
            "services" => $services, 
            "testimonials" => $testimonials,
            "posts" => $posts
        ]);
    }

    public function services(Request $request)
    {
        $services = Service::all();
        return view("pages.services", ["services" => $services]);
    }

    public function single_service(Request $request) 
    {
        $service = Service::where("slug", $request->slug)->first();
        return view("pages.service", ["service" => $service]);
    }

    public function posts(Request $request)
    {
        $posts = Post::all();
        return view("pages.posts", ["posts" => $posts]);
    }

    public function single_post(Request $request)
    {
        $post = Post::where("slug", $request->slug)->first();
        return view("pages.post", ["post" => $post]);
    }

    public function testimonials(Request $request)
    {
        $testimonials = TestimonialPage::all();
        return view("pages.testimonials", ["testimonials" => $testimonials]);
    }

    public function about() 
    {
        return view("pages.about");
    }

    public function contact()
    {
        return view("pages.contact");
    }

    public function faq()
    {
        
    }

    public function order()
    {
        return view("pages.order");
    }


    public function checkout(Request $request)
    {
        $request->session()->put('order', $request->order);
        $request->session()->put('order_amount', $request->order_amount);

        return view("pages.checkout", [
            "hard_binding_total_price"      => $request->hard_binding_total_price,
            "soft_binding_total_price"      => $request->soft_binding_total_price,
            "synopsis_binding_total_price"  => $request->synopsis_binding_total_price,
            "total"                         => $request->hard_binding_total_price + $request->soft_binding_total_price + $request->synopsis_binding_total_price
        ]);
    }

    public function place_order(Request $request)
    {
        $order = new Order();

        // Create New User
        $user = new User();
        $user->name = $request->first_name . " " . $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->phone);
        $user->role =  "USER";
        $user->save();


        // Create New Order
        $order->order_id = mt_rand(1000000000, 9999999999);
        $order->user_id = $user->id;
        $order->pickup = $request->pickup;
        $order->billing_address = json_encode([
            "billing_street" => $request->billing_street, 
            "billing_apartment" => $request->billing_apartment, 
            "billing_country" => $request->billing_country, 
            "billing_city" => $request->billing_city, 
            "billing_state" => $request->billing_state, 
            "billing_pin" => $request->billing_pin, 
        ]);

        if($request->pickup == 1) 
        {
            $order->shipping_address = NULL;
        }
        else
        {
            $order->shipping_address = json_encode([
                "shipping_street" => $request->shipping_street, 
                "shipping_apartment" => $request->shipping_apartment, 
                "shipping_country" => $request->shipping_country, 
                "shipping_city" => $request->shipping_city, 
                "shipping_state" => $request->shipping_state, 
                "shipping_pin" => $request->shipping_pin, 
            ]);
        }

        $order->order_detail = $request->session()->get('order', json_encode([]));
        $order->order_amount = $request->session()->get('order_amount', 0);
        $order->save();

        Auth::login($user);
        return redirect()->route("user.myaccount");
    }
    public function upload_file(Request $request)
    {
        $fileName = $request->file('file')->store('uploads', 'public');

        return response()->json(["file_name" => $fileName]);
    }
}
