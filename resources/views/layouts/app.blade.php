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

        @guest
            <a href="{{ route('login') }}" class="btn btn-secondary">Login</a>
            <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
        @else
            <a href="#" class="btn btn-secondary">{{ Auth::user()->name }}</a>
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        @endguest
    </div>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>






