<div class="relative bg-gray-100">
    <!-- Hero Image -->
    <div class="relative h-screen bg-gray-800">
        <img src="{{ asset('images/raphael/ago-raphael-2.jpg') }}" 
             alt="Raphael 2" 
             class="w-full h-full object-contain object-center brightness-75">

        <!-- Top-right Logo -->
        <div class="absolute top-4 right-4 md:top-8 md:right-8">
            <img src="{{ asset('images/raphael/kuppet-logo.jpeg') }}" 
                 alt="KUPPET Logo" 
                 class="w-20 md:w-28 h-auto rounded shadow-lg">
        </div>

        <!-- Overlay Content -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4 md:px-8">
            <!-- Candidate Name -->
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-4" data-aos="fade-up">
                Ago Raphael
            </h1>

            <!-- Position & Vision -->
            <p class="text-lg md:text-2xl text-gray-200 mb-4 max-w-3xl" data-aos="fade-up" data-aos-delay="200">
                Aspiring <span class="font-semibold text-kuppet-yellow">Vice Chairman</span> of 
                <span class="font-semibold text-kuppet-yellow">KUPPET Homa Bay Branch</span> (2026–2031)
            </p>

            <!-- Key Campaign Tagline -->
            <p class="text-md md:text-xl text-gray-100 mb-6 max-w-3xl font-medium" data-aos="fade-up" data-aos-delay="400">
                A servant leader for teachers – 
                <span class="font-semibold text-kuppet-yellow">Unity • Welfare • Transparency • Bold Representation</span>
            </p>

            <!-- Highlighted Pledges -->
            <div class="mb-6 space-y-2 max-w-3xl" data-aos="fade-up" data-aos-delay="500">
                <p class="text-gray-100 text-lg md:text-xl">
                    ✔️ <span class="text-kuppet-yellow font-semibold">Bold representation</span> for teachers in all forums
                </p>
                <p class="text-gray-100 text-lg md:text-xl">
                    ✔️ <span class="text-kuppet-yellow font-semibold">Fair salaries and promotions</span>
                </p>
                <p class="text-gray-100 text-lg md:text-xl">
                    ✔️ <span class="text-kuppet-yellow font-semibold">Transparency and accountability</span> in union affairs
                </p>
            </div>

            <!-- Call-to-Action Button -->
            <a href="#more" 
               class="inline-block px-6 py-3 bg-kuppet-green hover:bg-kuppet-green-dark text-white font-semibold rounded shadow-lg transition duration-300" 
               data-aos="fade-up" data-aos-delay="600">
                Learn More
            </a>
        </div>
    </div>

    <!-- About Section -->
    <section id="more" class="py-20 bg-white text-kuppet-text">
        <div class="container mx-auto px-4 md:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">About Ago Raphael</h2>
            <p class="max-w-3xl mx-auto text-lg md:text-xl leading-relaxed">
                Ago Raphael is a visionary teacher leader dedicated to promoting the welfare of all teachers, ensuring transparency, and fostering unity within the KUPPET community. 
                With integrity, courage, and experience, he pledges to: 
            </p>

            <!-- Key Pledges -->
            <ul class="mt-6 space-y-3 max-w-xl mx-auto text-left text-lg md:text-xl">
                <li>✔️ Represent teachers boldly and consistently in all forums.</li>
                <li>✔️ Advocate for fair salaries, promotions, and better working conditions.</li>
                <li>✔️ Ensure transparency, accountability, and proper use of union resources.</li>
                <li>✔️ Engage with members actively, listening to your issues and delivering solutions.</li>
                <li>✔️ Promote unity, professional development, and inclusivity in all branch activities.</li>
            </ul>
        </div>
    </section>
</div>
