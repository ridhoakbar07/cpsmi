<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = \App\Models\Post::all();
        return view('home', ['posts' => $posts]);
    }

    public function blogs()
    {
        $posts = \App\Models\Post::all();
        return view('blogs', ['posts' => $posts]);
    }
}
