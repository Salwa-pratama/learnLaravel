<x-layout-blog>
    <x-slot name="title">{{ Str::limit($blog['title'], 15) }}</x-slot>
    <x-article.article-detail :category="$blog->category->category" :author="$blog->author" :isi="$blog->isi" :title="$blog->title"
        :created_at="$blog->created_at->diffForHumans()" />
    <aside aria-label="Related articles" class="py-8 lg:py-24 ">
        <div class="max-w-screen-xl px-4 mx-auto">
            <div class="flex items-center justify-between w-full p-0 h-fit  mb-10">
                <p class="text-2xl font-bold text-blue-900 ">Related articles</p>
                <p class="text-gray-600">{{ count($relatedArticles) }} articles</p>
            </div>
            <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($relatedArticles as $item)
                    <article class="max-w-xs">
                        {{-- <a href="#">
                            <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png"
                                class="mb-5 rounded-lg" alt="Image 1">
                        </a> --}}
                        <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 ">
                            <a href="/blog/{{ $item->slug }}">{{ $item->title }}</a>
                        </h2>
                        <p class="text-[12px]"> <a href="/authors/{{ $item->author_id }}">{{ $item->author->name }}
                            </a>|
                            {{ $item->created_at->diffForhumans() }}</p>
                        <p class="mb-4 text-gray-500 dark:text-gray-400">{{ $item->isi }}</p>
                        <div class="w-full flex justify-between items-center">
                            <a href="/blog/{{ $item->slug }}"
                                class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                                ReadMore
                            </a>
                            <a class="bg-orange-600/25 px-2 rounded-md">{{ $item->category->category }}</a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </aside>
</x-layout-blog>
