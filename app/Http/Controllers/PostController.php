<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $all_posts = Post::all();

        return view('posts',['posts'=>$all_posts]);
    }

    public function edit($id)
    {
        $post = Post::find($id);

        return view('edit_post',['post'=>$post]);
    }

    public function update(Request $request ,$id)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required'
        ]);

        $post = Post::find($id);

        $post->title = $request->title;

        $post->description = $request->description;

        $post->save();

        return redirect()->route('posts.index')->with('success','Post Edited Successfully');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required'
        ]);

        $new_post = new Post;

        $new_post->title = $request->title;

        $new_post->description = $request->description;

        $new_post->save();

        return back()->with('success','Post Added Successfully');
    }

    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        return redirect()->route('posts.index')->with('success','Post Deleted Successfully');
    }
}
