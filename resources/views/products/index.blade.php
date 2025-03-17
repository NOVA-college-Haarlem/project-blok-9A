<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="py-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-semibold text-gray-800">Products</h2>
                        <a href="{{ route('products.create') }}"
                            class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Add New Product</a>
                    </div>

                    @if (session('success'))
                        <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @forelse ($products as $product)
                            <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-200">
                                <div class="p-4">
                                    <div class="flex justify-between items-start">
                                        <h3 class="text-lg font-semibold text-gray-900">{{ $product->name }}</h3>
                                        <span
                                            class="text-lg font-bold text-green-600">${{ number_format($product->price / 100, 2) }}</span>
                                    </div>
                                    <picture>
                                        <source srcset="{{ asset('storage/images/' . $product->image) }}">
                                        <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}"
                                            class="w-full h-48 object-cover">
                                    </picture>

                                    <p class="mt-2 text-gray-600">{{ Str::limit($product->description, 100) }}</p>

                                    <div class="mt-4 text-sm text-gray-500">
                                        ID: {{ $product->id }}
                                    </div>


                                </div>
                            </div>
                        @empty
                            <div class="col-span-full text-center py-8 text-gray-500">
                                No products found.
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
