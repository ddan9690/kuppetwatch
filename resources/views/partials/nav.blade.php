<nav class="bg-kuppet-green text-kuppet-white shadow-md" x-data="{ open: false }">
    <div class="container mx-auto flex justify-between items-center px-4 py-4">
        {{-- Logo --}}
        <a href="/">
            <img src="{{ asset('images/kuppetwatch.png') }}" alt="KUPPET Logo" class="h-10">
        </a>

        {{-- Desktop Navigation Links --}}
        <ul class="hidden md:flex space-x-6 font-semibold">
            <li><a href="#updates" class="hover:text-kuppet-yellow transition">Updates</a></li>
            <li><a href="#about" class="hover:text-kuppet-yellow transition">About</a></li>
            <li><a href="#contact" class="hover:text-kuppet-yellow transition">Contact</a></li>
        </ul>

        {{-- Mobile Hamburger --}}
        <div class="md:hidden">
            <button @click="open = !open" class="focus:outline-none">
                <i :class="open ? 'bx bx-x text-3xl' : 'bx bx-menu text-3xl'"></i>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div x-show="open" x-transition class="md:hidden bg-kuppet-green-light text-kuppet-text">
        <ul class="flex flex-col space-y-3 p-4 font-semibold">
            <li><a href="#updates" class="hover:text-kuppet-yellow transition">Updates</a></li>
            <li><a href="#about" class="hover:text-kuppet-yellow transition">About</a></li>
            <li><a href="#contact" class="hover:text-kuppet-yellow transition">Contact</a></li>
        </ul>
    </div>
</nav>
