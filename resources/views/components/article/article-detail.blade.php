@props(['title', 'author', 'isi', 'created_at'])
<div class="items-center flex flex-col  gap-10">
    <div class="text-center">
        <h1 class="m-0 p-0 text-2xl font-bold">{{ $title }}</h1>
        <h3 class="text-sm px-20  text-gray-700 ">{{ $author }} | {{ $created_at }}</h3>
    </div>
    <p class="text-center">{{ $isi }}</p>
    <div class="items-start  w-full">
        <a href="/blogs" class="bg-blue-800 text-white rounded-md px-2 text-sm">Kembali</a>
    </div>
</div>
