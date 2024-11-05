<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    function home()
    {
        return view('home');
    }
    function blog()
    {
        //Simulacion de consulta a db

        $posts = [
            ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
            ['id' => 2, 'title' => 'LARAVEL', 'slug' => 'laravel'],
        ];

        return view('blog', ['posts' => $posts]);
    }
    function post($slug)
    {

        //Simulacion de consulta a db

        $post = $slug;
        return view('post', ['post' => $post]);
    }
}
