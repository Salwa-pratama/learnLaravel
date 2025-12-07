<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- main --}}
    <div class="border-black flex flex-col gap-10">
        @foreach ($article as $item)
            <x-article.article-card :titleart="$item['title']" :date="$item['date']" :paragraf="$item['isi']" :slug="$item['slug']" />
        @endforeach
    </div>
</x-layout>
