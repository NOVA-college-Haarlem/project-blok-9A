<x-app-layout>
    <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                <div class="max-w-md mx-auto">
                    <div class="flex items-center space-x-5">
                        <div class="block pl-2 font-semibold text-xl text-gray-700">
                            <h2 class="leading-relaxed">Create New Product</h2>
                        </div>
                    </div>

                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data"
                        class="divide-y divide-gray-200">
                        @csrf
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                            <div class="flex flex-col">
                                <label class="leading-loose">Product Name</label>
                                <input type="text" name="name"
                                    class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none"
                                    placeholder="Product name" value="{{ old('name') }}">
                            </div>

                            <div class="flex flex-col">
                                <label class="leading-loose">Price (in cents)</label>
                                <input type="number" name="price" step="10"
                                    class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none"
                                    placeholder="price in cents" value="{{ old('price') }}">
                            </div>

                            <div class="flex flex-col">
                                <label class="leading-loose">Description</label>
                                <textarea name="description" rows="4"
                                    class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none"
                                    placeholder="Product description">{{ old('description') }}</textarea>
                            </div>

                            <div class="flex flex-col">
                                <label class="leading-loose">Product Image</label>
                                <input type="file" name="image"
                                    class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none">
                            </div>

                            <div class="flex flex-col">
                                <label class="leading-loose">Stock Quantity</label>
                                <input type="number" name="quantity"
                                    class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none"
                                    placeholder="0" value="{{ old('quantity') }}">
                            </div>
                        </div>

                        <div class="pt-4 flex items-center space-x-4">
                            <a href="{{ route('products.index') }}"
                                class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none">
                                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg> Cancel
                            </a>
                            <button type="submit"
                                class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none hover:bg-blue-600 transition-colors">Create
                                Product</button>
                        </div>
                    </form>
                    @if ($errors->any())
                        <div class="mt-4">
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                                role="alert">
                                <strong class="font-bold">Error!</strong>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
