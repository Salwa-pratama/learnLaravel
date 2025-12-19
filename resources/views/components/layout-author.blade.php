@props(['name', 'articles', 'author_id'])

<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-200">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Home</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    {{-- icons --}}
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body class="min-h-full">
    {{-- Ini bagian Header --}}
    <div class="sticky top-0 z-50 w-full ">
        <x-header>{{ $title ?? '' }}</x-header>
        <header
            class="relative p-0 bg-gray-400/70 after:pointer-events-none after:absolute after:inset-x-0 after:inset-y-0 after:border-y after:border-white/10">
            <div class="flex items-center justify-between px-2 py-2 mx-auto max-w-7xl sm:px-6 lg:px-8 ">
                <h1 class="text-xl  text-white">Article By {{ $name }} </h1>
                <x-search :action="url('/authors/' . $author_id)" />

            </div>
        </header>
    </div>

    <main>
        <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>

    {{-- Flowbite --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
    {{-- Icons --}}
    <script>
        feather.replace();
    </script>
</body>

</html>
