@extends('layouts.app')

@section('content')
<section class="max-w-7xl mx-auto px-6 py-16">

    <!-- TITLE -->
    <h1 class="text-center text-5xl md:text-7xl font-bold mb-10 font-orbitron">
        SPECTRA<span class="text-purple-500">X </span> E-SHOP
    </h1>

    <!-- SORT -->
    <div class="flex flex-wrap items-center justify-center gap-3 mb-14 text-sm" id="sort-buttons">
        <span class="text-gray-400 mr-2">SORT BY:</span>

        <button class="sort-btn px-4 py-1.5 rounded-full bg-purple-600 text-white" data-sort="popular">
            Popular
        </button>

        <button class="sort-btn px-4 py-1.5 rounded-full border border-purple-500 text-purple-400" data-sort="newest">
            Newest
        </button>

        <button class="sort-btn px-4 py-1.5 rounded-full border border-purple-500 text-purple-400" data-sort="price-asc">
            Price: Low to High
        </button>

        <button class="sort-btn px-4 py-1.5 rounded-full border border-purple-500 text-purple-400" data-sort="price-desc">
            Price: High to Low
        </button>
    </div>

    <!-- PRODUCTS -->
    <div id="products-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

        @forelse ($products as $product)
            <div class="bg-white rounded-2xl p-5 text-black group">

                <!-- IMAGE -->
                <div class="overflow-hidden rounded-xl mb-5">
                    <img
                        src="{{ $product->images->first()
                            ? asset('storage/' . $product->images->first()->path)
                            : 'https://via.placeholder.com/500' }}"
                        alt="{{ $product->name }}"
                        class="w-full h-96 object-cover group-hover:scale-105 transition"
                    />
                </div>

                <!-- TITLE + ADD BUTTON -->
                <div class="flex items-start justify-between mb-2">
                    <h2 class="font-bold tracking-wide leading-tight">
                        {{ strtoupper($product->name) }}
                    </h2>

                    <button
                        class="w-9 h-9 ml-3 rounded-full
                               bg-purple-600 text-white
                               flex items-center justify-center
                               text-xl leading-none
                               hover:scale-110 transition
                               hover:shadow-[0_0_20px_rgba(168,85,247,0.8)]
                               add-to-cart"
                        data-id="{{ $product->id }}"
                    >
                        +
                    </button>
                </div>

                <!-- PRICE -->
                <p class="text-purple-600 font-semibold">
                    €{{ number_format($product->price, 2) }}
                </p>

            </div>
        @empty
            <p class="col-span-full text-center text-neutral-400">
                No products found.
            </p>
        @endforelse

    </div>

</section>
@endsection
