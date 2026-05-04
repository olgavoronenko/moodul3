@extends('layouts.app')

@section('content')
<section class="max-w-7xl mx-auto px-6 py-16 grid grid-cols-1 lg:grid-cols-2 gap-16">

    <!-- IMAGE -->
    <div class="flex justify-center">
        <div class="relative rounded-2xl overflow-hidden bg-gradient-to-br from-purple-600/40 to-black p-6">
            <img
                src="{{ $product->images->first()
                    ? asset('storage/' . $product->images->first()->path)
                    : 'https://via.placeholder.com/500' }}"
                alt="{{ $product->name }}"
                class="w-full max-w-md drop-shadow-[0_0_40px_rgba(168,85,247,0.6)]" />
        </div>
    </div>

    <!-- CONTENT -->
    <div class="flex flex-col justify-center gap-6">

        <h1 class="text-4xl xl:text-5xl font-bold tracking-widest font-orbitron">
            {{ strtoupper($product->name) }}
        </h1>

        <!-- PRICE -->
        <div class="flex items-center gap-4 text-xl">
            <span class="text-purple-500 font-semibold">
                €{{ number_format($product->price, 2) }}
            </span>

        </div>

        <!-- COLORS -->
        @if ($product->colors->count())
        <div class="flex items-center gap-4">
            <span class="text-sm text-gray-400">Select color:</span>

            @foreach ($product->colors as $color)
            <button
                class="w-6 h-6 rounded-full border ring-2 ring-purple-500"
                style="background-color: {{ $color->hex ?? '#000' }}"
                title="{{ $color->name }}"></button>
            @endforeach
        </div>
        @endif

        <!-- SIZES -->
        @if ($product->sizes->count())
        <div class="flex items-center gap-4">
            <span class="text-sm text-gray-400">Sizes:</span>

            <div class="flex gap-2">
                @foreach ($product->sizes as $size)
                <button
                    class="px-4 py-2 border border-gray-600 rounded-lg
                               hover:border-purple-500 hover:text-purple-500 transition">
                    {{ $size->name }}
                </button>
                @endforeach
            </div>
        </div>
        @endif

        <!-- DESCRIPTION -->
        <p class="text-gray-400 max-w-md leading-relaxed">
            {{ $product->description }}
        </p>

        <!-- ACTIONS -->
        <div class="flex gap-4 mt-4">
            <button
                class="px-8 py-3 border border-white rounded-xl hover:bg-white hover:text-black transition">
                Buy Now
            </button>

            <button
                class="px-8 py-3 bg-purple-500 rounded-xl hover:bg-purple-600 transition">
                Add to Cart
            </button>
        </div>

        <!-- INFO -->
        <div class="grid grid-cols-3 gap-4 mt-8 text-sm text-center">
            <div class="bg-white/5 p-4 rounded-xl">
                Free Delivery<br><span class="text-purple-400">1–2 day</span>
            </div>
            <div class="bg-white/5 p-4 rounded-xl">
                In Stock<br><span class="text-purple-400">Today</span>
            </div>
            <div class="bg-white/5 p-4 rounded-xl">
                Guaranteed<br><span class="text-purple-400">1 year</span>
            </div>
        </div>

    </div>
</section>
@endsection