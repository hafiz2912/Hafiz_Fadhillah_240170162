<!DOCTYPE html>
<html lang="en" data-theme="lofi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chirper</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet"/>

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
            50% { transform: translateY(-20px); }
        }

        .float {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes pulseGlow {
            0%,100% { opacity: 0.6; }
            50% { opacity: 1; }
        }

        .glow {
            animation: pulseGlow 4s ease-in-out infinite;
        }
    </style>
</head>

<body class="min-h-screen flex flex-col font-sans animated-bg overflow-hidden">

    <!-- BACKGROUND EFFECT -->
    <div class="absolute inset-0 -z-10">
        <div class="absolute w-80 h-80 bg-pink-300 rounded-full blur-3xl opacity-30 top-10 left-10 float glow"></div>
        <div class="absolute w-80 h-80 bg-purple-300 rounded-full blur-3xl opacity-30 bottom-10 right-10 float glow"></div>
    </div>

    <!-- NAVBAR -->
    <nav class="navbar bg-white/20 backdrop-blur-md shadow px-6">
        <div class="navbar-start">
            <a href="/" class="btn btn-ghost text-2xl font-bold text-white">
                🐦 Chirper
            </a>
        </div>

        <div class="navbar-end gap-3">
            <a href="#" class="btn btn-ghost btn-sm text-white">Sign In</a>
            <a href="#" class="btn bg-white text-black btn-sm">Sign Up</a>
        </div>
    </nav>

    <!-- MAIN -->
    <main class="flex-1 flex items-center justify-center px-4 text-center">
        <div class="max-w-2xl">

            <h1 class="text-5xl font-extrabold text-white drop-shadow-lg float">
                Welcome to Chirper
            </h1>

            <p class="mt-5 text-lg text-white/80">
                Share your thoughts with style.
            </p>

            <div class="mt-8 flex justify-center gap-4">
                <a href="#" class="btn bg-white text-black border-none hover:scale-110 transition duration-300">
                    Get Started
                </a>
                <a href="#" class="btn btn-outline text-white border-white hover:bg-white hover:text-black transition">
                    Learn More
                </a>
            </div>

            <div class="card bg-white/20 backdrop-blur-md shadow-xl mt-10 hover:scale-105 transition">
                <div class="card-body">
                    <h2 class="card-title text-white">Interactive UI</h2>
                    <p class="text-white/80">
                        Smooth animations and modern design.
                    </p>
                </div>
            </div>

        </div>
    </main>

<!-- FOOTER -->
    <footer class="footer footer-center p-6 text-white text-sm">
        <div>
            <p>© 2026 Chirper • Built with ❤️ Hafiz Fadhillah</p>
        </div>
    </footer>

</body>
</html>