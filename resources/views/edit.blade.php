<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
</head>
<body>
    <h1>Edit Buku</h1>
    <form action="{{ route('update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Judul Buku:</label>
        <input type="text" name="title" value="{{ $book->title }}" required><br>
        {{-- untuk kasih user input judul baru --}}

        <label>Penulis:</label>
        <input type="text" name="author" value="{{ $book->author }}" required><br>
        {{-- untuk kasih user input author baru --}}
        <button type="submit">Simpan</button>
    </form>
    <a href="{{ route('index') }}">Kembali</a>
</body>
</html>
