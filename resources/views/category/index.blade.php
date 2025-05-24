<x-layout title="Category">

    <div class="mx-5">
        <div class="mt-10">
            @if (session('success'))
        <div id="alert-3"
            class="flex items-center p-4 mb-4 max-w-sm mx-auto mt-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
            role="alert">
            <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
                {{ session('success') }}
            </div>
            <button type="button"
                class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
        @endif
        <h1 class="font-semibold text-2xl">Kategori</h1>
    </div>
    <div class="mt-5">
        <dl class="max-w-md text-gray-900 dark:text-white">
            @forelse ($categories as $category)
            <div class="flex flex-col pb-3 border-0">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">{{ $category->name }}</dt>
                <dd class="text-lg font-semibold">{{ $category->type }}</dd>
            </div>
            @empty
            <h1 class="text-2xl">Tidak ada data</h1>
            @endforelse
        </dl>
    </div>

    <div class="fixed bottom-4 right-8 text-white bg-blue-600 p-4 rounded-full shadow-lg mb-8">
        <a href="{{ route('category.create') }}"><i class="fa-solid fa-plus "></i></a>
    </div>
    </div>

</x-layout>
