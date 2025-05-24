<x-layout title="Category">

    <div class="mt-10">
        <h1 class="font-semibold text-2xl">Dashboard</h1>
    </div>
    <div class="mt-5">
        <dl class="max-w-md text-gray-900 dark:text-white">
            <div class="flex flex-col pb-3 border-0">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">{{ $income }}</dt>
                <dd class="text-lg font-semibold">Income</dd>
            </div>
        </dl>
    </div>
    <div class="mt-5">
        <dl class="max-w-md text-gray-900 dark:text-white">
            <div class="flex flex-col pb-3 border-0">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">{{ $expense }}</dt>
                <dd class="text-lg font-semibold">expense</dd>
            </div>
        </dl>
    </div>
    <div class="mt-5">
        <dl class="max-w-md text-gray-900 dark:text-white">
            <div class="flex flex-col pb-3 border-0">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">{{ $saldo }}</dt>
                <dd class="text-lg font-semibold">Sisa Saldo</dd>
            </div>
        </dl>
    </div>

    <div class="fixed bottom-4 right-4 text-white bg-blue-600 p-4 rounded-full shadow-lg">
        <i class="fa-solid fa-plus "></i>
    </div>

</x-layout>
