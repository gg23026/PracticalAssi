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
    <style>
        .reply {
            margin-left: 20px;
            background-color: #4b5563; /* Darker gray */
        }

        .center-img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

    </style>
    <script>
        function toggleReplyForm(commentId) {
            var form = document.getElementById('reply-form-' + commentId);
            if (form.style.display === 'none' || form.style.display === '') {
                form.style.display = 'block';
            } else {
                form.style.display = 'none';
            }
        }
    </script>
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
            <a href="{{ url('/news') }}" class="text-white hover:text-gray-300 mx-2 font-bold">Latest News</a>
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
    <div class="bg-gray-800 p-6 rounded mb-6">
        <h1 class="text-3xl font-bold">{{ $newsItem->title }}</h1>
        <p class="text-gray-400">{{ $newsItem->created_at->format('d-m-Y H:i') }}</p>
        <div class="mt-4 text-lg">
        <img src="https://img-cdn.hltv.org/gallerypicture/CnZKhJF9MW74cqyIg2HcPh.jpg?auto=compress&fm=avif&ixlib=java-2.1.0&q=75&w=800&s=d4d91d4d6c0568b219681879d2d24aea" alt="" class="center-img" style="width: 800px; height: 400px;">
            <!-- News Content -->
            <p>Other changes include a new MVP panel in-game and an adjustment to the number of wins needed to get a rank in matchmaking.</p>
            <p>Valve has shipped a new update for Counter-Strike 2 that adds five community-made maps, the first non-Valve ones to be officially added to the game since its release and update from CS:GO.</p>
            <p>Thera, previously released in CS:GO as "Santorini," is made by one of the designers of Cache, Shawn "FMPONE" Snelling. It releases in Competitive, Casual, and Deathmatch alongside Mills, made by Tuscan and Shipped creator "catfood".</p>
            <p>Memento and Assembly have been added to Wingman, and Pool Day — a CS2 remake of the community-made CS 1.6 map fy_pool_day — joins the Arms Race pool.</p>
            <p>Minimal changes have been shipped alongside the release of community maps, despite anticipation being high among fans and the community for an Operation or a larger content drop to commemorate the 25th anniversary of Counter-Strike.</p>
            <p>The primary highlight is an update to the MVP panel in all game modes and the "all-new animated MVP panels" for Premier matches, alongside "several new MVP conditions" and adjustments to previous MVP rules.</p>
            <p>The number of wins needed to see your map-specific skill group in (non-Premier) competitive matchmaking has been reduced from ten to two, and a few video settings have been added, tweaked, or removed.</p>
            <p>The complete patch notes can be found below:</p>
            <h3 class="text-xl font-bold">[ MAPS ]</h3>
            <ul class="list-disc list-inside">
                <li>Community Maps</li>
                <ul class="list-disc list-inside">
                    <li>Added community maps Thera and Mills to Competitive, Casual, and Deathmatch map groups</li>
                    <li>Added community maps Memento and Assembly to the Wingman map pool</li>
                    <li>Added community map Pool Day to the Arms Race map pool</li>
                </ul>
                <li>Nuke</li>
                <ul class="list-disc list-inside">
                    <li>Fixed c4 stuck spots</li>
                </ul>
                <li>Ancient</li>
                <ul class="list-disc list-inside">
                    <li>Fixed c4 stuck spots, holes in the world, and non-solids causing problems</li>
                </ul>
                <li>Vertigo</li>
                <ul class="list-disc list-inside">
                    <li>Fixed c4 stuck spots and clipping</li>
                </ul>
                <li>Anubis</li>
                <ul class="list-disc list-inside">
                    <li>Fixes for grenade collision and clipping</li>
                </ul>
            </ul>
            <h3 class="text-xl font-bold">[ UI ]</h3>
            <ul class="list-disc list-inside">
                <li>Updated the MVP panel in all game modes</li>
                <li>Added all-new animated MVP panels to Premier matches</li>
                <li>Added several new MVP conditions and adjusted prior MVP rules</li>
            </ul>
            <h3 class="text-xl font-bold">[ GAMEPLAY ]</h3>
            <ul class="list-disc list-inside">
                <li>In Competitive Matchmaking, per-map skill groups are now revealed after you earn two wins on a map.</li>
            </ul>
            <h3 class="text-xl font-bold">[ VIDEO SETTINGS ]</h3>
            <ul class="list-disc list-inside">
                <li>Settings Recommendations</li>
                <ul class="list-disc list-inside">
                    <li>Added a Settings Recommendation popup if your display's refresh rate is set below its maximum at startup. Using your display's highest refresh rate is generally recommended.</li>
                    <li>Added a Settings Recommendation popup if NVIDIA G-Sync support is detected but not enabled at startup. Using G-Sync is generally recommended if your system supports it.</li>
                    <li>Added a Settings Recommendation popup if NVIDIA G-Sync is enabled but not V-Sync and/or NVIDIA Reflex. It is generally recommended to enable all three settings together when they are available. Note that applying these settings will limit your frame rate to your display's refresh rate or slightly lower, which is usually the smoothest-looking and lowest input latency settings combination. See here for technical details.</li>
                </ul>
                <li>Removed "Main Menu Background Scenery" and "Item Inspect Background Scenery" settings from the Video Settings page. These settings are still available on the Main Menu and in the Item Inspect screens respectively.</li>
                <li>The "Refresh Rate" setting now shows your display's current refresh rate in Windowed and Fullscreen Windowed modes.</li>
                <li>Removed the "Laptop Power Savings" setting which has never actually been configurable in CS2.</li>
                <li>Added a "Frame Pacing" section to the Advanced Video settings page.</li>
                <li>Added an "NVIDIA G-Sync" row to the Frame Pacing section which tells you whether or not G-Sync is active with your current display settings. This row may be hidden if you're using the Vulkan renderer or if you're not using an NVIDIA graphics card.</li>
                <li>Added "Maximum FPS In Game" and "Maximum FPS In Menus" sliders to the Frame Pacing section. These control the fps_max and fps_max_ui convars respectively.</li>
                <li>Increased the default "Maximum FPS In Menus" setting from 120 FPS to 200 FPS.</li>
                <li>The Advanced Video visual preview now uses the "In Game" maximum FPS instead of the "In Menus" maximum.</li>
            </ul>
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
                @auth
                    <!-- Reply button and form -->
                    <div class="mt-2">
                        <button onclick="toggleReplyForm({{ $comment->id }})" class="text-blue-500 hover:text-blue-300">Reply</button>
                        <form id="reply-form-{{ $comment->id }}" action="{{ route('comment.store', ['type' => 'news', 'id' => $newsItem->id]) }}" method="POST" enctype="multipart/form-data" class="hidden mt-2 bg-gray-800 p-4 rounded">
                            @csrf
                            <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                            <div class="form-group mb-4">
                                <label for="content-{{ $comment->id }}" class="block text-white mb-2">Add a reply:</label>
                                <textarea name="content" id="content-{{ $comment->id }}" class="w-full p-2 rounded bg-gray-700 border border-gray-600 text-white"></textarea>
                            </div>
                            <div class="form-group mb-4">
                                <label for="image-{{ $comment->id }}" class="block text-white mb-2">Add an image (optional):</label>
                                <input type="file" name="image" id="image-{{ $comment->id }}" class="w-full p-2 rounded bg-gray-700 border border-gray-600 text-white">
                            </div>
                            <button type="submit" class="bg-blue-600 text-white hover:bg-blue-500 py-2 px-4 rounded">Submit</button>
                        </form>
                    </div>
                @endauth

                <!-- Display replies -->
                @foreach($comment->replies as $reply)
                    <div class="reply bg-gray-600 p-3 rounded mt-3">
                        <p>{{ $reply->content }}</p>
                        @if($reply->image_path)
                            <div style="max-width: 300px; max-height: 300px; overflow: hidden;">
                                <img src="{{ asset('storage/' . $reply->image_path) }}" alt="Reply Image" style="width: 100%; height: auto;">
                            </div>
                        @endif
                        <small class="block mt-2 text-gray-400">
                            Reply to: {{ $comment->user->name }}<br>
                            By: <a href="{{ route('profile.show', ['id' => $reply->user->id]) }}" class="text-blue-500 hover:text-blue-300">{{ $reply->user->name }}</a>
                        </small>
                        @auth
                            @if(auth()->user()->id === $reply->user_id || auth()->user()->role_id == 1)
                                <div class="mt-2">
                                    <a href="{{ route('comments.edit', $reply->id) }}" class="text-blue-500 hover:text-blue-300">Edit</a>
                                    <form action="{{ route('comments.destroy', $reply->id) }}" method="POST" style="display:inline;">
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
