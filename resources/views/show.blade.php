<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
</head>
<body>
    <h1>{{ $book->title }}</h1>
    <p><strong>Penulis:</strong> {{ $book->author }}</p>
    <a href="{{ route('index') }}">Kembali ke Halaman Utama</a>
    {{-- untuk redirect user balik ke halaman utama --}}
    <a href="{{ route('edit', $book->id) }}">Edit Buku</a>
    {{-- untuk redirect user jika mau edit bukunya --}}
    <form action="{{ route('destroy', $book->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Hapus Buku</button>
    </form>
    {{-- untuk redirect user jika mau delete bukunya --}}
</body>
</html>
