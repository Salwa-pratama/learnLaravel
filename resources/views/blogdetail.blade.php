<x-layout-blog>
    <x-slot name="title">{{ $blog['title'] }}</x-slot>
    <x-article.article-detail :date="$blog['date']" :isi="$blog['isi']" />
</x-layout-blog>
    