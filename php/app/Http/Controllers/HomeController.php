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
use Illuminate\Support\Facades\Http;

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
        $request->session()->put('total_amount', $request->total_amount);

        $request->session()->put('cgst', $request->cgst);
        $request->session()->put('sgst', $request->sgst);

        
        return view("pages.checkout", [
            "hard_printing_total_price"      => $request->hard_printing_total_price,
            "soft_printing_total_price"      => $request->soft_printing_total_price,
            "synopsis_printing_total_price"  => $request->synopsis_printing_total_price,

            "hard_binding_total_price"      => $request->hard_binding_total_price,
            "soft_binding_total_price"      => $request->soft_binding_total_price,
            "synopsis_binding_total_price"  => $request->synopsis_binding_total_price,

            "cgst"                          => $request->cgst,
            "sgst"                          => $request->sgst,
            
            "order_amount"                  => $request->order_amount,
            "total_amount"                  => $request->total_amount
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
        $order->total_amount = $request->session()->get('total_amount', 0);
        $order->cgst = $request->session()->get('cgst', 0);
        $order->sgst = $request->session()->get('sgst', 0);

        $order->save();

        $this->create_shiprocket_order($order);
        Auth::login($user);
        return redirect()->route("user.myaccount");
    }

    public function get_token()
    {
    
        $response = Http::post('https://apiv2.shiprocket.in/v1/external/auth/login', [
            'header' => 'Content-Type: application/json',
            'email' => "raktimbanerjee9@gmail.com",
            'password' => "Raktim365249@2000",
        ]);

        $token = $response->json()['token'];
    
        return $token;
    }

    public function create_shiprocket_order($order)
    {
        // Get the Shiprocket token (you can use the getToken() function from the previous response)
        $token = $this->get_token();

        // Define order details (customize this according to your needs)
        $orderData = [
            "channel_id" => "4669360",
            'order_id' => '12345', // Your unique order ID
            'pickup_location' => 'Your Warehouse',
            'shipping_address' => [
                'name' => 'John Doe',
                'address' => '123 Main St',
                'city' => 'Your City',
                'state' => 'Your State',
                'country' => 'India',
                'pincode' => '123456',
                // Add other relevant fields
            ],
            // Add more order details (products, weight, etc.)
        ];

        // Make an API call to create the order
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Content-Type' => 'application/json',
        ])->post('https://apiv2.shiprocket.in/v1/external/orders/create/', $orderData);

        // Handle the response (you can log it or return it to the user)
        if ($response->successful()) {
            $orderResponse = $response->json();
            return response()->json(['status' => true, 'data' => $orderResponse]);
        } else {
            return response()->json(['status' => false]);
        }
    }

    public function upload_file(Request $request)
    {
        $fileName = $request->file('file')->store('uploads', 'public');

        return response()->json(["file_name" => $fileName]);
    }
}
