<?php

namespace App\Http\Controllers\API;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index(){
        return response()->json([
            'success'=>true,
            'response'=>Article::all()
        ], 200);
    }
}
