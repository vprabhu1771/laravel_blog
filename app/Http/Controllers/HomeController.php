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
}
