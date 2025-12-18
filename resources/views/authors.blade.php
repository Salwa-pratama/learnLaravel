<x-layout-author>

    <div class="grid gap-8 lg:grid-cols-2">


        @if (count($author->articles) == 0)
            <div class="items-center text-center">
                <p class="text-2xl">Article Kosong....</p>
            </div>
        @else
            @foreach ($author->articles as $item)
                <div class="flex flex-col gap-10 border-black">
                    <x-article.article-card :titleart="$item->title" :author="$item->author->name" :paragraf="$item->isi" :slug="$item->slug"
                        :author_id="$item->author_id" :created_at="$item->created_at->diffForhumans()" :category="$item->category->category" />
                    {{-- diffForhumans() berfungsi untuk format tanggal --}}
                </div>
            @endforeach
        @endif
    </div>

</x-layout-author>
