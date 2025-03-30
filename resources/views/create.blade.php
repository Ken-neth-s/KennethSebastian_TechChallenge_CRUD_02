<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($book) ? 'Edit Book' : 'Add Book' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4">{{ isset($book) ? 'Edit Book' : 'Add Book' }}</h2>
        <form action="{{ isset($book) ? route('update', $book->id) : route('store') }}" method="POST">
            @csrf
            @if(isset($book))
                @method('PUT')
            @endif
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $book->title ?? '' }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Author</label>
                <input type="text" name="author" class="form-control" value="{{ $book->author ?? '' }}" required>
            </div>
            {{-- input data oleh user --}}
            <button type="submit" class="btn btn-success">Create</button>
            {{-- create data buku baru --}}
            <a href="{{ route('index') }}" class="btn btn-secondary">Cancel</a>
            {{-- cancel dan balik ke halaman utama --}}
        </form>
    </div>
</body>
</html>
