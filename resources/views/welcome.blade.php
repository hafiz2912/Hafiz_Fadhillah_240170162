<!DOCTYPE html>
<html lang="en" data-theme="lofi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Chirper</title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen font-sans">

    <div class="max-w-2xl mx-auto py-10">

        <h1 class="text-3xl font-bold mb-6 text-center">
            Welcome to Chirper
        </h1>

        @foreach ($chirps as $chirp)
            <div class="card bg-white shadow mt-6">
                <div class="card-body">

                    <div class="font-semibold text-lg">
                        {{ $chirp['author'] }}
                    </div>

                    <div class="mt-2">
                        {{ $chirp['message'] }}
                    </div>

                    <div class="text-sm text-gray-500 mt-3">
                        {{ $chirp['time'] }}
                    </div>

                </div>
            </div>
        @endforeach

        <div class="text-center mt-8">
            <a href="/home" class="btn btn-primary">Go to Home</a>
        </div>

    </div>

</body>
</html>