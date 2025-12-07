<x-layout-blog>
    <x-slot name="title">{{ Str::limit($blog['title'], 15) }}</x-slot>
    <x-article.article-detail :author="$blog->author" :isi="$blog->isi" :title="$blog->title" :created_at="$blog->created_at->diffForHumans()" />
</x-layout-blog>
