<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\ShareSnippet;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::query()->with(['categories', 'user', 'tags'])
            ->published()
            ->paginate(10);
        $webProfiles = (new \App\Http\Controllers\HomeController())->getWebProfiles();

        return view('components.landing-page.pages.blogs', [
            'posts' => $posts,
            'webProfiles' => $webProfiles,
        ]);
    }

    public function show(Post $post)
    {

        $shareButton = ShareSnippet::query()->active()->first();
        $post->load(['user', 'categories', 'tags', 'comments' => fn($query) => $query->approved(), 'comments.user']);
        $webProfiles = (new \App\Http\Controllers\HomeController())->getWebProfiles();

        return view('components.landing-page.pages.show', [
            'post' => $post,
            'shareButton' => $shareButton,
            'webProfiles' => $webProfiles,
        ]);
    }


    // public function allPosts()
    // {
    //     $posts = Post::query()->with(['categories', 'user'])
    //         ->published()
    //         ->paginate(20);

    //     return view('components.blogs.all-post', [
    //         'posts' => $posts,
    //     ]);
    // }

    // public function search(Request $request)
    // {
    //     $request->validate([
    //         'query' => 'required',
    //     ]);
    //     $searchedPosts = Post::query()
    //         ->with(['categories', 'user'])
    //         ->published()
    //         ->whereAny(['title', 'sub_title'], 'like', '%'.$request->get('query').'%')
    //         ->paginate(10)->withQueryString();

    //     return view('components.blogs.search', [
    //         'posts' => $searchedPosts,
    //         'searchMessage' => 'Search result for '.$request->get('query'),
    //     ]);
    // }

    // public function subscribe(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email|unique:news_letters,email',
    //     ], [
    //         'email.unique' => 'You have already subscribed',
    //     ]);

    //     return back()->with('success', 'You have successfully subscribed to our news letter');
    // }
}
