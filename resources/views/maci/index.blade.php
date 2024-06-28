<!DOCTYPE html>
<html>
<head>
    <title>Mači</title>
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
    <style>
        table th {
            color: red;
        }
    </style>
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
            <a href="{{ url('/news') }}" class="text-white hover:text-gray-300 mx-2 font-bold">Latest News</a> <!-- New Link -->
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
    <h1 class="text-3xl font-bold mb-6">{{ __('messages.matches') }}</h1>
    <form method="GET" action="{{ route('maci.index') }}" class="bg-gray-800 p-4 rounded mb-6">
        <div class="form-group mb-4">
            <label for="komanda" class="block text-white mb-2">Komandas Nosaukums</label>
            <input type="text" id="komanda" name="komanda" class="w-full p-2 rounded bg-gray-700 border border-gray-600 text-white" value="{{ request('komanda') }}">
        </div>
        <button type="submit" class="bg-blue-600 text-white hover:bg-blue-500 py-2 px-4 rounded">Filtrēt</button>
    </form>

    <table class="w-full bg-gray-800 rounded">
        <thead>
            <tr>
                <th class="p-3 text-left">Mača ID</th>
                <th class="p-3 text-left">Komanda 1</th>
                <th class="p-3 text-left">Komanda 2</th>
                <th class="p-3 text-left">Rezultāts</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($maci as $macs)
                <tr class="border-t border-gray-700">
                    <td class="p-3">{{ $macs->MacaID }}</td>
                    <td class="p-3">{{ $macs->komanda1->Nosaukums }}</td>
                    <td class="p-3">{{ $macs->komanda2->Nosaukums }}</td>
                    <td class="p-3">{{ $macs->Rezultats }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>

