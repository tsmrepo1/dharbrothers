<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view("dashboard");
    }

    public function orders()
    {
        $orders = FacadesDB::table("orders")->join("users", "orders.user_id", "=", "users.id")->select("users.name as user_name", "users.email as user_email", "users.phone as user_phone", "orders.*")->get();
        return view("admin.order.index", ["orders" => $orders]);
    }

    public function single_order(Request $request)
    {
        $order = FacadesDB::table("orders")
                        ->join("users", "orders.user_id", "=", "users.id")
                        ->where("orders.order_id", $request->order_id)
                        ->select("users.name as user_name", "users.email as user_email", "users.phone as user_phone", "orders.*")
                        ->first();
        
        return view("admin.order.detail", ["order" => $order]);
    }
}
