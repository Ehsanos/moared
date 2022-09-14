<?php

namespace App\Http\Controllers\Theme;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){

        return view('theme.news');
    }
    
    public function show(Post $post){
    
        return view('theme.news',compact('post'));
    
    }
}
