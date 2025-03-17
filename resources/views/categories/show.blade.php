<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold mb-6">{{ $category->name }}</h1>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @forelse ($category->products as $product)
                            <div class="bg-white p-6 rounded-lg shadow">
                                <h2 class="text-xl font-semibold mb-2">{{ $product->name }}</h2>
                                @if ($product->image)
                                    <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}"
                                        class="w-full h-48 object-cover rounded mb-4">
                                @endif
                                <p class="text-gray-600 mb-4">{{ $product->description }}</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-lg font-bold">${{ number_format($product->price, 2) }}</span>
                                    <a href="{{ route('products.show', $product) }}"
                                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        @empty
                            <div class="col-span-full text-center py-8">
                                <p class="text-gray-500">No products found in this category.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
