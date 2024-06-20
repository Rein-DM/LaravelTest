<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Book</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <h1>Create Book</h1>

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.save') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}">
        <br>
        <label for="authors">Authors:</label>
        <select name="authors[]" id="authors" multiple>
            @foreach($authors as $author)
                <option value="{{ $author->id }}" {{ in_array($author->id, old('authors', [])) ? 'selected' : '' }}>
                    {{ $author->name }}
                </option>
            @endforeach
        </select>
        <br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
