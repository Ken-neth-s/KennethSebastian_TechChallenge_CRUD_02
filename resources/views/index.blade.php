<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <a href="{{ route('create') }}">Tambah Buku</a>
    {{-- untuk redirect user kalau dia mau tambahin buku baru --}}
    <ul>
        @foreach ($books as $book)
            <li>
                <strong>{{ $book->title }}</strong> oleh {{ $book->author }}
                <a href="{{ route('show', $book->id) }}">Lihat Detail</a>
                {{-- untuk redirect user ketika dia click ke halaman show --}}
                <a href="{{ route('edit', $book->id) }}">Edit</a>
                {{-- untuk redirect user ketika dia mau edit bukunya --}}
                <form action="{{ route('destroy', $book->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
                {{-- untuk delete buku jika user click --}}
            </li>
        @endforeach
    </ul>
</body>
</html>
