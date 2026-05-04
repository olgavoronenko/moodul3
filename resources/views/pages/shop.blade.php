@extends('layouts.app')

@section('content')
<section class="max-w-7xl mx-auto px-6 py-16">

    <!-- TITLE -->
    <h1 class="text-center text-5xl md:text-7xl font-bold mb-10 font-orbitron">
        SPECTRA<span class="text-purple-500">X </span> E-SHOP
    </h1>

    <!-- SORT -->
    <div class="flex flex-wrap items-center justify-center gap-3 mb-14 text-sm">
        <span class="text-gray-400 mr-2">SORT BY:</span>

        <a href="{{ route('shop', ['sort' => 'popular']) }}"
            class="sort-btn {{ $sort === 'popular' ? 'bg-purple-600 text-white' : 'border border-purple-500 text-purple-400' }}">
            Popular
        </a>

        <a href="{{ route('shop', ['sort' => 'newest']) }}"
            class="sort-btn {{ $sort === 'newest' ? 'bg-purple-600 text-white' : 'border border-purple-500 text-purple-400' }}">
            Newest
        </a>

        <a href="{{ route('shop', ['sort' => 'price-asc']) }}"
            class="sort-btn {{ $sort === 'price-asc' ? 'bg-purple-600 text-white' : 'border border-purple-500 text-purple-400' }}">
            Price: Low to High
        </a>

        <a href="{{ route('shop', ['sort' => 'price-desc']) }}"
            class="sort-btn {{ $sort === 'price-desc' ? 'bg-purple-600 text-white' : 'border border-purple-500 text-purple-400' }}">
            Price: High to Low
        </a>
    </div>


    <!-- PRODUCTS -->
    <div id="products-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

        @forelse ($products as $product)
        <a href="{{ route('products.show', $product) }}"
            class="block bg-white rounded-2xl p-5 text-black group
          hover:-translate-y-1 transition
          hover:shadow-[0_20px_40px_rgba(0,0,0,0.3)]">

            <!-- IMAGE -->
            <div class="overflow-hidden rounded-xl mb-5">
                <img
                    src="{{ $product->images->first()
                            ? asset('storage/' . $product->images->first()->path)
                            : 'https://via.placeholder.com/500' }}"
                    alt="{{ $product->name }}"
                    class="w-full h-96 object-cover group-hover:scale-105 transition" />
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
                    data-id="{{ $product->id }}">
                    +
                </button>
            </div>

            <!-- PRICE -->
            <p class="text-purple-600 font-semibold">
                €{{ number_format($product->price, 2) }}
            </p>

        </a>
        @empty
        <p class="col-span-full text-center text-neutral-400">
            No products found.
        </p>
        @endforelse

    </div>

</section>
@endsection