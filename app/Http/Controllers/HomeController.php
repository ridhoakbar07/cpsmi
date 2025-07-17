<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = \App\Models\Post::all();
        $webProfiles = \App\Models\WebProfile::first(); // Assuming you have a WebProfile model
        return view('home', ['posts' => $posts, 'webProfiles' => $webProfiles]);
    }

    public function blogs()
    {
        $posts = \App\Models\Post::all();
        $webProfiles = \App\Models\WebProfile::first(); // Assuming you have a WebProfile model
        return view('blogs', ['posts' => $posts, 'webProfiles' => $webProfiles]);
    }
}
