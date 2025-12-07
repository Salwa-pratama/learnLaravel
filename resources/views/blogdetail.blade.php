<x-layout-blog>
    <x-slot name="title">{{ $blog['title'] }}</x-slot>
    <x-article.article-detail :date="$blog['author_and_date']" :isi="$blog['isi']" />
</x-layout-blog>
