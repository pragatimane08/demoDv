<!DOCTYPE html>
<html>
<head>
    <title>New Newsletter Published</title>
</head>
<body>
    <h1>{{ $newsletter->title }}</h1>
    <p>{{ $newsletter->description }}</p>
    <a href="{{ asset('storage/' . $newsletter->pdf) }}" target="_blank">Download Newsletter</a>
</body>
</html>