@extends('layouts.app')

@section('content')


    <div class="container-box1 center-content">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>

        <div class="comments1">
            <h2>Comments</h2>
            <ul>
                @forelse ($post->comments as $comment)
                    <li>{{ $comment->content }}</li>
                @empty
                    <li>No comments yet.</li>
                @endforelse
            </ul>
        </div>

        <hr>

        <h3>Add Comment</h3>
        <form action="{{ route('comments.store') }}" method="POST">
            @csrf
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <div class="form-group">
                <label for="content">Comment</label>
                <textarea class="form-control" id="content" name="content" rows="4">{{ old('content') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Comment</button>
        </form>
    </div>
@endsection
