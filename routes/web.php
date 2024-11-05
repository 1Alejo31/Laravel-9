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
    return 'Ruta Home';
});

Route::get('blog', function () {
    return 'Listado de publicaciones';
});

Route::get('blog/{slug}', function ($slug) {
    //Simulacion de consulta a db
    return $slug;
});

Route::get('buscar', function (Request $resquest) {
    return $resquest->all();
});
