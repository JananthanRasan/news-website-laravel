<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'home']);

Route::get('/about-us', [HomeController::class, 'about']);

Route::get('/blog', [HomeController::class, 'blog']);

Route::get('/blog-details', [HomeController::class, 'blogDetails']);

Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/error', [HomeController::class, 'error']);

Route::get('/login', [HomeController::class, 'login']);

Route::get('/register', [HomeController::class, 'register']);
