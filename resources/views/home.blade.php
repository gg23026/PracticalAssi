<!DOCTYPE html>
<html>
<head>
    <title>Esports Home</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
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
<body>
    
    <div class="navbar">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/komandas') }}">Komandas</a>
        <a href="{{ url('/speletaji') }}">Spēlētāji</a>
        <a href="{{ url('/turniri') }}">Turnīri</a>
        <a href="{{ url('/maci') }}">Mači</a>
        <a href="{{ url('/speles') }}">Spēles</a>
        <a href="{{ url('/statistika') }}">Statistika</a>
    </div>
    

    <h1 class="header">Welcome to Esports Home</h1>
    <div class="banner">Banner Image Here</div>
    <div class="text-center">
        <p>Live Stream Here</p>
    </div>
    <div class="live-stream">
    <iframe
            src="https://player.twitch.tv/?channel=ohnePixel&parent=http://practicalassi.test&muted=true"
            height="360"
            width="480"
            allowfullscreen>
        </iframe>
    </div>
    <div class="text-center">
        <p>Latest News</p>
        <p>Today's topic</p>
    </div>
</body>
</html>



