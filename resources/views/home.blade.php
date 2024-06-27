<!DOCTYPE html>
<html>
<head>
    <title>{{ __('messages.home') }}</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Tailwind CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white">

<nav class="bg-gray-800 p-4 shadow-lg sticky top-0">
    <div class="container mx-auto flex justify-between items-center">
        <div class="flex">
            <a href="{{ url('/') }}" class="text-white hover:text-gray-300 mx-2 font-bold">{{ __('messages.home') }}</a>
            <a href="{{ url('/komandas') }}" class="text-white hover:text-gray-300 mx-2 font-bold">{{ __('messages.teams') }}</a>
            <a href="{{ url('/speletaji') }}" class="text-white hover:text-gray-300 mx-2 font-bold">{{ __('messages.players') }}</a>
            <a href="{{ url('/turniri') }}" class="text-white hover:text-gray-300 mx-2 font-bold">{{ __('messages.tournaments') }}</a>
            <a href="{{ url('/maci') }}" class="text-white hover:text-gray-300 mx-2 font-bold">{{ __('messages.matches') }}</a>
            <a href="{{ url('/speles') }}" class="text-white hover:text-gray-300 mx-2 font-bold">{{ __('messages.games') }}</a>
            <a href="{{ url('/statistika') }}" class="text-white hover:text-gray-300 mx-2 font-bold">{{ __('messages.statistics') }}</a>
        </div>

        <div class="flex items-center">
            @guest
                <a href="{{ route('login') }}" class="bg-gray-700 text-white hover:bg-gray-600 py-1 px-3 rounded mx-2 font-bold">{{ __('messages.login') }}</a>
                <a href="{{ route('register') }}" class="bg-blue-600 text-white hover:bg-blue-500 py-1 px-3 rounded mx-2 font-bold">{{ __('messages.register') }}</a>
            @else
                <a href="{{ route('profile.show', ['id' => Auth::user()->id]) }}" class="text-white mx-2 font-bold">{{ Auth::user()->name }}</a>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="bg-red-600 text-white hover:bg-red-500 py-1 px-3 rounded mx-2 font-bold">{{ __('messages.logout') }}</button>
                </form>
            @endguest

            <a href="{{ url('lang/en') }}" class="text-white hover:text-gray-300 mx-2 font-bold">ENG</a>
            <a href="{{ url('lang/lv') }}" class="text-white hover:text-gray-300 mx-2 font-bold">LV</a>
        </div>
    </div>
</nav>

<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6 text-center">{{ __('messages.WelcometoEsportsHome') }}</h1>
    <div class="banner mb-6 p-6 bg-gray-800 rounded">
    <img src="{{ asset('madrilla.jpeg') }}" alt="OHNEPIXEL MA DRILLA Banner" class="mx-auto rounded" style="width: 1200px; height: 400px;">
    </div>
    <div class="text-center mb-6">
        <iframe
            src="https://www.youtube.com/embed/gboz4HSgV4U"
            height="480"
            width="100%"
            allowfullscreen
            class="rounded">
        </iframe>
    </div>

<footer class="bg-gray-700 p-4 mt-6 text-center text-gray-400">
    {!! __('messages.footer') !!}
</footer>

</body>
</html>




