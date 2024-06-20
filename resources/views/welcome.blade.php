<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>
<body>
    <div class="container">
        <h1>Welcome to Bookstore</h1>
        <p>Many to Many</p>

        <div class="button-group">
            <a href="{{ route('books.new') }}" class="button-link">
                <button class="custom-button">Create Book</button>
            </a>

            <a href="{{ route('authors.new') }}" class="button-link">
                <button class="custom-button">Create Author</button>
            </a>
        </div>

        <div class="button-group">
            <a href="{{ route('books.list') }}" class="button-link">
                <button class="custom-button">View Book</button>
            </a>

            <a href="{{ route('authors.list') }}" class="button-link">
                <button class="custom-button">View Author</button>
            </a>
        </div>

        <h1>Posting Comments</h1>
        <p>One to Many</p>

        <div class="button-group">
            <a href="{{ route('posting.create') }}" class="button-link">
                <button class="custom-button">Create Post</button>
            </a>

            <a href="{{ route('posting.index') }}" class="button-link">
                <button class="custom-button">View Posts</button>
            </a>
        </div>

        <div class="button-group">
            <a href="{{ route('posting.show', ['id' => 1]) }}" class="button-link">
                <button class="custom-button">Show Post</button>
            </a>
        </div>
    </div>
</body>
</html>
