<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('authors')->get();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        $authors = Author::all();
        return view('books.create', compact('authors'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'authors' => 'required|array',
            'authors.*' => 'exists:authors,id',
        ]);

        $book = Book::create(['title' => $validated['title']]);
        $book->authors()->attach($validated['authors']);

        return redirect()->route('books.list')->with('success', 'Book created successfully.');
    }
}
