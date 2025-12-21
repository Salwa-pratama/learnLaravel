<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="max-w-screen-xl px-4 mx-auto lg:py-4 lg:px-6">
        <div class="flex items-center py-4 ">
            {{-- Category DrobDown --}}
            <div class="flex items-center justify-between w-full ">
                <form action="/blogs" method="GET" class=" h-fit">
                    @if (request('search'))
                        <input type="hidden" name="search" value="{{ request('search') }}">
                    @endif
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
                <p class="text-slate-600">{{ count($article) }} Articles</p>
            </div>
        </div>
        {{-- Pagination --}}

        <div class="grid gap-8 lg:grid-cols-2">
            @if (count($article) == 0)
                <div class="items-center text-center">
                    <p class="text-2xl">Article Kosong....</p>
                </div>
            @else
                @foreach ($article as $item)
                    <div class="flex flex-col gap-10 border-black">
                        <x-article.article-card :titleart="$item->title" :author_first_name="$item->author->first_name" :author_last_name="$item->author->last_name" :paragraf="$item->isi"
                            :slug="$item->slug" :author_id="$item->author_id" :created_at="$item->created_at->diffForhumans()" :category="$item->category->category" />
                        {{-- diffForhumans() berfungsi untuk format tanggal --}}
                    </div>
                @endforeach
            @endif
        </div>
        <div class="py-8">
            {{ $article->links() }}
        </div>
    </div>
</x-layout>
