<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            margin: 0;
            padding: 40px;
        }

        h1 {
            color: #2563eb;
            margin-bottom: 25px;
        }

        .books {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }

        .card h2 {
            color: #1e3a8a;
            margin-top: 0;
        }

        .price {
            color: #2563eb;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <h1>Daftar Buku</h1>

    <div class="books">
        @foreach ($books as $book)
            <div class="card">
                <h2>{{ $book->title }}</h2>

                <p>{{ $book->description }}</p>

                <p class="price">
                    Rp {{ number_format($book->price, 0, ',', '.') }}
                </p>

                <p>Stock: {{ $book->stock }}</p>
                <p>Author ID: {{ $book->author_id }}</p>
                <p>Genre ID: {{ $book->genre_id }}</p>
            </div>
        @endforeach
    </div>

</body>
</html>