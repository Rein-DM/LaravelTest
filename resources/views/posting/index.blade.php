@extends('layouts.app')

@section('content')
    <div class="container-box">
        <h1>Posts</h1>     
        <div class="posts-container">
            @foreach ($posts as $post)
                <div class="post">
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->content }}</p>
                    <div class="comments">
                        <h3>Comments:</h3>
                        <ul>
                            @foreach ($post->comments as $comment)
                                <li>{{ $comment->content }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
