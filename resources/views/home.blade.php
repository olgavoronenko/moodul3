@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section class="relative w-full flex flex-col items-center justify-center text-center min-h-[75vh] pt-16 pb-10">

    <div class="relative z-10">
        <h1 class="font-orbitron text-5xl md:text-7xl font-bold tracking-wide">
            SPECTRA<span class="text-purple-500">X</span> ESPORTS
        </h1>

        <p class="mt-4 text-lg text-gray-300 font-light">
            Illuminate the Game.
        </p>
    </div>

    <!-- HERO IMAGE -->
    <div class="relative z-10 mt-6 w-full flex justify-center">
        <img
            src="{{ asset('images/team-hero.png') }}"
            alt="Esports Team"
            class="max-w-4xl w-full mx-auto object-contain relative z-10"
        />

        <!-- Gradient Overlay -->
        <div class="absolute bottom-0 left-0 w-full h-40
                    bg-gradient-to-b from-transparent to-black
                    z-20 pointer-events-none"></div>
    </div>

</section>

<!-- TRANSITION -->
<div class="w-full h-24 bg-gradient-to-b from-transparent to-black"></div>

<!-- TEAM SECTION -->
<section class="py-20 text-center max-w-7xl mx-auto">

    <h2 class="font-orbitron text-3xl md:text-4xl font-bold mb-14 tracking-wide">
        Meet the Spectra<span class="text-purple-400">X</span> Squad
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 px-6">

        @foreach([1,2,3,4] as $i)
            <div class="group relative overflow-hidden rounded-xl 
                        border border-neutral-800 bg-neutral-900 
                        hover:-translate-y-2 transition-all duration-300
                        hover:shadow-[0_0_25px_#7c3aed70] cursor-pointer">
                <img
                    src="{{ asset('images/cards/Playercard'.$i.'.png') }}"
                    class="w-full h-full object-cover"
                    alt="Player {{ $i }}"
                >
            </div>
        @endforeach

    </div>

</section>

<!-- GAMES LOGOS -->
<section class="py-24 text-center bg-black">

    <h2 class="font-orbitron text-3xl md:text-4xl font-bold mb-16 tracking-wide">
        Games We Compete In
    </h2>

    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-12 px-6">

        <img src="{{ asset('images/games/Counter-Strike_2_logo.png') }}" class="w-56 mx-auto opacity-90 hover:scale-105 transition">
        <img src="{{ asset('images/games/Valorant_logo.png') }}" class="w-56 mx-auto opacity-90 hover:scale-105 transition">
        <img src="{{ asset('images/games/Apex_Legends_logo.png') }}" class="w-56 mx-auto opacity-90 hover:scale-105 transition">

    </div>

</section>

<!-- MATCHES -->
<section class="max-w-6xl mx-auto px-6 py-20">

    <h2 class="font-orbitron text-center text-3xl md:text-4xl font-bold mb-16">
        Games
    </h2>

    <div class="grid grid-cols-4 text-sm text-gray-400 mb-4 px-6 font-orbitron">
        <span>GAME</span>
        <span>DATE</span>
        <span class="text-center font-orbitron">SCORE</span>
        <span class="text-right font-orbitron">RESULT</span>
    </div>

    <div class="space-y-4 font-orbitron">

        @php
            $matches = [
                ['date'=>'20.01.2025','score'=>'3-2','result'=>'Win','color'=>'green'],
                ['date'=>'10.01.2025','score'=>'2-3','result'=>'Lose','color'=>'red'],
                ['date'=>'09.01.2025','score'=>'2-4','result'=>'Lose','color'=>'red'],
            ];
        @endphp

        @foreach($matches as $match)
            <div class="grid grid-cols-4 items-center px-6 py-4 rounded-2xl
                        bg-gradient-to-r from-zinc-900 to-zinc-800">
                <img src="{{ asset('images/games/Counter-Strike_2_logo.png') }}" class="h-8">

                <span class="text-purple-500">{{ $match['date'] }}</span>

                <span class="text-center font-bold">
                    {!! str_replace('-', '<span class="mx-1">-</span>', $match['score']) !!}
                </span>

                <span class="text-right text-{{ $match['color'] }}-500 font-semibold">
                    {{ $match['result'] }}
                </span>
            </div>
        @endforeach

    </div>

</section>

<!-- MERCH -->
<section class="max-w-7xl mx-auto px-6 py-24">

    <h2 class="font-orbitron text-center text-3xl md:text-4xl font-bold mb-16">
        Our Merch
    </h2>

    <div class="relative">

        <div id="merch-viewport" class="overflow-x-auto scroll-smooth snap-x snap-mandatory no-scrollbar">
            <div class="flex gap-16 px-10">

                @foreach(['Hoodie','T-Shirt','Bottle','Cap','Mousepad','Backpack'] as $item)
                    <div class="shrink-0 w-[260px] snap-center flex justify-center">
                        <img src="{{ asset('images/shop/'.$item.'_no_BG.png') }}" class="h-80 object-contain">
                    </div>
                @endforeach

            </div>
        </div>

        <button id="merch-prev"
                class="absolute left-2 top-1/2 -translate-y-1/2
                       w-10 h-10 rounded-full bg-zinc-900/80
                       hover:bg-purple-600 transition">
            ‹
        </button>

        <button id="merch-next"
                class="absolute right-2 top-1/2 -translate-y-1/2
                       w-10 h-10 rounded-full bg-zinc-900/80
                       hover:bg-purple-600 transition">
            ›
        </button>

    </div>

    <div class="flex justify-center mt-16 font-orbitron">
        <a href="{{ route('shop') }}"
           class="px-10 py-3 rounded-full bg-purple-600
                  hover:shadow-[0_0_30px_rgba(168,85,247,0.8)]
                  transition">
            Go to Shop
        </a>
    </div>

</section>

@endsection
