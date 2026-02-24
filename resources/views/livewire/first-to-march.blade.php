@section('title', '1st March Confirmed | KUPPET Homa Bay Elections')

<div class="bg-gray-50">

    <!-- HERO -->
    <section class="relative overflow-hidden">
        <!-- Dark overlay to make text readable -->
        <div class="absolute inset-0 bg-gradient-to-br from-black/70 via-black/70 to-kuppet-green-dark/80"></div>

        <div class="relative container mx-auto px-6 md:px-12 py-32 text-center">
            <h1
                class="text-4xl md:text-6xl font-extrabold leading-tight tracking-tight text-kuppet-yellow drop-shadow-xl mb-6">
                Finally, We Have a Date
            </h1>

            <div
                class="inline-block bg-kuppet-green-dark text-kuppet-yellow px-8 py-3 rounded-full font-bold text-lg mb-6 shadow-xl">
                1st March 2026
            </div>

            <p class="max-w-2xl mx-auto text-lg md:text-xl text-white leading-relaxed drop-shadow">
                The KUPPET Homa Bay Branch elections are back on!
                <span class="text-kuppet-yellow font-semibold">1st March</span> marks the day to embrace change,
                leadership, and a stronger future for our teachers.
            </p>
        </div>
    </section>

    <!-- SECTION 1 -->
    <section class="py-24">
        <div class="container mx-auto px-6 md:px-12 grid md:grid-cols-2 gap-16 items-center">

            <div class="relative group overflow-hidden rounded-3xl shadow-2xl">
                <div
                    class="absolute -inset-2 bg-gradient-to-r from-kuppet-green-dark to-kuppet-yellow rounded-3xl blur opacity-20 group-hover:opacity-40 transition duration-500">
                </div>
                <img src="{{ asset('images/nairobi/1.jpg') }}"
                    class="relative w-full h-full object-cover rounded-3xl transform hover:scale-105 transition duration-500">
            </div>

            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Postponed — Not Stopped
                </h2>
                <p class="text-gray-700 text-lg md:text-xl leading-relaxed mb-4">
                    Team Change never stops working for you. Even when events were paused, our commitment to teachers
                    never wavered.
                </p>
                <p class="text-gray-700 text-lg md:text-xl leading-relaxed">
                    1st March is the moment to take action, embrace leadership, and shape a brighter Homa Bay together.
                </p>
            </div>

        </div>
    </section>

    <!-- SECTION 2 (PROMOTIONAL) -->
    <section class="py-24 bg-gradient-to-r from-kuppet-green-dark/5 to-kuppet-yellow/5">
        <div class="container mx-auto px-6 md:px-12 grid md:grid-cols-2 gap-16 items-center">

            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Team Change — For Teachers, By Teachers
                </h2>
                <p class="text-gray-700 text-lg md:text-xl leading-relaxed mb-4">
                    Our candidates represent real teachers’ voices, committed to fairness, transparency, and uplifting
                    every educator.
                </p>
                <p class="text-gray-700 text-lg md:text-xl leading-relaxed">
                    With Team Change, your voice matters. Together, we can build a branch that prioritizes teachers,
                    reforms institutions, and drives progress.
                </p>
            </div>

            <div class="relative group overflow-hidden rounded-3xl shadow-2xl">
                <div
                    class="absolute -inset-2 bg-gradient-to-r from-kuppet-yellow to-kuppet-green-dark rounded-3xl blur opacity-20 group-hover:opacity-40 transition duration-500">
                </div>
                <img src="{{ asset('images/nairobi/2.jpg') }}"
                    class="relative w-full h-full object-cover rounded-3xl transform hover:scale-105 transition duration-500">
            </div>

        </div>
    </section>

    <!-- CENTER FEATURE IMAGE -->
    <section class="py-28 text-center">
        <div class="container mx-auto px-6 md:px-12">

            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-12">
                Leadership in Action
            </h2>

            <div class="relative max-w-5xl mx-auto rounded-3xl shadow-2xl overflow-hidden">
                <img src="{{ asset('images/nairobi/3.jpg') }}"
                    class="w-full h-full object-cover transform hover:scale-105 transition duration-500">

                <div class="absolute bottom-6 left-6 bg-white/80 backdrop-blur px-6 py-3 rounded-xl shadow-lg">
                    <p class="text-sm font-semibold text-kuppet-green-dark">
                        Engaging Teachers — February 2026
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- REFORM SECTION -->
    <section class="py-28 bg-kuppet-green-dark text-white">
        <div class="container mx-auto px-6 md:px-12">

            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-extrabold mb-6">
                    Why Team Change Matters
                </h2>
                <p class="max-w-3xl mx-auto text-gray-200 text-lg md:text-xl leading-relaxed">
                    A coalition focused on teachers’ welfare, strong leadership, and transparent governance — ensuring
                    your voice is heard.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-10 text-center">

                <div
                    class="bg-white/10 p-8 rounded-2xl backdrop-blur shadow-lg hover:scale-105 transition duration-500">
                    <h3 class="text-kuppet-yellow font-bold text-xl mb-3">
                        Institutional Stability
                    </h3>
                    <p class="text-gray-200 text-lg leading-relaxed">
                        Restoring confidence and structured leadership.
                    </p>
                </div>

                <div
                    class="bg-white/10 p-8 rounded-2xl backdrop-blur shadow-lg hover:scale-105 transition duration-500">
                    <h3 class="text-kuppet-yellow font-bold text-xl mb-3">
                        Transparent Governance
                    </h3>
                    <p class="text-gray-200 text-lg leading-relaxed">
                        Clear communication and accountable processes.
                    </p>
                </div>

                <div
                    class="bg-white/10 p-8 rounded-2xl backdrop-blur shadow-lg hover:scale-105 transition duration-500">
                    <h3 class="text-kuppet-yellow font-bold text-xl mb-3">
                        Teacher-Centered Leadership
                    </h3>
                    <p class="text-gray-200 text-lg leading-relaxed">
                        Welfare, promotions, and member protection.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- FINAL CALL -->
    <section class="py-28 bg-white">
        <div class="container mx-auto px-6 md:px-12 grid md:grid-cols-2 gap-16 items-center">

            <div class="relative overflow-hidden rounded-3xl shadow-2xl">
                <img src="{{ asset('images/nairobi/6.jpg') }}"
                    class="w-full h-full object-cover transform hover:scale-105 transition duration-500 rounded-3xl">
            </div>

            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    1st March — Your Voice, Your Choice
                </h2>

                <p class="text-gray-700 text-lg md:text-xl leading-relaxed mb-8">
                    Stand with Team Change. Vote for leadership that listens, acts, and puts teachers first.
                </p>
                <a href="{{ route('candidates') }}"
                    class="inline-block bg-kuppet-green-dark text-white px-8 py-4 rounded-full font-semibold shadow-lg hover:bg-kuppet-yellow hover:text-kuppet-green-dark transition duration-500">
                    See Our Candidates
                </a>
            </div>

        </div>
    </section>

</div>
