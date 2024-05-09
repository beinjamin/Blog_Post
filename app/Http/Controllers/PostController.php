<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {

        
        return view('posts.index',[

            'posts' => Post::latest()->paginate(10),

        ]);
    }
}
