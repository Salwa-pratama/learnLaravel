<dialog id="{{ $id }}" class="rounded-lg shadow-lg backdrop:bg-black/50">
    <form method="{{ $method }}" action="{{ $action }}" class="p-6 text-white bg-gray-800 rounded-lg w-80">
        @csrf
        <h2 class="text-lg font-semibold">{{ $title }}</h2>
        <p class="mt-2 text-sm text-gray-400">
            {{ $subtitle }}
        </p>
        <div class="flex justify-end gap-3 mt-6">
            <button class="px-4 py-2 text-sm bg-gray-600 rounded-md hover:bg-gray-500">
                {{ $cancelText }}
            </button>
            <button type="submit" class="px-4 py-2 text-sm bg-red-600 rounded-md hover:bg-red-500">
                {{ $confirmText }}
            </button>
        </div>
    </form>
</dialog>
