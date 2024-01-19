<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UploadfileModel;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class UploadfileController extends Controller
{
    public function upload(Request $request)
    {
        $vab = "Dhar Brothers has Uploaded, ";
        $dyn = "";
        $exists = UploadfileModel::where('orderid', $request->input('order_id'))->exists();
        if ($exists) {
            if ($request->hasFile('thesis_main_doc')) {
                $thesis_main = $request->file('thesis_main_doc')->store('approval', 'public');
                $newData = ['thesis_main' => $thesis_main, 'tmain_stat' => 0]; // Replace with the columns and values you want to update

                UploadfileModel::where('orderid', $request->input('order_id'))->update($newData);
                $dyn = $dyn . "Thesis Main Document";
            }

            if ($request->hasFile('hard_cover_design')) {
                $hardcov  = $request->file('hard_cover_design')->store('approval', 'public');
                $newData = ['thesis_hard_cover' => $hardcov, 'thard_stat' => 0]; // Replace with the columns and values you want to update

                UploadfileModel::where('orderid', $request->input('order_id'))->update($newData);
                $dyn = $dyn . " Thesis Hard Cover Design";
            }

            if ($request->hasFile('soft_cover_design')) {
                // Process the file, e.g., store it in storage/app/public
                $softcov = $request->file('soft_cover_design')->store('approval', 'public');
                $newData = ['thesis_soft_cover' => $softcov, 'tsoft_stat' => 0]; // Replace with the columns and values you want to update

                UploadfileModel::where('orderid', $request->input('order_id'))->update($newData);

                $dyn = $dyn . " Thesis Soft Cover Design";
            }

            if ($request->hasFile('synopsis_cover_design')) {
                // Process the file, e.g., store it in storage/app/public
                $synopcov = $request->file('synopsis_cover_design')->store('approval', 'public');
                $newData = ['synopsis_cover' => $synopcov, 'scover_stat' => 0]; // Replace with the columns and values you want to update

                UploadfileModel::where('orderid', $request->input('order_id'))->update($newData);

                $dyn = $dyn . " Synopsis Cover Design";
            }

            if ($request->hasFile('synopsis_main_doc')) {
                // Process the file, e.g., store it in storage/app/public
                $synop  = $request->file('synopsis_main_doc')->store('approval', 'public');
                $newData = ['synopsis_main' => $synop, 'smain_stat' => 0]; // Replace with the columns and values you want to update

                UploadfileModel::where('orderid', $request->input('order_id'))->update($newData);

                $dyn = $dyn . " Synopsis Main Document";
            }
        } else {
            if ($request->hasFile('thesis_main_doc')) {
                $thesis_main = $request->file('thesis_main_doc')->store('approval', 'public');
                $dyn = $dyn . "Thesis Main Document";
            } else {
                $thesis_main = "";
            }

            if ($request->hasFile('hard_cover_design')) {
                $hardcov  = $request->file('hard_cover_design')->store('approval', 'public');
                $dyn = $dyn . " Thesis Hard Cover Design";
            } else {
                $hardcov = "";
            }

            if ($request->hasFile('soft_cover_design')) {
                // Process the file, e.g., store it in storage/app/public
                $softcov = $request->file('soft_cover_design')->store('approval', 'public');
                $dyn = $dyn . " Thesis Soft Cover Design";
            } else {
                $softcov = "";
            }

            if ($request->hasFile('synopsis_cover_design')) {
                // Process the file, e.g., store it in storage/app/public
                $synopcov = $request->file('synopsis_cover_design')->store('approval', 'public');
                $dyn = $dyn . " Synopsis Cover Design";
            } else {
                $synopcov = "";
            }

            if ($request->hasFile('synopsis_main_doc')) {
                // Process the file, e.g., store it in storage/app/public
                $synop  = $request->file('synopsis_main_doc')->store('approval', 'public');
                $dyn = $dyn . " Synopsis Main Document";
            } else {
                $synop = "";
            }

            $upload = new UploadfileModel();
            $upload->orderid = $request->input('order_id');
            $upload->thesis_main = $thesis_main;
            $upload->thesis_hard_cover = $hardcov;
            $upload->thesis_soft_cover = $softcov;
            $upload->synopsis_main = $synop;
            $upload->synopsis_cover = $synopcov;
            $upload->save();
        }

        $users = DB::table('users')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->where('orders.order_id', $request->input('order_id'))
            ->select('users.email')
            ->get();


        $mes = $vab . $dyn . ", Please check the site for approval.";


        // Mail::raw($mes, function ($message) use ($users) {
        //     $message->to($users->email)->subject('Approval Sending');
        // });

        return redirect()->route('admin.orders');
    }
}
