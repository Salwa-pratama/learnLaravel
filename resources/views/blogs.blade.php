<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="flex items-center ">
        <div class="flex items-center border ">
            <form action="/blogs" method="GET" class=" h-fit">
                <select name="category" onchange="this.form.submit()"
                    class="px-3 text-sm bg-white border border-gray-300 rounded-md h-9 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <option value="">All Category</option>

                    @foreach ($categories as $cat)
                        <option value="{{ $cat->slug }}" {{ $activeCategory == $cat->slug ? 'selected' : '' }}>
                            {{ $cat->category }}
                        </option>
                    @endforeach
                </select>
            </form>
        </div>

    </div>
    {{-- main --}}
    @if (count($article) == 0)
        <div class="items-center text-center">
            <p class="text-2xl">Article Kosong....</p>
        </div>
    @else
        @foreach ($article as $item)
            <div class="flex flex-col gap-10 border-black">
                <x-article.article-card :titleart="$item->title" :author="$item->author->name" :paragraf="$item->isi" :slug="$item->slug"
                    :author_id="$item->author_id" :created_at="$item->created_at->diffForhumans()" :category="$item->category->category" />
                {{-- diffForhumans() berfungsi untuk format tanggal --}}
            </div>
        @endforeach
    @endif
</x-layout>
