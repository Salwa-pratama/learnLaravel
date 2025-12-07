<article class="border-b-2 border-gray-400/50 py-5 px-2 text-justify">
    <a href="/blog/{{ $slug }}" class="hover:underline">
        <h1 class="font-bold text-3xl text-blue-800">{{ $titleart }}</h1>
    </a>
    <a href="#" class="font-normal text-gray-600">{{ $date }}</a>
    <div>
        <p>{{ Str::limit($paragraf, 50) }}</p>
    </div>
    <a href="/blog/{{ $slug }}" class="bg-green-500  rounded-sm text-white px-2 text-sm mt-4">View More</a>
</article>
