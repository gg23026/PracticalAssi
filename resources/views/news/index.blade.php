<!DOCTYPE html>
<html>
<head>
    <title>Latest News</title>
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
        <div>
            <a href="{{ url('/') }}" class="text-white hover:text-gray-300 mx-2">Mājas</a>
            <a href="{{ url('/news') }}" class="text-white hover:text-gray-300 mx-2">Latest News</a>
        </div>

        <div>
            @guest
                <a href="{{ route('login') }}" class="bg-gray-700 text-white hover:bg-gray-600 py-1 px-3 rounded mx-2">Login</a>
                <a href="{{ route('register') }}" class="bg-blue-600 text-white hover:bg-blue-500 py-1 px-3 rounded mx-2">Register</a>
            @else
                <a href="{{ route('profile.show', ['id' => Auth::user()->id]) }}" class="text-white mx-2">{{ Auth::user()->name }}</a>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="bg-red-600 text-white hover:bg-red-500 py-1 px-3 rounded mx-2">Logout</button>
                </form>
            @endguest

            <a href="{{ url('lang/en') }}" class="text-white hover:text-gray-300 mx-2">ENG</a>
            <a href="{{ url('lang/lv') }}" class="text-white hover:text-gray-300 mx-2">LV</a>
        </div>
    </div>
</nav>

<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Latest News</h1>
    @foreach($news as $newsItem)
        <div class="bg-gray-800 p-6 rounded mb-6">
            <h2 class="text-2xl font-bold">
                <a href="{{ route('news.show', $newsItem->id) }}" class="text-blue-500 hover:underline">{{ $newsItem->title }}</a>
            </h2>
            <p class="text-gray-400">{{ $newsItem->created_at->format('d-m-Y H:i') }}</p>
            <p class="mt-4">{{ Str::limit($newsItem->content, 150) }}</p>
        </div>
    @endforeach
</div>
</body>
</html>

