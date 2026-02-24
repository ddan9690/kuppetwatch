<div class="bg-gray-900 min-h-screen font-sans text-white">

    <!-- Hero Section -->
    <header class="py-20 text-center px-6 bg-gradient-to-b from-gray-900 via-gray-800 to-gray-900">
        <div class="max-w-4xl mx-auto">
            <div class="inline-block bg-yellow-500/20 text-yellow-400 px-4 py-1 rounded-full text-sm font-medium mb-4 uppercase tracking-wider">
               Homabay KUPPET ElectionS 2026
            </div>
            <h1 class="text-6xl md:text-7xl font-extrabold text-yellow-400 drop-shadow-lg mb-4">
                TEAM CHANGE
            </h1>
            <p class="text-gray-300 text-lg mb-1">Agents of Positive Change</p>
            <p class="text-gray-400 text-sm">Meet our team and learn why they represent change.</p>
        </div>
    </header>

    <!-- Candidate Tiers -->
    <main class="max-w-7xl mx-auto px-4 py-16 space-y-16">

        <!-- Executive Leadership -->
        <section class="space-y-6 text-center">
            <h2 class="text-yellow-400 text-2xl font-semibold tracking-wider flex justify-center items-center gap-2">
                <span>★</span> Executive Leadership
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 justify-center">
                @php
                    $executives = [
                        ['name'=>'Peter Oduor Otieno','pos'=>'Chairman','photo'=>'peter.jpg'],
                        ['name'=>'Tom Thomas Otieno','pos'=>'Executive Secretary','photo'=>'tom.jpg'],
                        ['name'=>'Tembo Gordon Mwadime','pos'=>'Treasurer','photo'=>'tembo.jpg']
                    ];
                @endphp
                @foreach($executives as $p)
                    <div class="bg-gray-800 rounded-2xl shadow-xl overflow-hidden transform hover:scale-105 transition-transform duration-300">
                        <img class="w-full h-64 object-cover" src="{{ asset('images/team-change/' . $p['photo']) }}" alt="{{ $p['name'] }}">
                        <div class="p-4 bg-gray-900/80">
                            <div class="text-xs uppercase tracking-wide text-yellow-400 mb-1">{{ $p['pos'] }}</div>
                            <div class="font-semibold text-lg">{{ $p['name'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Assistant Leadership -->
        <section class="space-y-6 text-center">
            <h2 class="text-green-400 text-2xl font-semibold tracking-wider flex justify-center items-center gap-2">
                <span>◈</span> Assistant Leadership
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 justify-center">
                @php
                    $assistants = [
                        ['name'=>'Kevince Magollo','pos'=>'Vice Chairman','photo'=>'magolo.jpg'],
                        ['name'=>'Kennedy Ochieng Atanga','pos'=>'Assistant Executive Secretary','photo'=>'atanga.jpg']
                    ];
                @endphp
                @foreach($assistants as $p)
                    <div class="bg-gray-800 rounded-2xl shadow-xl overflow-hidden transform hover:scale-105 transition-transform duration-300">
                        <img class="w-full h-64 object-cover" src="{{ asset('images/team-change/' . $p['photo']) }}" alt="{{ $p['name'] }}">
                        <div class="p-4 bg-gray-900/80">
                            <div class="text-xs uppercase tracking-wide text-green-400 mb-1">{{ $p['pos'] }}</div>
                            <div class="font-semibold text-lg">{{ $p['name'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Secretariat -->
        <section class="space-y-6 text-center">
            <h2 class="text-yellow-400 text-2xl font-semibold tracking-wider flex justify-center items-center gap-2">
                <span>◉</span> Secretariat
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 justify-center">
                @php
                    $secretariat = [
                        ['name'=>'Omondi Churchill Aroko','pos'=>'Organising Secretary','photo'=>'churchill.jpg'],
                        ['name'=>'Lukas Okinda','pos'=>'Secretary Tertiary','photo'=>'okinda.jpg'],
                        ['name'=>'Collince Onuonga','pos'=>'Secretary Secondary','photo'=>'collins.png'],
                        ['name'=>'Philip Otieno Ogwe','pos'=>'Secretary Junior','photo'=>'philip.jpg']
                    ];
                @endphp
                @foreach($secretariat as $p)
                    <div class="bg-gray-800 rounded-2xl shadow-xl overflow-hidden transform hover:scale-105 transition-transform duration-300">
                        <img class="w-full h-64 object-cover" src="{{ asset('images/team-change/' . $p['photo']) }}" alt="{{ $p['name'] }}">
                        <div class="p-4 bg-gray-900/80">
                            <div class="text-xs uppercase tracking-wide text-yellow-400 mb-1">{{ $p['pos'] }}</div>
                            <div class="font-semibold text-lg">{{ $p['name'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Gender Docket -->
        <section class="space-y-6 text-center">
            <h2 class="text-yellow-300 text-2xl font-semibold tracking-wider flex justify-center items-center gap-2">
                <span>♀</span> Gender Docket
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 justify-center">
                @php
                    $gender = [
                        ['name'=>'Rose Amondi Okeyo','pos'=>'Secretary Gender','photo'=>'rose.jpg'],
                        ['name'=>'Quinter Nyakiye','pos'=>'1st Assistant Secretary Gender','photo'=>'nyakiye.jpg'],
                        ['name'=>'Eunice Aching Ouru','pos'=>'2nd Assistant Secretary Gender','photo'=>'eunice.jpg']
                    ];
                @endphp
                @foreach($gender as $p)
                    <div class="bg-gray-800 rounded-2xl shadow-xl overflow-hidden transform hover:scale-105 transition-transform duration-300">
                        <img class="w-full h-64 object-cover" src="{{ asset('images/team-change/' . $p['photo']) }}" alt="{{ $p['name'] }}">
                        <div class="p-4 bg-gray-900/80">
                            <div class="text-xs uppercase tracking-wide text-yellow-300 mb-1">{{ $p['pos'] }}</div>
                            <div class="font-semibold text-lg">{{ $p['name'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="mt-16 text-center text-gray-400 text-xs px-4 py-8">
        © 2026 Team Change KUPPET Homabay Branch. All rights reserved.
    </footer>

</div>