<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // 追記
use App\Models\User; // 追記

class HomeController extends Controller
{
    public function index()
    {
        return view('posts.index')->with(['posts' => $post->getByUser()]); 
    }
}