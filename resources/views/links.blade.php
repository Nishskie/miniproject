<!DOCTYPE html>
<html>

<head>
    <title>Links</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Links</h1>

        @foreach($links as $link)
        <a href="{{ route('track.click', ['linkId' => $link->id]) }}" class="btn btn-primary mb-2">
            Visit {{ $link->url }}
        </a><br>
        @endforeach
    </div>
</body>

</html>