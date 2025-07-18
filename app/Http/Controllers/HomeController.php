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

    public function aboutUs()
    {
        $webProfiles = \App\Models\WebProfile::first(); // Assuming you have a WebProfile model
        return view('components.landing-page.pages.about-us', ['webProfiles' => $webProfiles]);
    }

    public function contactUs()
    {
        $webProfiles = \App\Models\WebProfile::first(); // Assuming you have a WebProfile model
        return view('components.landing-page.pages.contact-us', ['webProfiles' => $webProfiles]);
    }

    public function activity()
    {
        $webProfiles = \App\Models\WebProfile::first(); // Assuming you have a WebProfile model
        return view('components.landing-page.pages.activity', ['webProfiles' => $webProfiles]);
    }

    public function services()
    {
        $webProfiles = \App\Models\WebProfile::first(); // Assuming you have a WebProfile model
        return view('components.landing-page.pages.services', ['webProfiles' => $webProfiles]);
    }
}
