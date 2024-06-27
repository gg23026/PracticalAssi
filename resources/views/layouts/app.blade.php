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
    <a href="{{ url('/') }}">{{ __('messages.home') }}</a>
    <a href="{{ url('/komandas') }}">{{ __('messages.teams') }}</a>
    <a href="{{ url('/speletaji') }}">{{ __('messages.players') }}</a>
    <a href="{{ url('/turniri') }}">{{ __('messages.tournaments') }}</a>
    <a href="{{ url('/maci') }}">{{ __('messages.matches') }}</a>
    <a href="{{ url('/speles') }}">{{ __('messages.games') }}</a>
    <a href="{{ url('/statistika') }}">{{ __('messages.statistics') }}</a>

    @guest
        <a href="{{ route('login') }}" class="btn btn-secondary">{{ __('messages.login') }}</a>
        <a href="{{ route('register') }}" class="btn btn-primary">{{ __('messages.register') }}</a>
    @else
        <a href="#" class="btn btn-secondary">{{ Auth::user()->name }}</a>
        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" class="btn btn-danger">{{ __('messages.logout') }}</button>
        </form>
    @endguest

    <a href="{{ url('lang/en') }}">English</a>
    <a href="{{ url('lang/lv') }}">Latvian</a>
</div>


    <div class="container">
        @yield('content')
    </div>
    <footer class="py-4 bg-gray-800 text-white text-center">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            <div class="mt-4">
                <span>{{ __('messages.language') }}:</span>
                <a href="{{ url('lang/en') }}" class="mx-2 text-blue-500 hover:underline">English</a> |
                <a href="{{ url('lang/lv') }}" class="mx-2 text-blue-500 hover:underline">Latvian</a>
            </div>
        </footer>
</body>
</html>






