<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts.index', [
            'posts' => Post::latest()->paginate()
        ]);
    }

    public function destroy($id) 
    { 
        $post = Post::find($id);  
        $post->delete(); 
        return back(); 
    }

    public function create(Post $post)
    {
        return view('posts.create', ['post' => $post]);
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }
}
