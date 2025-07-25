<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

Route::get('/', [HomeController::class, 'home']);

Route::get('/about-us', [HomeController::class, 'about'])->name('about');

Route::get('/blog', [HomeController::class, 'blog'])->name('blog');

Route::get('/blog-details', [HomeController::class, 'blogDetails'])->name('blog-details');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/error', [HomeController::class, 'error'])->name('error');

Route::get('/login', [HomeController::class, 'login'])->name('login');

Route::get('/register', [HomeController::class, 'register'])->name('register');

Route::resource('/students', StudentController::class);
