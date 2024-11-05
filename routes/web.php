<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/**
 * Route::get    | Consultar
 * Route::post   | Guardar
 * Route::delete | Eliminar
 * Route::put    | Actualizar
 */

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('blog', function () {

    //Simulacion de consulta a db

    $posts = [
        ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
        ['id' => 2, 'title' => 'LARAVEL', 'slug' => 'laravel'],
    ];

    return view('blog', ['posts' => $posts]);
})->name('blog');

Route::get('blog/{slug}', function ($slug) {

    //Simulacion de consulta a db

    $post = $slug;
    return view('post', ['post' => $post]);
})->name('post');

Route::get('buscar', function (Request $resquest) {
    return $resquest->all();
});
