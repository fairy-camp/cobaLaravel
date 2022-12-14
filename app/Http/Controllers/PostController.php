<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {

        return view('posts', [
            "title" => "All Posts",
            "active" => "posts",
            "posts" => Post::latest()->filter()->get()
        ]);
    }

    public function show(Post $post) {
        return view('post', [
            "title" => "Single Posts",
            "active" => "posts",
            "post" => $post
        ]);
    }
}
