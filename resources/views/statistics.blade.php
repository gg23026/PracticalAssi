<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistics</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <header class="bg-red-700 text-white">
        <nav class="container mx-auto p-4">
            <ul class="flex space-x-4">
                <li><a href="/" class="hover:bg-red-800 p-2 rounded">Matches</a></li>
                <li><a href="/" class="hover:bg-red-800 p-2 rounded">Events</a></li>
                <li><a href="/" class="hover:bg-red-800 p-2 rounded">Community</a></li>
                <li><a href="/statistics" class="hover:bg-red-800 p-2 rounded">Statistics</a></li>
                <li><a href="/" class="hover:bg-red-800 p-2 rounded">News</a></li>
                <li><a href="/" class="hover:bg-red-800 p-2 rounded">Log-in</a></li>
            </ul>
        </nav>
    </header>
    <main class="container mx-auto mt-8 space-y-8">
        <section id="banner" class="bg-gray-300 text-center p-8 text-2xl">Banner</section>
        <section id="live-stream" class="bg-gray-200 p-8">Live stream</section>
        <section id="topic" class="bg-gray-200 p-8">Today's topic</section>
        <section id="statistics" class="bg-white p-8">
            <h2 class="text-xl mb-4">Statistics</h2>
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="py-2 px-4 border-b">Top</th>
                        <th class="py-2 px-4 border-b">Player</th>
                        <th class="py-2 px-4 border-b">Team</th>
                        <th class="py-2 px-4 border-b">Maps</th>
                        <th class="py-2 px-4 border-b">Rounds</th>
                        <th class="py-2 px-4 border-b">K-D Diff</th>
                        <th class="py-2 px-4 border-b">Rating</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($stats as $stat)
                        <tr>
                            <td class="py-2 px-4 border-b">{{ $stat['top'] }}</td>
                            <td class="py-2 px-4 border-b">{{ $stat['player'] }}</td>
                            <td class="py-2 px-4 border-b">{{ $stat['team'] }}</td>
                            <td class="py-2 px-4 border-b">{{ $stat['maps'] }}</td>
                            <td class="py-2 px-4 border-b">{{ $stat['rounds'] }}</td>
                            <td class="py-2 px-4 border-b">{{ $stat['kd_diff'] }}</td>
                            <td class="py-2 px-4 border-b">{{ $stat['rating'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
        <section id="comments" class="bg-white p-8 mt-8">
            <h3 class="text-lg mb-4">Comments</h3>
            <div class="comment border-b py-2">User: Comment</div>
            <div class="comment border-b py-2">User: Comment</div>
            <div class="comment border-b py-2">User: Comment</div>
        </section>
    </main>
</body>
</html>

