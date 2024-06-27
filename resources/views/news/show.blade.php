<!DOCTYPE html>
<html>
<head>
    <title>{{ $newsItem->title }}</title>
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
    <div class="bg-gray-800 p-6 rounded mb-6">
        <h1 class="text-3xl font-bold">{{ $newsItem->title }}</h1>
        <p class="text-gray-400">{{ $newsItem->created_at->format('d-m-Y H:i') }}</p>
        <div class="mt-4 text-lg">
            {{ $newsItem->content }}
        </div>
    </div>

    <div class="bg-gray-800 p-6 rounded mb-6">
        <h2 class="text-2xl font-bold">Comments</h2>
        @foreach ($newsItem->comments as $comment)
            <div class="bg-gray-700 p-4 rounded mb-4">
                <p class="text-lg">{{ $comment->content }}</p>
                <p class="text-gray-400 text-sm">- {{ $comment->user->name }} {{ $comment->created_at->diffForHumans() }}</p>
                @foreach ($comment->replies as $reply)
                    <div class="ml-6 bg-gray-600 p-4 rounded mb-4">
                        <p class="text-lg">{{ $reply->content }}</p>
                        <p class="text-gray-400 text-sm">- {{ $reply->user->name }} {{ $reply->created_at->diffForHumans() }}</p>
                    </div>
                @endforeach
            </div>
        @endforeach

        @auth
            <form action="{{ route('comment.store', ['type' => 'news', 'id' => $newsItem->id]) }}" method="POST" enctype="multipart/form-data" class="bg-gray-800 p-4 rounded mt-6">
                @csrf
                <div class="mb-4">
                    <label for="content" class="block text-gray-300">Add a comment:</label>
                    <textarea name="content" id="content" rows="4" class="w-full p-2 rounded bg-gray-700 border border-gray-600 text-white"></textarea>
                </div>
                <div class="mb-4">
                    <label for="image" class="block text-gray-300">Attach an image (optional):</label>
                    <input type="file" name="image" id="image" class="block w-full text-sm text-gray-300 border border-gray-600 rounded cursor-pointer bg-gray-700">
                </div>
                <button type="submit" class="bg-blue-600 text-white hover:bg-blue-500 py-2 px-4 rounded">Submit</button>
            </form>
        @else
            <p class="text-gray-400">You need to <a href="{{ route('login') }}" class="text-blue-500 hover:underline">log in</a> to post a comment.</p>
        @endauth
    </div>
</div>
</body>
</html>
