<!DOCTYPE html>
<html lang="en" data-theme="lofi">
<head>
    <meta charset="UTF-8">
    <title>Home - Chirper</title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .animated-bg {
            background: linear-gradient(-45deg, #ff9a9e, #fad0c4, #fbc2eb, #a18cd1);
            background-size: 400% 400%;
            animation: gradientMove 12s ease infinite;
        }

        @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
    </style>
</head>

<body class="min-h-screen font-sans animated-bg text-white">

    <!-- NAVBAR -->
    <nav class="navbar bg-white/20 backdrop-blur-md px-6">
        <a href="/" class="text-xl font-bold">🐦 Chirper</a>
    </nav>

    <div class="max-w-2xl mx-auto py-10 px-4">

        <h1 class="text-3xl font-bold text-center mb-6">
            Home Page
        </h1>

        @foreach ($chirps as $chirp)
            <div class="bg-white/20 backdrop-blur-md rounded-xl p-5 shadow mt-6">

                <div class="font-semibold text-lg">
                    {{ $chirp['author'] }}
                </div>

                <div class="mt-2 text-white/90">
                    {{ $chirp['message'] }}
                </div>

                <div class="text-sm text-white/60 mt-3">
                    {{ $chirp['time'] }}
                </div>

            </div>
        @endforeach

        <div class="text-center mt-8">
            <a href="/" class="btn bg-white text-black">Back</a>
        </div>

    </div>

</body>
</html>