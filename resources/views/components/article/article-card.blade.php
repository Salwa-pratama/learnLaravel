@props(['titleart', 'author', 'paragraf', 'slug', 'created_at', 'author_id', 'category'])
<article class="px-2 py-5 text-justify border-b-2 border-gray-400/50">
    <a href="/blog/{{ $slug }}" class="hover:underline">
        <h1 class="text-3xl font-bold text-blue-800">{{ $titleart }}</h1>
    </a>
    <a href="/authors/{{ $author_id }}" class="font-normal text-gray-600"> <span
            class="hover:underline">{{ $author }}</span> |
        {{ $created_at }} | {{ $category }}</a>
    <div>
        <p>{{ Str::limit($paragraf, 50) }}</p>
    </div>
    <a href="/blog/{{ $slug }}" class="px-2 mt-4 text-sm text-white bg-green-500 rounded-sm">View More</a>
</article>
