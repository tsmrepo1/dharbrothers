<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\UserdesignModel;

class UserDashboard extends Controller
{
    public function myaccount()
    {
        $avatar = $this->generateGravatarURL(Auth::user()->email);
        $orders = DB::table('orders')
        ->join('uploadfile', 'orders.order_id', '=', 'uploadfile.orderid')
        ->where('orders.user_id', Auth::user()->id)
        ->select('orders.*', 'uploadfile.*') // Select columns as needed
        ->get();
        //dd($orders);
        return view("pages.my_account", ["avatar" => $avatar, "orders" => $orders]);
    }
    public function apprv(Request $request)
    {
        // Retrieve data from the request
        $orderId = $request->input('orderId');
        $slabId = $request->input('slabId');
        $fileUrl = $request->input('fileUrl');
        

        $design = new UserdesignModel();

        $design->orderid = $orderId;
        $design->url = $fileUrl;
        $design->status = 'Accepted';
        

        if($design->save()){
         
        $response = [
            'status' => 'success',
            
            
        ];   

        }else{
            $response = [
                'status' => 'Failed',
                
                
            ];    
        }


        // Return the response as JSON
        return response()->json($response);
    }
    public function submitcmmnt(Request $request)
    {
        // Retrieve data from the request
        $orderId = $request->input('orderId');
        $slabId = $request->input('slabId');
        $fileUrl = $request->input('fileUrl');
        $comment = $request->input('comment');

        $design = new UserdesignModel();

        $design->orderid = $orderId;
        $design->url = $fileUrl;
        $design->status = 'Rejected';
        $design->reason = $comment;

        if($design->save()){
         
        $response = [
            'status' => 'success',
            'message' => 'Comment submitted successfully',
            
        ];   

        }else{
            $response = [
                'status' => 'Failed',
                'message' => 'Some Issue Happened',
                
            ];    
        }


        // Return the response as JSON
        return response()->json($response);
    }
    public function dologin(Request $request)
    {
        
    }

    function generateGravatarURL($email, $size = 80, $defaultImage = 'identicon') {
        $emailHash = md5(strtolower(trim($email)));
        return "https://www.gravatar.com/avatar/$emailHash?size=$size&d=$defaultImage";
    }
}
