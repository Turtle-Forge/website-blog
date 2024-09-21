<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function index()
    {

        return view(
            "posts",
            [
                "title" => "All Post",
                // "posts" => Post::all()
                "posts" => Post::with(['author', 'category'])->latest()->get()
            ]
        );
    }

    public function show(Post $post)
    {
        return view("post", ["post" => $post]);
    }
}
