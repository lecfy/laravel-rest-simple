<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return Post::all();
    }

    public function show(Post $post)
    {
        return $post;
    }

    public function store(Request $request)
    {
        return Post::create($request->all());
    }

    public function update(Post $post, Request $request)
    {
        return $post->update( $request->all() );
    }

    public function destroy(Post $post)
    {
        return $post->delete();
    }
}
