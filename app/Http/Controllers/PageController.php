<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{

    function home()
    {
        return view('home');
    }

    function blog()
    {
        //Traer todos los registros
        //$posts = Post::get();
        //Traer el primer registro
        //$posts = Post::first();
        //Traer por id
        //$posts = Post::fid(25);
        $posts = Post::latest()->paginate();
        return view('blog', ['posts' => $posts]);
    }

    function post(Post $post)
    {
        return view('post', ['post' => $post]);
    }
}
