<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-200">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Home</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
</head>

<body class="min-h-full">
    {{-- Ini bagian Header --}}
    <x-navbar></x-navbar>
    <x-header>{{ $title }}</x-header>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 ">
            {{ $slot }}
        </div>
    </main>


</body>

</html>
