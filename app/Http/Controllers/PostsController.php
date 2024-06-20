<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::with('comments')->get();
        return view('posting.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::with('comments')->findOrFail($id);
        return view('posting.show', compact('post'));
    }

    public function create()
    {
        return view('posting.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post = Post::create($validatedData);

        return redirect()->route('posting.show', ['id' => $post->id])
                         ->with('success', 'Post created successfully!');
    }
}
