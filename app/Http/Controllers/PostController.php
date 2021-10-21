<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() 
    {
        $data = Post::all();
        return view('akbar/test-post', compact('data'));
    }
}
