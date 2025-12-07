@props(['date', 'isi'])
<div class="items-center flex flex-col  gap-10">
    <h3 class="text-2xl px-20 font-bold text-gray-800 ">{{ $date }}</h3>
    <p class="text-center">{{ $isi }}</p>
    <div class="items-start  w-full">
        <a href="/blogs" class="bg-blue-800 text-white rounded-md px-2 text-sm">Kembali</a>
    </div>
</div>
