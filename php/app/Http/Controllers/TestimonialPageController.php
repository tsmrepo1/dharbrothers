<?php

namespace App\Http\Controllers;

use App\Models\TestimonialPage;
use Illuminate\Http\Request;

class TestimonialPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = TestimonialPage::all();
        return view("admin.testimonials.index", ["testimonials" => $testimonials]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.testimonials.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $testimonial = new TestimonialPage();

        if ($request->file('image')->isValid()) {
            $testimonial->image = $request->file('image')->store('images', 'public');
        }

        $testimonial->name = $request->name;
        $testimonial->feedback = $request->feedback;
        $testimonial->rating = $request->rating;
        $testimonial->name = $request->name;
        $testimonial->location = $request->location;

        if ($testimonial->save()) 
        {
            $request->session()->flash('success', 'Testimonial added successfully.');
            return redirect()->route("testimonials.index");
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
    public function show(TestimonialPage $testimonialPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TestimonialPage $testimonialPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TestimonialPage $testimonialPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TestimonialPage $testimonialPage)
    {
        //
    }
}
