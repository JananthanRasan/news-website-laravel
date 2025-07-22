<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home(){
        return view('home');
    }


    public function about(){
        return view('pages.about-us', ['name' => "Jananthan"]);
    }

    public function blog(){
        return view('pages.blog');
    }

    public function blogDetails(){
        return view('pages.blog-details');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function error(){
        return view('pages.404');
    }

    public function login(){
        return view('pages.login');
    }

    public function register(){
        return view('pages.register');
    }


}
?>
