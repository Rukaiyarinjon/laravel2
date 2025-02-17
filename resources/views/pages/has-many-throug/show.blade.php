<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author Details</title>
</head>
<body>
    <h1>{{ $author->name }}</h1>
    <h3>Genres</h3>
    <ul>
        @foreach ($author->genres as $genre)
            <li>{{ $genre->name }}</li>
        @endforeach
    </ul>
</body>
</html>
