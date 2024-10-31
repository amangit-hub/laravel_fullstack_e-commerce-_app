<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/explore', function () {
    return view('explore');
})->name('explore');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/support', function () {
    return view('support');
})->name('support');
