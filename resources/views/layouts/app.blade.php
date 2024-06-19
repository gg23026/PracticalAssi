<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Esports Home' }}</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="navbar">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/komandas') }}">Komandas</a>
        <a href="{{ url('/speletaji') }}">Spēlētāji</a>
        <a href="{{ url('/turniri') }}">Turnīri</a>
        <a href="{{ url('/maci') }}">Mači</a>
        <a href="{{ url('/speles') }}">Spēles</a>
        <a href="{{ url('/statistika') }}">Statistika</a>
    </div>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>





