<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home - Chirps</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
        }

        .card {
            background: white;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }

        .author {
            font-weight: bold;
            color: #111827;
        }

        .time {
            font-size: 12px;
            color: gray;
        }

        .message {
            margin-top: 8px;
            font-size: 15px;
        }
    </style>
</head>
<body>

<div class="container">

    <h2>Chirps</h2>

    @foreach ($chirps as $chirp)
        <div class="card">
            <div class="author">
                {{ $chirp['author'] }}
            </div>

            <div class="message">
                {{ $chirp['message'] }}
            </div>

            <div class="time">
                {{ $chirp['time'] }}
            </div>
        </div>
    @endforeach

</div>

</body>
</html>