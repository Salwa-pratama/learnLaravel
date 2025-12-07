<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- main --}}
    @if (count($article) == 0)
        <div class="items-center text-center">
            <p class="text-2xl">Article Kosong....</p>
        </div>
    @else
        @foreach ($article as $item)
            <div class="border-black flex flex-col gap-10">
                <x-article.article-card :titleart="$item['title']" :date="$item['author_and_date']" :paragraf="$item['isi']" :slug="$item['slug']" />
            </div>
        @endforeach
    @endif

</x-layout>
