<x-app-layout>
    <div class="max-w-2xl mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Create a New Category</h1>
        <form action="{{ route('categories.store') }}" method="POST"
            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Category Name
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="name" type="text" placeholder="Enter category name" name="name" required>
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Create Category
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
