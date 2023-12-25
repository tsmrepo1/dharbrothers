<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Post;
use App\Models\Service;
use App\Models\TestimonialPage;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserPermission;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

        return view("checkout", [
            "hard_binding_total_price"      => $request->hard_binding_total_price,
            "soft_binding_total_price"      => $request->soft_binding_total_price,
            "synopsis_binding_total_price"  => $request->synopsis_binding_total_price
        ]);
    }
}
