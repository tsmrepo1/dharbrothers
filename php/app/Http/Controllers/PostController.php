<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view("admin.post.index", ["posts" => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.post.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->status = $request->status;
        $post->content = $request->content;

        if ($request->file('thumbnail')->isValid()) 
        {
            $post->thumbnail = $request->file('thumbnail')->store('thumbnails', 'public');
        }
        else 
        {
            $post->thumbnail = null;
        }
        
        if($post->status == "PUBLISH") {
            $post->publish_at = date('Y-m-d');
        }
        else {
            $post->publish_at = null;
        }

        if ($post->save()) {
            $request->session()->flash('success', 'Post added successfully.');
            return redirect()->route("posts.index");
        } else {
            $request->session()->flash('error', 'Something Went Wrong, Please Try Again.');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
