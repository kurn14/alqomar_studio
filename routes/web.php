<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/projects', [App\Http\Controllers\ProjectController::class, 'index'])->name('project.index');
Route::get('/projects/{id}', [App\Http\Controllers\ProjectController::class, 'show'])->name('project.show');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::get('/service', [App\Http\Controllers\ServiceController::class, 'index'])->name('service');

// Uncomment the following lines to enable resourceful routing for ProjectController    



/*

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

*/