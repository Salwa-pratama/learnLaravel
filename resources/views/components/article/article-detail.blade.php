@props(['title', 'author', 'isi', 'created_at'])
<div class="flex flex-col items-center gap-10">
    <div class="text-center">
        <h1 class="p-0 m-0 text-2xl font-bold">{{ $title }}</h1>
        <h3 class="px-20 text-sm text-gray-700 ">{{ $author->name }} | {{ $created_at }}</h3>
    </div>
    <p class="text-center">{{ $isi }}</p>
    <div class="items-start w-full">
        <a href="/blogs" class="px-2 text-sm text-white bg-blue-800 rounded-md">Kembali</a>
    </div>
</div>


