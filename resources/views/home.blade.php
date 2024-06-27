<!DOCTYPE html>
<html>
<head>
    <title>Esports Home</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Styles -->
        <style>
            /* Tailwind CSS styles here */
        </style>
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        nav {
            background-color: #8B0000;
            padding: 10px;
            text-align: center;
        }

        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .banner {
            height: 200px;
            background-color: #ddd;
            text-align: center;
            line-height: 200px;
            font-size: 24px;
        }

        .livestream, .news, .statistics {
            margin-top: 20px;
        }

        .statistics-table {
            width: 100%;
            border-collapse: collapse;
        }

        .statistics-table th, .statistics-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .statistics-table th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
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

            <a href="{{ url('lang/en') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">English</a>
            <a href="{{ url('lang/lv') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Latvian</a>
        </div>

        <h1 class="header">Welcome to Esports Home</h1>
        <div class="banner">Banner Image Here</div>
        <div class="text-center">
            <p>Live Stream Here</p>
            <iframe
                src="https://player.twitch.tv/?channel=stewie2k&parent=http://practicalassi.test"
                height="480"
                width="100%"
                allowfullscreen>
            </iframe>
        <div class="live-stream"></div>
        <div class="text-center">
            <p>Latest News</p>
            <p>Today's topic</p>
        </div>
    </body>
</html>



