<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about-us', function () {
    return view('pages.about-us');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/blog-details', function () {
    return view('pages.blog-details');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/404', function () {
    return view('pages.404');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/register', function () {
    return view('pages.register');
});
