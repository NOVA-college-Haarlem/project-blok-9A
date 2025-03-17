<x-app-layout>
    <!-- Product Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Product Card -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img class="w-full h-48 object-cover" src="https://via.placeholder.com/150" alt="Product Image">
            <div class="p-4">
                <h2 class="text-lg font-bold text-gray-900">Product Name</h2>
                <p class="mt-2 text-gray-600">$Price</p>
                <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Add to Cart</button>
            </div>
        </div>
        <!-- Repeat Product Card as needed -->
    </div>
</x-app-layout>
