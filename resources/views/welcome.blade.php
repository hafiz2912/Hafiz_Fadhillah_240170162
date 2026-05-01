<!DOCTYPE html>
<html lang="en" data-theme="lofi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chirper</title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .animated-bg {
            background: linear-gradient(-45deg, #ff9a9e, #fad0c4, #fbc2eb, #a18cd1);
            background-size: 400% 400%;
            animation: gradientMove 12s ease infinite;
        }

        @keyframes float {
            0%,100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .float {
            animation: float 5s ease-in-out infinite;
        }
    </style>
</head>

<body class="min-h-screen flex flex-col font-sans animated-bg text-white">

    <!-- NAVBAR -->
    <nav class="navbar bg-white/20 backdrop-blur-md shadow px-6">
        <div class="navbar-start">
            <a href="/" class="text-2xl font-bold">🐦 Chirper</a>
        </div>

        <div class="navbar-end gap-3">
            <a href="#" class="btn btn-ghost btn-sm text-white">Sign In</a>
            <a href="#" class="btn bg-white text-black btn-sm">Sign Up</a>
        </div>
    </nav>

    <!-- HERO -->
    <div class="text-center mt-10 px-4">
        <h1 class="text-4xl font-extrabold float">
            Welcome to Chirper
        </h1>
        <p class="mt-3 text-white/80">
            Share your thoughts with style ✨
        </p>
    </div>

    <!-- CHIRPS -->
    <div class="max-w-2xl mx-auto py-10 px-4">

        @foreach ($chirps as $chirp)
            <div class="bg-white/20 backdrop-blur-md rounded-xl p-5 shadow mt-6 hover:scale-[1.02] transition">

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

    </div>

    <!-- FOOTER -->
    <footer class="text-center p-6 text-white/70 text-sm">
        © 2026 Chirper • Built with ❤️ Hafiz Fadhillah (240170162)
    </footer>

</body>
</html>