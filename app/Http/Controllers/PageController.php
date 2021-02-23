<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }
    public function blog(){
        return view('blog');
    }
    public function about(){
        return view('about');
    }
    public function articles_api(){
        return view('spa.articles');
    }
    public function categories_api(){
        return view('spa.categories');
    }
    public function tags_api(){
        return view('spa.tags');
    }
}
