@extends('layouts.app')

@section('content')
<section class="max-w-7xl mx-auto px-6 py-24 grid grid-cols-1 lg:grid-cols-2 gap-20">

  <!-- LEFT INFO -->
  <div>
    <h1 class="font-orbitron text-4xl md:text-5xl font-bold leading-tight mb-10">

      Let's discuss<br />
      on something <span class="text-purple-500">cool</span><br />
      together
    </h1>

    <div class="space-y-6 text-gray-300 font-orbitron">
      <div class="flex items-center gap-4">
        <span class="material-symbols-outlined text-purple-500">mail</span>
        <span>SpectraX@gmail.com</span>
      </div>

      <div class="flex items-center gap-4">
        <span class="material-symbols-outlined text-purple-500">call</span>
        <span>+123 456 789</span>
      </div>

      <div class="flex items-center gap-4">
        <span class="material-symbols-outlined text-purple-500">location_on</span>
        <span>123 Street 456 House</span>
      </div>
    </div>
  </div>

  <!-- FORM -->
  <form
    method="POST"
    action="{{ route('contact.store') }}"
    class="space-y-10"
>
    @csrf


    @if(session('success'))
      <div class="text-green-400 text-sm ">
        {{ session('success') }}
      </div>
    @endif

    <!-- NAME -->
    <div>
      <label class="block text-sm text-gray-400 mb-2">Your name</label>
      <input
        name="name"
        value="{{ old('name') }}"
        required
        class="w-full bg-transparent border-b border-white
               text-white focus:outline-none
               focus:border-purple-500 focus:text-purple-400
               transition py-2"
      />
      @error('name')
        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>

    <!-- EMAIL -->
    <div>
      <label class="block text-sm text-gray-400 mb-2">Your email</label>
      <input
        type="email"
        name="email"
        value="{{ old('email') }}"
        required
        class="w-full bg-transparent border-b border-white
               text-white focus:outline-none
               focus:border-purple-500 focus:text-purple-400
               transition py-2"
      />
      @error('email')
        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>

    <!-- MESSAGE -->
    <div>
      <label class="block text-sm text-gray-400 mb-2">Your message</label>
      <textarea
        name="message"
        rows="3"
        required
        class="w-full bg-transparent border-b border-white
               text-white focus:outline-none
               focus:border-purple-500 focus:text-purple-400
               transition py-2 resize-none"
      >{{ old('message') }}</textarea>
      @error('message')
        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>

    <!-- BUTTON -->
    <div class="pt-6">
      <button
        type="submit"
        class="flex items-center gap-3 bg-purple-500 hover:bg-purple-600
               transition px-8 py-3 rounded-xl ml-auto font-orbitron"
      >
        <span class="material-symbols-outlined ">send</span>
        Send Message
      </button>
    </div>
  </form>

</section>
@endsection
