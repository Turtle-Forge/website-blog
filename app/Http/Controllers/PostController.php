<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function index()
    {

        return view("posts", ["posts" => Post::all()]);
    }

    public function show($slug)
    {
        return view("post", ["post" => Post::find($slug)]);
    }
}
