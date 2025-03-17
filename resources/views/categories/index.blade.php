<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4">Categories</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($categories as $category)
                <a href="{{ route('categories.show', $category) }}" class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img class="w-full h-48 object-cover"
                        src="@if ($category->image_url) {{ $category->image_url }} @else {{ asset('storage/' . $category->image_local) }} @endif"
                        alt="{{ $category->name }}">
                    <div class="p-4">
                        <h2 class="text-lg font-bold text-gray-900">{{ $category->name }}</h2>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    @if (session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
    @endif
</x-app-layout>
