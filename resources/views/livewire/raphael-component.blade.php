<div class="relative h-screen flex items-center justify-center bg-kuppet-white overflow-hidden">
    {{-- Background Image --}}
    <div class="absolute inset-0">
        <img src="{{ asset('images/raphael/ago-raphael-2.jpg') }}" alt="Raphael" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    </div>

    {{-- Hero Content --}}
    <div class="relative text-center px-4 sm:px-6 lg:px-8">
        {{-- KUPPET Logo --}}
        <img src="{{ asset('images/raphael/kuppet-logo.jpeg') }}" alt="KUPPET Logo" class="mx-auto mb-6 w-24 sm:w-32 opacity-90">

        {{-- Hero Text --}}
        <h1 class="text-4xl md:text-5xl font-bold text-kuppet-white mb-4 leading-tight">
            <span class="block">Raphael for</span>
            <span class="block text-kuppet-gold">Vice Chair</span>
        </h1>
        <p class="text-lg md:text-xl text-kuppet-white max-w-3xl mx-auto">
            Committed to improving teacher welfare, promoting unity, and strengthening KUPPET Homa Bay branch for 2026-2031.
        </p>

        {{-- Call to Action --}}
        <a href="#pledges" class="mt-8 inline-block px-8 py-3 bg-kuppet-gold text-kuppet-green font-semibold rounded-full shadow-lg hover:bg-yellow-400 transition">
            Get Involved
        </a>
    </div>
</div>
