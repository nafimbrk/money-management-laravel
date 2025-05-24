<x-layout title="Create Category">
    <div class="mt-16 mx-auto px-5">
        <h1 class="text-2xl font-semibold mb-5">Add Category</h1>
        <form class="max-w-sm mx-auto" action="{{ route('category.store') }}" method="POST">
            @csrf
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                @error('name')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
                <input type="name" name="name" id="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('name') is-invalid @enderror"
                    value="{{ old('name') }}" />
            </div>
            <div class="mb-5">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type</label>
                @error('type')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
                <select name="type" id="type"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('type') is-invalid @enderror" value="{{ old('name') }}">
                    <option disabled selected>Choose One</option>
                    <option value="income">Income</option>
                    <option value="expense">Expense</option>
                </select>
            </div>
            <button type="submit"
                class="text-white bg-blue-700 mt-4 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
        </form>
    </div>










</x-layout>
