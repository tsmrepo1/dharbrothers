<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\UploadfileModel;
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

                        $totalUsersWithRole = UploadfileModel::where('orderid', $request->order_id)->count();
                         if($totalUsersWithRole==1){
                       $pics = UploadfileModel::where('orderid', $request->order_id)->get();
                       $allpics = [];

foreach ($pics as $user) {
    $picdata = [];
    foreach ($user->getAttributes() as $columnName => $value) {
        if ($value !== '') {
            $picdata[$columnName] = $value;
        }
    }
    if (!empty($picdata)) {
        $allpics[] = $picdata;
    }
}
                }
                // $firstElement = $allpics[0];

                // // Get all keys
                // $allColumnNames = array_keys($firstElement);
                
                // // Extract column names from index 2 to 6
                // $selectedColumnNames = array_slice($allColumnNames, 2, 5); // slice from index 2, take 5 elements
                
                // // Print the selected column names
                // foreach ($selectedColumnNames as $columnName) {
                //     echo $columnName . PHP_EOL;die;
                // }
        
        return view("admin.order.detail", ["order" => $order,"picsdet" => $allpics]);
    }
}
