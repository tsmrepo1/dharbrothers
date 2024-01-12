<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UploadfileModel;

class UploadfileController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('thesis_main_doc')) {
            // Process the file, e.g., store it in storage/app/public
            // $file = $request->file('thesis_main_doc');
            // $thesis_main = time().'_'.$file->getClientOriginalName();
            // $file->storeAs('public', $thesis_main);
            $thesis_main = $request->file('thesis_main_doc')->store('approval', 'public');
            // You can save the filename in the database or do other processing
        }else{
            $thesis_main = "";
        }

        if ($request->hasFile('hard_cover_design')) {
            $hardcov  = $request->file('hard_cover_design')->store('approval', 'public');
        }else{
        $hardcov = "";    
        }

        if ($request->hasFile('soft_cover_design')) {
            // Process the file, e.g., store it in storage/app/public
           $softcov = $request->file('soft_cover_design')->store('approval', 'public');
                   }else{
                   $softcov = "";    
                   }

                   if ($request->hasFile('synopsis_cover_design')) {
                    // Process the file, e.g., store it in storage/app/public
                    $synopcov = $request->file('synopsis_cover_design')->store('approval', 'public');
                           }else{
                           $synopcov = "";    
                           }

                           if ($request->hasFile('synopsis_main_doc')) {
                            // Process the file, e.g., store it in storage/app/public
                          $synop  = $request->file('synopsis_main_doc')->store('approval', 'public');
                                   }else{
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
                                   
                                   
                                   return redirect()->route('admin.orders');

    }
}
