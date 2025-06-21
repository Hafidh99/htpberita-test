<!DOCTYPE html>
<html>
<head>
    <title>{{ $news->title }}</title>
</head>
<body>
    <h1>{{ $news->title }}</h1>
    <p>{{ $news->content }}</p>
    <p><strong>Views:</strong> {{ $news->views }}</p>
    <a href="{{ url('/') }}">Kembali ke Landing Page</a>
</body>
</html>