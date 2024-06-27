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
            <a href="{{ url('/') }}" class="text-white hover:text-gray-300 mx-2">{{ __('messages.home') }}</a>
            <a href="{{ url('/komandas') }}" class="text-white hover:text-gray-300 mx-2">{{ __('messages.teams') }}</a>
            <a href="{{ url('/speletaji') }}" class="text-white hover:text-gray-300 mx-2">{{ __('messages.players') }}</a>
            <a href="{{ url('/turniri') }}" class="text-white hover:text-gray-300 mx-2">{{ __('messages.tournaments') }}</a>
            <a href="{{ url('/maci') }}" class="text-white hover:text-gray-300 mx-2">{{ __('messages.matches') }}</a>
            <a href="{{ url('/speles') }}" class="text-white hover:text-gray-300 mx-2">{{ __('messages.games') }}</a>
            <a href="{{ url('/statistika') }}" class="text-white hover:text-gray-300 mx-2">{{ __('messages.statistics') }}</a>
            <a href="{{ url('/news') }}" class="text-white hover:text-gray-300 mx-2">{{ __('messages.latest_news') }}</a>
        </div>

        <div>
            @guest
                <a href="{{ route('login') }}" class="bg-gray-700 text-white hover:bg-gray-600 py-1 px-3 rounded mx-2">{{ __('messages.login') }}</a>
                <a href="{{ route('register') }}" class="bg-blue-600 text-white hover:bg-blue-500 py-1 px-3 rounded mx-2">{{ __('messages.register') }}</a>
            @else
                <a href="{{ route('profile.show', ['id' => Auth::user()->id]) }}" class="text-white mx-2">{{ Auth::user()->name }}</a>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="bg-red-600 text-white hover:bg-red-500 py-1 px-3 rounded mx-2">{{ __('messages.logout') }}</button>
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

    <!-- Display comments -->
    <div class="bg-gray-800 p-6 rounded mb-6">
        <h2 class="text-2xl font-bold mb-4">Comments</h2>
        @foreach($newsItem->comments as $comment)
            <div class="bg-gray-700 p-4 rounded mb-4">
                <p>{{ $comment->content }}</p>
                @if($comment->image_path)
                    <div style="max-width: 400px; max-height: 400px; overflow: hidden;">
                        <img src="{{ asset('storage/' . $comment->image_path) }}" alt="Comment Image" style="width: 100%; height: auto;">
                    </div>
                @endif
                <small class="block mt-2 text-gray-400">
                    By: <a href="{{ route('profile.show', ['id' => $comment->user->id]) }}" class="text-blue-500 hover:text-blue-300">{{ $comment->user->name }}</a>
                </small>
                @auth
                    @if(auth()->user()->id === $comment->user_id || auth()->user()->role_id == 1)
                        <div class="mt-2">
                            <a href="{{ route('comments.edit', $comment->id) }}" class="text-blue-500 hover:text-blue-300">Edit</a>
                            <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-300">Delete</button>
                            </form>
                        </div>
                    @endif
                @endauth
            </div>
        @endforeach
    </div>

    <!-- Comment form -->
    @auth
        @if ($errors->any())
            <div class="bg-red-500 text-white p-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('comment.store', ['type' => 'news', 'id' => $newsItem->id]) }}" method="POST" enctype="multipart/form-data" class="bg-gray-800 p-4 rounded mt-6">
            @csrf
            <div class="form-group mb-4">
                <label for="content" class="block text-white mb-2">Add a comment:</label>
                <textarea name="content" id="content" class="w-full p-2 rounded bg-gray-700 border border-gray-600 text-white"></textarea>
            </div>
            <div class="form-group mb-4">
                <label for="image" class="block text-white mb-2">Add an image:</label>
                <input type="file" name="image" id="image" class="w-full p-2 rounded bg-gray-700 border border-gray-600 text-white">
            </div>
            <button type="submit" class="bg-blue-600 text-white hover:bg-blue-500 py-2 px-4 rounded">Submit</button>
        </form>
    @endauth
</div>
</body>
</html>

</html>

