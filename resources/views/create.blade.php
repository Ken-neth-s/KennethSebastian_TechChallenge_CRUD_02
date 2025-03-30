<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Buku Baru</h1>
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <label>Judul Buku:</label>
        <input type="text" name="title" required><br>
        {{-- untuk kasih user input title --}}

        <label>Penulis:</label>
        <input type="text" name="author" required><br>
        {{-- untuk kasih user input author --}}
        <button type="submit">Simpan</button>
    </form>
    <a href="{{ route('index') }}">Kembali</a>
</body>
</html>


