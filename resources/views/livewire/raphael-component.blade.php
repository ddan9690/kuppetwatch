<div class="relative bg-gray-100">
    <!-- Hero Image -->
    <div class="relative h-screen bg-gray-800">
        <img src="{{ asset('images/raphael/ago-raphael-2.jpg') }}" 
             alt="Raphael 2" 
             class="w-full h-full object-cover brightness-75">

        <!-- Top-right Logo -->
        <div class="absolute top-4 right-4 md:top-8 md:right-8">
            <img src="{{ asset('images/raphael/kuppet-logo.jpeg') }}" 
                 alt="KUPPET Logo" 
                 class="w-20 md:w-28 h-auto rounded shadow-lg">
        </div>

        <!-- Overlay Content -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4 md:px-8">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-4" data-aos="fade-up">
                Ago Raphael 
            </h1>
            
            <p class="text-lg md:text-2xl text-gray-200 mb-6 max-w-2xl" data-aos="fade-up" data-aos-delay="200">
                Vying for <span class="font-semibold">Vice Chair</span> in the upcoming 
                <span class="font-semibold">KUPPET Homa Bay Branch Elections (2026–2031)</span>. 
                Committed to teacher empowerment, unity, and progress.
            </p>

            <a href="#more" 
               class="inline-block px-6 py-3 bg-kuppet-green hover:bg-kuppet-green-dark text-white font-semibold rounded shadow-lg transition duration-300" 
               data-aos="fade-up" data-aos-delay="400">
                Learn More
            </a>
        </div>
    </div>

    <!-- Optional: Additional Section -->
    <section id="more" class="py-20 bg-white text-kuppet-text">
        <div class="container mx-auto px-4 md:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">About Raphael</h2>
            <p class="max-w-3xl mx-auto text-lg md:text-xl leading-relaxed">
                Ago Raphael is dedicated to promoting the welfare of teachers, ensuring transparency, 
                and fostering unity within the KUPPET community. With experience, integrity, and vision, 
                he aims to represent the voice of every teacher in Homa Bay and drive meaningful change.
            </p>
        </div>
    </section>
</div>
