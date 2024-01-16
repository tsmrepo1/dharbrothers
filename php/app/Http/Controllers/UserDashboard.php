<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\UserdesignModel;
use Illuminate\Support\Facades\Mail;
use App\Models\UploadfileModel;

class UserDashboard extends Controller
{

    public function myaccount()
    {
        $avatar = $this->generateGravatarURL(Auth::user()->email);
        $orders = DB::table('orders')
            ->join('users', 'users.id', '=', 'orders.user_id')
            ->where('users.id', Auth::user()->id)
            ->select('orders.*') // Select columns as needed
            ->get();
        //dd($orders);
        return view("pages.my_account", ["avatar" => $avatar, "orders" => $orders]);
    }


    // public function myaccount()
    // {
    //     $avatar = $this->generateGravatarURL(Auth::user()->email);
    //     $orders = DB::table('orders')
    //         ->join('uploadfile', 'orders.order_id', '=', 'uploadfile.orderid')
    //         ->where('orders.user_id', Auth::user()->id)
    //         ->select('orders.*', 'uploadfile.*') // Select columns as needed
    //         ->get();
    //     //dd($orders);
    //     return view("pages.my_account", ["avatar" => $avatar, "orders" => $orders]);
    // }


    public function apprv(Request $request)
    {
        $vab = "User has accepted image(s) of the order no, ".$request->input('orderId');
        $dyn = "";
        $orderId = $request->input('orderId');
        $slabId = $request->input('title');
        $fileUrl = $request->input('fileUrl');


        if ($slabId == "Thesis Main File") {
            $xx = "tmain_stat";
            $dyn = $dyn."Thesis Main Document";
        } elseif ($slabId == "Thesis Hard Cover Design") {
            $xx = "thard_stat";
            $dyn = $dyn." Thesis Hard Cover Design";
        } elseif ($slabId == "Thesis Soft Cover Design") {
            $xx = "tsoft_stat";
            $dyn = $dyn." Thesis Soft Cover Design";
        } elseif ($slabId == "Synopsis Main File") {
            $xx = "smain_stat";
            $dyn = $dyn." Synopsis Main Document";
        } elseif ($slabId == "Synopsis Design") {
            $xx = "scover_stat";
            $dyn = $dyn." Synopsis Cover Design";
        }

        UploadfileModel::where('orderid', $orderId)->update([$xx => 1]);


        $design = new UserdesignModel();

        $design->orderid = $orderId;
        $design->url = $fileUrl;
        $design->status = 'Accepted';


        if ($design->save()) {
            $mes = $vab.$dyn.", Please check the site for details.";
            Mail::raw($mes, function ($message) {
                $message->to("raktimbanerjee9@gmail.com")->subject('Acceptance By User');
            });
            $response = [
                'status' => 'success',


            ];
        } else {
            $response = [
                'status' => 'Failed',


            ];
        }


        // Return the response as JSON
        return response()->json($response);
    }
    public function submitcmmnt(Request $request)
    {
        $vab = "User has rejected image(s) of the order no, ".$request->input('orderId');
        $dyn = "";
        $orderId = $request->input('orderId');
        $slabId = $request->input('title');
        $fileUrl = $request->input('fileUrl');
        $comment = $request->input('comment');

        if ($slabId == "Thesis Main File") {

            $xx = "tmain_stat";
            $dyn = $dyn."Thesis Main Document";
        } elseif ($slabId == "Thesis Hard Cover Design") {
            $xx = "thard_stat";
            $dyn = $dyn." Thesis Hard Cover Design";
        } elseif ($slabId == "Thesis Soft Cover Design") {
            $xx = "tsoft_stat";
            $dyn = $dyn." Thesis Soft Cover Design";
        } elseif ($slabId == "Synopsis Main File") {
            $xx = "smain_stat";
            $dyn = $dyn." Synopsis Main Document";
        } elseif ($slabId == "Synopsis Design") {
            $xx = "scover_stat";
            
            $dyn = $dyn." Synopsis Cover Design";
        }

        UploadfileModel::where('orderid', $orderId)->update([$xx => 1]);

        $design = new UserdesignModel();

        $design->orderid = $orderId;
        $design->url = $fileUrl;
        $design->status = 'Rejected';
        $design->reason = $comment;

        if ($design->save()) {
            $mes = $vab.$dyn.", Please check the site for details.";
            Mail::raw($mes, function ($message) {
                $message->to("raktimbanerjee9@gmail.com")->subject('Rejection By User');
            });
            $response = [
                'status' => 'success',
                'message' => 'Comment submitted successfully',

            ];
        } else {
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

    function generateGravatarURL($email, $size = 80, $defaultImage = 'identicon')
    {
        $emailHash = md5(strtolower(trim($email)));
        return "https://www.gravatar.com/avatar/$emailHash?size=$size&d=$defaultImage";
    }
}
