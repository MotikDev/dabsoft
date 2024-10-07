<x-guest-layout>
    <div class="container ml-2 sm:ml-16 p-4 mt-8 mb-16 max-w-4xl">
        <h1 class="mb-8 h1 text-3xl font-bold text-pry">{{ ucfirst($type) }}</h1>
        <div class="grid grid-cols-1 gap-6">
            @foreach ($category as $product)
                <a href="{{route('show-property', ['property' => $product->id, 'title' => $product->slug_url])}}">
                    <div class="flex flex-col sm:flex-row bg-white shadow-lg rounded-lg overflow-hidden">
                        <div class="sm:w-1/3">
                            <img src="{{ asset($product->photos[0]) }}" alt="{{ $product->title }}" class="object-cover h-full w-full">
                        </div>
    
                        <div class="p-4 sm:w-2/3 flex flex-col">
                            <h2 class="text-2xl font-bold text-gray-800">{{ $product->title }}</h2>
                            <p class="text-gray-600 mt-2">{{ $product->location }}</p>
                            <p class="text-gray-700 mt-2 font-bold">₦{{ number_format($product->amount, 0, '.', ',') }}</p>
                            <p class="text-gray-600 mt-2">{{ $product->square_meter }} sqm</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</x-guest-layout>