<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authors</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <h1>Authors</h1>
    <a href="{{ route('authors.new') }}">Create New Author</a>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <ul>
        @foreach($authors as $author)
            <li>
                <span>{{ $author->name }}</span>
                <form action="{{ route('authors.delete', $author->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-button">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
