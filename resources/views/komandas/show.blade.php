<!DOCTYPE html>
<html>
<head>
    <title>Komandas nosaukums: {{ $komanda->Nosaukums }}</title>
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
        <h1 class="text-3xl font-bold mb-6">Komandas nosaukums: {{ $komanda->Nosaukums }}</h1>
        <p>Valsts: {{ $komanda->Valsts }}</p>
        <p>Izveides datums: {{ $komanda->IzveidesDatums }}</p>
        <p>Rangs: {{ $komanda->Rangs }}</p>

        <h2 class="text-2xl font-bold mt-6">Komentāri</h2>
        @foreach($komanda->comments as $comment)
            <div class="bg-gray-800 p-4 rounded mb-3">
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
            <form action="{{ route('comment.store', ['type' => 'komanda', 'id' => $komanda->KomandasID]) }}" method="POST" enctype="multipart/form-data" class="bg-gray-800 p-4 rounded mt-6">
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


