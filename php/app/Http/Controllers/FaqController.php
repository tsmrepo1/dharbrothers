<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\FaqCategory;
use Illuminate\Http\Request;
use DB;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = DB::table("faqs")->join("faq_categories", "faqs.faq_id", "=", "faq_categories.id")->select("faqs.*", "faq_categories.name as category")->get();
        return view("admin.faq.index", ["faqs" => $faqs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = FaqCategory::all();
        return view("admin.faq.create", ["categories" => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $faq = new Faq();
        $faq->faq_id = $request->faq_id;
        $faq->question = $request->question;
        $faq->answer = $request->answer;

        if ($faq->save()) {
            $request->session()->flash('success', 'FAQ added successfully.');
            return redirect()->route("faqs.index");
        } else {
            $request->session()->flash('error', 'Something Went Wrong, Please Try Again.');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faq $faq)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Faq $faq)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        //
    }
}
