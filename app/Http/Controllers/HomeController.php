<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            "posts" => Post::all()
        ];

        return view('frontend/home', $data);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id); // Will throw 404 if not found

        return view('frontend.post.show', compact('post'));
    }
}
