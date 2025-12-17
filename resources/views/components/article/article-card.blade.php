@props(['titleart', 'author', 'paragraf', 'slug', 'created_at', 'author_id', 'category'])

@php
    $categoryColors = [
        'programming' => 'bg-blue-100 text-black',
        'kuliner' => 'bg-red-100 text-black',
        'olah raga' => 'bg-green-100 text-black',
        'design' => 'bg-orange-100 text-black',
    ];
    $categoryClass = $categoryColors[strtolower($category)] ?? 'bg-gray-100 text-gray-800';
@endphp

<article class="p-6 bg-white border border-gray-200 rounded-lg shadow-md ">
    <div class="flex items-center justify-between mb-5 text-gray-500">
        <span
            class="{{ $categoryClass }} text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded ">
            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                    clip-rule="evenodd"></path>
                <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path>
            </svg>
            {{ $category }}
        </span>
        <span class="text-sm">{{ $created_at }}</span>
    </div>
    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"><a
            href="/blog/{{ $slug }}">{{ $titleart }}</a></h2>
    <p class="mb-5 font-light text-black ">{{ Str::limit($paragraf, 50) }}</p>
    <div class="flex items-center justify-between">
        <div class="flex items-center space-x-4">
            <img class="rounded-full w-7 h-7"
                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                alt="Bonnie Green avatar" />
            <span class="font-medium ">
                <a href="/authors/{{ $author_id }}">
                    {{ $author }}
                </a>
            </span>
        </div>
        <a href="/blog/{{ $slug }}"
            class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
            Read more
            <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </a>
    </div>
</article>
