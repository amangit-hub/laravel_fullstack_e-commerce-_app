<?php



use Illuminate\Support\Facades\Route;

// Home route

Route::get('/home', function () {
    return view('features.home');
})->name('home');

// About route
Route::get('/about', function () {
    return view('features.about');
})->name('about');

// Explore route
Route::get('/explore', function () {
    return view('features.explore');
})->name('explore');

// Service route
Route::get('/service', function () {
    return view('features.service');
})->name('service');

// Blog route
Route::get('/blog', function () {
    return view('features.blog');
})->name('blog');

// Support route
Route::get('/support', function () {
    return view('features.support');
})->name('support');

// 