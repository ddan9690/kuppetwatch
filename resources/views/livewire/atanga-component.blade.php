@section('title', 'Atanga Kennedy — Fearless for Teachers, Tireless for Justice | KUPPET Homa Bay 2026–2031')


<div class="bg-gray-50">

    <!-- Hero Section -->
    <section class="relative py-20 bg-kuppet-green-light overflow-hidden">
        <div class="container mx-auto flex flex-col md:flex-row items-center px-6 md:px-12">
            <!-- Vector Image -->
            <div class="md:w-1/2 mb-8 md:mb-0" data-aos="fade-right">
                <img src="{{ asset('images/atanga/atanga-vector.png') }}" 
                     alt="Atanga Vector" 
                     class="w-full max-w-md mx-auto drop-shadow-lg">
            </div>
            <!-- Hero Text -->
            <div class="md:w-1/2 text-center md:text-left" data-aos="fade-left">
                <h1 class="text-5xl md:text-6xl font-extrabold text-kuppet-green-dark uppercase leading-tight">
                    ATANGA KENNEDY
                </h1>
                <h2 class="text-2xl md:text-3xl font-semibold text-red-600 mt-2">
                    Assistant Executive Secretary
                </h2>
                <p class="mt-4 text-lg md:text-xl text-gray-700">
                    KUPPET Homa Bay Branch 2026–2031
                </p>
                <a href="#vision" 
                   class="inline-block mt-8 bg-kuppet-green-dark text-white px-8 py-3 rounded-full font-semibold shadow-lg hover:bg-kuppet-yellow hover:text-kuppet-green-dark transition">
                    Discover Atanga’s Vision
                </a>
            </div>
        </div>
    </section>

    <!-- Interactive Vision Cards -->
    <section id="vision" class="py-20 bg-white">
        <div class="container mx-auto px-6 md:px-12">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-kuppet-green-dark mb-12" data-aos="fade-up">
                Atanga’s Core Commitments
            </h2>
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['icon' => 'bxs-megaphone', 'title' => 'Strong Advocacy', 'content' => 'Relentlessly championing teachers’ voices at all levels.'],
                    ['icon' => 'bxs-briefcase', 'title' => 'Fair Working Terms', 'content' => 'Fighting for promotions, security, and better conditions.'],
                    ['icon' => 'bxs-shield-alt-2', 'title' => 'Teacher Protection', 'content' => 'Defending teachers against intimidation and unfairness.'],
                    ['icon' => 'bxs-graduation', 'title' => 'Growth & Development', 'content' => 'Opening more pathways for training and advancement.'],
                    ['icon' => 'bxs-group', 'title' => 'Unity & Transparency', 'content' => 'Building trust through openness and integrity.'],
                    ['icon' => 'bxs-heart', 'title' => 'Well-being First', 'content' => 'Prioritizing teacher mental health and welfare.']
                ] as $index => $item)
                <div 
                    x-data="{ hover: false }"
                    @mouseenter="hover = true" 
                    @mouseleave="hover = false"
                    class="p-8 bg-gray-100 rounded-2xl shadow-md text-center transition transform hover:-translate-y-2 hover:shadow-xl"
                    data-aos="zoom-in"
                    data-aos-delay="{{ $index * 100 }}">
                    <i class="bx {{ $item['icon'] }} text-5xl text-kuppet-yellow mb-4"></i>
                    <h3 class="text-xl font-bold text-kuppet-green-dark mb-2">{{ $item['title'] }}</h3>
                    <p x-show="hover" x-transition class="text-gray-600">{{ $item['content'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Portrait Quote -->
    <section class="relative py-20 bg-kuppet-yellow">
        <div class="container mx-auto text-center px-6" data-aos="fade-up">
            <img src="{{ asset('images/atanga/atanga-potrait.png') }}" 
                 alt="Atanga Portrait" 
                 class="mx-auto rounded-2xl shadow-lg w-56 mb-6">
            <blockquote class="text-2xl md:text-3xl font-semibold text-kuppet-green-dark">
                “Teachers are the backbone of society. My mission is to ensure every teacher stands tall with dignity and pride.”
            </blockquote>
        </div>
    </section>

    <!-- Fight Section -->
    <section class="relative h-[60vh] bg-kuppet-green-dark text-red-600 flex items-center justify-center">
        <!-- Background Image -->
        <img src="{{ asset('images/atanga/atanga-fist-thump.png') }}" 
             alt="Atanga Fight" 
             class="absolute inset-0 w-full h-full object-cover object-center">
    
        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/60 to-kuppet-green-dark/80"></div>
    
        <!-- Text Content -->
        <div class="relative z-10 text-center px-6" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-extrabold uppercase mb-4 drop-shadow-lg">
                The Fight is On
            </h2>
            <p class="text-lg md:text-xl max-w-2xl mx-auto leading-relaxed drop-shadow-md">
                Tireless. Fearless. Relentless. For teachers, with teachers.  
                Sacrifice is our fuel, victory is our goal.
            </p>
        </div>
    </section>
    

    <!-- Closing Take -->
    <section class="py-20 bg-gray-100 text-center">
        <div class="container mx-auto px-6 md:px-12" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-kuppet-green-dark mb-8">
                Atanga’s Take
            </h2>
            <img src="{{ asset('images/atanga/atanga-card.png') }}" 
                 alt="Atanga Card" 
                 class="mx-auto max-w-sm rounded-lg shadow-lg mb-6">
            <p class="text-lg text-gray-700 max-w-2xl mx-auto mb-8">
                Atanga stands committed to be the uncompromising defender of teachers’ rights in Homa Bay.  
                His vision is clear, his resolve unwavering.
            </p>
            <a href="{{ route('atanga.component') }}" 
               class="inline-block bg-kuppet-green-dark text-white px-8 py-3 rounded-full font-semibold shadow-lg hover:bg-kuppet-yellow hover:text-kuppet-green-dark transition">
                Join the Movement
            </a>
        </div>
    </section>
</div>
