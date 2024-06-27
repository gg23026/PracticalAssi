<!DOCTYPE html>
<html>
<>
    <title>Komandas</title>
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
            background-color: #1A202C; /* Match background color of the rest of the site */
            color: red;
        }
        </style>
</head>
<body class="bg-gray-900 text-white">

    <nav class="bg-gray-800 p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <div>
                <a href="{{ url('/') }}" class="text-white hover:text-gray-300 mx-2">{{ __('Home') }}</a>
                <a href="{{ url('/komandas') }}" class="text-white hover:text-gray-300 mx-2">{{ __('Teams') }}</a>
                <a href="{{ url('/speletaji') }}" class="text-white hover:text-gray-300 mx-2">{{ __('Players') }}</a>
                <a href="{{ url('/turniri') }}" class="text-white hover:text-gray-300 mx-2">{{ __('Tournaments') }}</a>
                <a href="{{ url('/maci') }}" class="text-white hover:text-gray-300 mx-2">{{ __('Matches') }}</a>
                <a href="{{ url('/speles') }}" class="text-white hover:text-gray-300 mx-2">{{ __('Games') }}</a>
                <a href="{{ url('/statistika') }}" class="text-white hover:text-gray-300 mx-2">{{ __('Statistics') }}</a>
            </div>

            <div>
                @guest
                    <a href="{{ route('login') }}" class="bg-gray-700 text-white hover:bg-gray-600 py-1 px-3 rounded mx-2">{{ __('Login') }}</a>
                    <a href="{{ route('register') }}" class="bg-blue-600 text-white hover:bg-blue-500 py-1 px-3 rounded mx-2">{{ __('Register') }}</a>
                @else
                    <a href="{{ route('profile.show', ['id' => Auth::user()->id]) }}" class="text-white mx-2">{{ Auth::user()->name }}</a>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="bg-red-600 text-white hover:bg-red-500 py-1 px-3 rounded mx-2">{{ __('Logout') }}</button>
                    </form>
                @endguest

                <a href="{{ url('lang/en') }}" class="text-white hover:text-gray-300 mx-2">ENG</a>
                <a href="{{ url('lang/lv') }}" class="text-white hover:text-gray-300 mx-2">LV</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Komandas</h1>

        <!-- Filter form -->
        <form method="GET" action="{{ route('komandas.index') }}" class="bg-gray-800 p-4 rounded mb-6">
            <div class="form-group mb-4">
                <label for="country" class="block text-white mb-2">Valsts</label>
                <input type="text" id="country" name="country" class="w-full p-2 rounded bg-gray-700 border border-gray-600 text-white" value="{{ request('country') }}">
            </div>
            <div class="form-group mb-4">
                <label for="rank_min" class="block text-white mb-2">Minimālais rangs</label>
                <input type="number" id="rank_min" name="rank_min" class="w-full p-2 rounded bg-gray-700 border border-gray-600 text-white" value="{{ request('rank_min') }}">
            </div>
            <div class="form-group mb-4">
                <label for="rank_max" class="block text-white mb-2">Maksimālais rangs</label>
                <input type="number" id="rank_max" name="rank_max" class="w-full p-2 rounded bg-gray-700 border border-gray-600 text-white" value="{{ request('rank_max') }}">
            </div>
            <button type="submit" class="bg-blue-600 text-white hover:bg-blue-500 py-2 px-4 rounded">Filtrēt</button>
        </form>

        <table class="w-full bg-gray-800 rounded">
            <thead>
                <tr>
                    <th class="p-3 text-left">Komandas ID</th>
                    <th class="p-3 text-left">Nosaukums</th>
                    <th class="p-3 text-left">Valsts</th>
                    <th class="p-3 text-left">Rangs</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($komandas as $komanda)
                    <tr class="border-t border-gray-700">
                        <td class="p-3">{{ $komanda->KomandasID }}</td>
                        <td class="p-3"><a href="{{ route('komandas.show', $komanda->KomandasID) }}" class="text-blue-500 hover:text-blue-300">{{ $komanda->Nosaukums }}</a></td>
                        <td class="p-3">{{ $komanda->Valsts }}</td>
                        <td class="p-3">{{ $komanda->Rangs }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>





