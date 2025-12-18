<x-layout-author>
    <div class="p-2 flex justify-between w-full">
        <h1 class="text-xl">Article By {{ $author->name }} </h1>
        <h1 class="text-sm  line-clamp-none  bg-gray-800 text-white rounded-md px-2">{{ count($articles) }}
            Articles
        </h1>
    </div>

    <div class="flex w-full">
        <div class="flex items-center justify-between w-full ">
            <form action="{{ url('/authors/' . $author->id) }}" method="GET" class=" h-fit">
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
        </div>

        <x-search :action="url('/authors/' . $author->id)" />

    </div>
    <div class="grid gap-8 lg:grid-cols-2">
        @if (count($articles) == 0)
            <div class="items-center text-center">
                <p class="text-2xl">Article Kosong....</p>
            </div>
        @else
            @foreach ($articles as $item)
                <div class="flex flex-col gap-10 border-black">
                    <x-article.article-card :titleart="$item->title" :author="$item->author->name" :paragraf="$item->isi" :slug="$item->slug"
                        :author_id="$item->author_id" :created_at="$item->created_at->diffForHumans()" :category="$item->category->category" />
                    {{-- diffForhumans() berfungsi untuk format tanggal --}}
                </div>
            @endforeach
        @endif
    </div>

</x-layout-author>
