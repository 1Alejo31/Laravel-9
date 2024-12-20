<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


/**
 * Route::get    | Consultar
 * Route::post   | Guardar
 * Route::delete | Eliminar
 * Route::put    | Actualizar
 */

/**

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('blog', [PageController::class, 'blog'])->name('blog');

Route::get('blog/{slug}', [PageController::class, 'post'])->name('post');Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
Route::get('buscar', function (Request $resquest) {
    return $resquest->all();
});
 */

 Route::controller(PageController ::class)->group(function () {
    Route::get('/',             'home')->name('home');

    Route::get('blog',          'blog')->name('blog');

    Route::get('blog/{post:slug}',   'post')->name('post');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('posts', PostController::class)->middleware('auth')->except(['show']);


require __DIR__.'/auth.php';
