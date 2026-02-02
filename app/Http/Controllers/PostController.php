<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::get();
        return view('posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addpost');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         if ($request->hasFile('file')) {
            $image = $request->file('file');
            $new_image = time().$image->getClientOriginalName();
            $destination = 'upload';
            $image->move(public_path($destination),$new_image);
        }

        Post::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'file' =>  $new_image,
        ]);
        return redirect()->route('posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $post = Post::where('id',$id)->first();
       return view('signlpost', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::where('id',$id)->first();
        return view('postupdate', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Post::where('id',$id)->update([
            'title' => $request->title,
            'desc' => $request->desc
        ]);
        return redirect()->route('posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::where('id',$id)->delete();
        return redirect()->route('posts');
    }
}
