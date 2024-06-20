<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <h1>Books</h1>
    <a href="{{ route('books.new') }}">Create New Book</a>
    <ul>
        @foreach($books as $book)
            <li>{{ $book->title }} by
                @foreach($book->authors as $author)
                    {{ $author->name }}
                @endforeach
            </li>
        @endforeach
    </ul>
</body>
</html>
