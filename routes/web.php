<?php

use App\Http\Controllers\admin\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home.home');
})->name('home');

Route::get('/sobre', function () {
    return view('pages.about.about');
})->name('about');

Route::get('/contato', function () {
    return view('pages.contact.contact');
})->name('contact');

Route::get('/blog', function () {
    return view('pages.blog.blog');
})->name('blog');

Route::get('/projetos', function () {
    return view('pages.project.project');
})->name('project');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::resource('/dashboard', PageController::class)->names('dashboard');
});
