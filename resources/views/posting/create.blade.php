<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
<div class="form-container">
    <h1>Create Post</h1>

    <form action="{{ route('posting.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content">{{ old('content') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>
</body>
</html>
