<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'post_id' => 'required|exists:posts,id',
            'content' => 'required',
        ]);

        $comment = Comment::create($validatedData);

        return redirect()->route('posting.show', ['id' => $validatedData['post_id']])
                         ->with('success', 'Comment added successfully!');
    }
}
