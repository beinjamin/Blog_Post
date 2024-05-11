<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Contracts\View\View;

class PostController extends Controller
{
    public function index():View
    {

        
        return view('posts.index',[

            'posts' => Post::latest()->paginate(10),

        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post,
        ]);
    } 
  
}
