<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    function index(){
        $articles = Article::all();
        return view('articles/index',['articles'=>$articles]);
    }
}
