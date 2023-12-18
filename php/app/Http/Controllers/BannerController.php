<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::all();
        return view("admin.banner.index", ["banners" => $banners]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.banner.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $banner = new Banner();

        $banner->title1 = $request->title1;
        $banner->title2 = $request->title2;
        $banner->title3 = $request->title3;

        if ($request->file('image')->isValid()) 
        {
            $banner->image = $request->file('image')->store('banners', 'public');
        }
        else 
        {
            $banner->image = null;
        }

        if ($banner->save()) 
        {
            $request->session()->flash('success', 'Banner added successfully.');
            return redirect()->route("banners.index");
        } 
        else 
        {
            $request->session()->flash('error', 'Something Went Wrong, Please Try Again.');
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        //
    }
}
