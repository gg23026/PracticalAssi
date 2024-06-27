<!DOCTYPE html>
<html>
<head>
    <title>Statistika</title>
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
        <h1 class="text-3xl font-bold mb-6">Statistika</h1>

        <!-- Filter form -->
        <form method="GET" action="{{ route('statistika.index') }}" class="mb-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="form-group">
                    <label for="komanda" class="block text-sm font-medium text-gray-300">Komandas nosaukums</label>
                    <input type="text" id="komanda" name="komanda" class="mt-1 block w-full bg-gray-800 border-gray-700 text-white p-2 rounded" value="{{ request('komanda') }}">
                </div>
                <div class="form-group">
                    <label for="uzvaras_vairak" class="block text-sm font-medium text-gray-300">Uzvaras vairāk par</label>
                    <input type="number" id="uzvaras_vairak" name="uzvaras_vairak" class="mt-1 block w-full bg-gray-800 border-gray-700 text-white p-2 rounded" value="{{ request('uzvaras_vairak') }}">
                </div>
                <div class="form-group">
                    <label for="uzvaras_mazak" class="block text-sm font-medium text-gray-300">Uzvaras mazāk par</label>
                    <input type="number" id="uzvaras_mazak" name="uzvaras_mazak" class="mt-1 block w-full bg-gray-800 border-gray-700 text-white p-2 rounded" value="{{ request('uzvaras_mazak') }}">
                </div>
                <div class="form-group">
                    <label for="zaudejumi_vairak" class="block text-sm font-medium text-gray-300">Zaudējumi vairāk par</label>
                    <input type="number" id="zaudejumi_vairak" name="zaudejumi_vairak" class="mt-1 block w-full bg-gray-800 border-gray-700 text-white p-2 rounded" value="{{ request('zaudejumi_vairak') }}">
                </div>
                <div class="form-group">
                    <label for="zaudejumi_mazak" class="block text-sm font-medium text-gray-300">Zaudējumi mazāk par</label>
                    <input type="number" id="zaudejumi_mazak" name="zaudejumi_mazak" class="mt-1 block w-full bg-gray-800 border-gray-700 text-white p-2 rounded" value="{{ request('zaudejumi_mazak') }}">
                </div>
            </div>
            <button type="submit" class="mt-4 bg-blue-600 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded">Filtrēt</button>
        </form>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full bg-gray-800 rounded">
                <thead>
                    <tr>
                        <th class="p-3 text-left">Komandas ID</th>
                        <th class="p-3 text-left">Nosaukums</th>
                        <th class="p-3 text-left">Uzvaras</th>
                        <th class="p-3 text-left">Zaudējumi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($statistika as $stats)
                        <tr class="border-t border-gray-700">
                            <td class="p-3">{{ $stats->KomandasID }}</td>
                            <td class="p-3">{{ $stats->komanda->Nosaukums }}</td>
                            <td class="p-3">{{ $stats->Uzvaras }}</td>
                            <td class="p-3">{{ $stats->Zaudejumi }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>



