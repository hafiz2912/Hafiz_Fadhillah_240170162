<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home - Chirps</title>

    {{-- VITE (WAJIB untuk load CSS & JS Laravel) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans">

<div class="max-w-xl mx-auto mt-10">

    <h1 class="text-2xl font-bold mb-6">Chirps</h1>

    @foreach ($chirps as $chirp)
        <div class="bg-white p-4 mb-4 rounded shadow">
            
            <div class="font-bold text-gray-800">
                {{ $chirp['author'] }}
            </div>

            <div class="text-gray-700 mt-2">
                {{ $chirp['message'] }}
            </div>

            <div class="text-sm text-gray-400 mt-2">
                {{ $chirp['time'] }}
            </div>

        </div>
    @endforeach

</div>

</body>
</html>