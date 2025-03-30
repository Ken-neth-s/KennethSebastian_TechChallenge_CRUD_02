<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4">Book Details</h2>
        <div class="card p-4">
            <h4>{{ $book->title }}</h4>
            <p><strong>Author:</strong> {{ $book->author }}</p>
        </div>
        {{-- ambil dari database dan tunjukin data author --}}
        <a href="{{ route('index') }}" class="btn btn-primary mt-3">Back</a>
        {{-- balik ke halaman utama --}}
    </div>
</body>
</html>
