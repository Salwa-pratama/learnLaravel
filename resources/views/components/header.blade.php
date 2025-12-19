@php
    $hasTitle = trim($slot);
@endphp

<header
    class="relative p-0 {{ $hasTitle ? 'bg-gray-400/70' : 'bg-gray-800' }} after:pointer-events-none after:absolute after:inset-x-0 after:inset-y-0 after:border-y after:border-white/10">
    <div class="flex items-center justify-between px-2 py-2 mx-auto max-w-7xl sm:px-6 lg:px-8 ">
        <!-- Ini Header -->

        {{-- KIRI --}}
        @if ($hasTitle)
            <h1 class="text-3xl font-bold tracking-tight text-gray-800">
                {{ $slot }}
            </h1>
        @else
            <button onclick="history.back() "
                class="flex items-center gap-2 text-sm font-medium text-white hover:text-blue-600">
                <i data-feather="arrow-left"></i> Back
            </button>
        @endif

        @if ($hasTitle === 'Blogs')
            <x-search :action="route('blogs')" />
        @else
            <a href="#" class="p-2 text-white rounded-lg ">{{ auth()->user()->name ?? 'Guest' }}</a>
        @endif
    </div>
</header>
