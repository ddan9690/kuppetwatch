@section('title', 'Ago Raphael - KUPPET Homa Bay Vice Chairman (2026–2031)')

<div class="relative bg-gray-100">
    <!-- Hero Image -->
    <div class="relative h-screen bg-gray-800">
        <img src="{{ asset('images/raphael/ago-raphael-1.jpg') }}" 
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

    <section id="pledges" class="py-20 bg-kuppet-green-light text-kuppet-text">
        <div class="container mx-auto px-4 md:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-12 text-kuppet-green-dark" data-aos="fade-up">
                My Key Pledges
            </h2>
    
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Teacher Welfare -->
                <div class="bg-kuppet-white rounded-xl shadow-lg p-6 flex flex-col items-center text-center hover:scale-105 transform transition duration-300" data-aos="fade-up" data-aos-delay="100">
                    <i class='bx bxs-user-voice text-5xl text-kuppet-yellow mb-4'></i>
                    <h3 class="text-xl font-semibold mb-2 text-kuppet-green-dark">Teacher Welfare</h3>
                    <p class="text-gray-700">
                        Advocate for fair salaries, predictable promotions, and improved working conditions for all teachers.
                    </p>
                </div>
    
                <!-- Unity & Inclusivity -->
                <div class="bg-kuppet-white rounded-xl shadow-lg p-6 flex flex-col items-center text-center hover:scale-105 transform transition duration-300" data-aos="fade-up" data-aos-delay="200">
                    <i class='bx bxs-group text-5xl text-kuppet-yellow mb-4'></i>
                    <h3 class="text-xl font-semibold mb-2 text-kuppet-green-dark">Unity & Inclusivity</h3>
                    <p class="text-gray-700">
                        Foster a united KUPPET community where every teacher, across all sub-counties and schools, has a voice.
                    </p>
                </div>
    
                <!-- Transparency & Accountability -->
                <div class="bg-kuppet-white rounded-xl shadow-lg p-6 flex flex-col items-center text-center hover:scale-105 transform transition duration-300" data-aos="fade-up" data-aos-delay="300">
                    <i class='bx bxs-bank text-5xl text-kuppet-yellow mb-4'></i>
                    <h3 class="text-xl font-semibold mb-2 text-kuppet-green-dark">Transparency & Accountability</h3>
                    <p class="text-gray-700">
                        Ensure union resources are managed openly, decisions are transparent, and every teacher is treated fairly.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="carousel" class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center text-kuppet-green-dark" data-aos="fade-up">
                Our Journey in Motion
            </h2>
    
            <div x-data="slider()" x-init="init()" class="relative overflow-hidden">
                <!-- Swiper Container -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide relative flex justify-center items-center">
                            <img src="{{ asset('images/raphael/rapael-wrapped-in-kuppet-flag.png') }}" 
                                 alt="Ago with KUPPET flag" 
                                 class="rounded-lg shadow-lg max-h-96 object-contain">
                            <div class="absolute inset-0 flex flex-col items-center justify-center text-white font-bold text-3xl md:text-5xl">
                                <div class="animated-text-left bg-kuppet-green-dark bg-opacity-70 px-4 py-2 rounded mb-2">
                                    Strong Leadership
                                </div>
                                <div class="animated-text-right bg-kuppet-gold bg-opacity-80 px-4 py-2 rounded">
                                    Bright Future
                                </div>
                            </div>
                        </div>
    
                        <!-- Slide 2 -->
                        <div class="swiper-slide relative flex justify-center items-center">
                            <img src="{{ asset('images/raphael/unity-illustration.svg') }}" 
                                 alt="Unity Illustration" 
                                 class="rounded-lg shadow-lg max-h-96 object-contain">
                            <div class="absolute inset-0 flex flex-col items-center justify-center text-white font-bold text-3xl md:text-5xl">
                                <div class="animated-text-left bg-kuppet-green bg-opacity-80 px-4 py-2 rounded mb-2">
                                    Unity
                                </div>
                                <div class="animated-text-right bg-kuppet-gold bg-opacity-80 px-4 py-2 rounded">
                                    Inclusivity
                                </div>
                            </div>
                        </div>
    
                        <!-- Slide 3 -->
                        <div class="swiper-slide relative flex justify-center items-center">
                            <img src="{{ asset('images/raphael/ago-raphael-3.jpg') }}" 
                                 alt="Ago Raphael" 
                                 class="rounded-lg shadow-lg max-h-96 object-contain">
                            <div class="absolute inset-0 flex flex-col items-center justify-center text-white font-bold text-3xl md:text-5xl">
                                <div class="animated-text-left bg-kuppet-green-dark bg-opacity-70 px-4 py-2 rounded mb-2">
                                    A Voice
                                </div>
                                <div class="animated-text-right bg-kuppet-gold bg-opacity-80 px-4 py-2 rounded">
                                    For Every Teacher
                                </div>
                            </div>
                        </div>
    
                        <!-- Slide 4 -->
                        <div class="swiper-slide relative flex justify-center items-center">
                            <img src="{{ asset('images/raphael/teacher-illustration.svg') }}" 
                                 alt="Teacher Illustration" 
                                 class="rounded-lg shadow-lg max-h-96 object-contain">
                            <div class="absolute inset-0 flex flex-col items-center justify-center text-white font-bold text-3xl md:text-5xl">
                                <div class="animated-text-left bg-kuppet-green-dark bg-opacity-70 px-4 py-2 rounded mb-2">
                                    Teachers First
                                </div>
                                <div class="animated-text-right bg-kuppet-gold bg-opacity-80 px-4 py-2 rounded">
                                    Always
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Navigation -->
                <div class="absolute top-1/2 left-4 transform -translate-y-1/2 cursor-pointer text-kuppet-green-dark text-4xl z-10" @click="prevSlide">
                    <i class='bx bx-chevron-left'></i>
                </div>
                <div class="absolute top-1/2 right-4 transform -translate-y-1/2 cursor-pointer text-kuppet-green-dark text-4xl z-10" @click="nextSlide">
                    <i class='bx bx-chevron-right'></i>
                </div>
    
                <!-- Pagination -->
                <div class="swiper-pagination mt-6"></div>
            </div>
        </div>
    
        <style>
            @keyframes slide-in-left {
                0% { transform: translateX(-100%); opacity: 0; }
                50% { transform: translateX(10%); opacity: 1; }
                100% { transform: translateX(0); opacity: 1; }
            }
            @keyframes slide-in-right {
                0% { transform: translateX(100%); opacity: 0; }
                50% { transform: translateX(-10%); opacity: 1; }
                100% { transform: translateX(0); opacity: 1; }
            }
            .animated-text-left {
                animation: slide-in-left 1.2s ease forwards;
            }
            .animated-text-right {
                animation: slide-in-right 1.2s ease forwards;
            }
        </style>
    
        <script>
            function slider() {
                return {
                    swiper: null,
                    init() {
                        this.swiper = new Swiper('.swiper-container', {
                            loop: true,
                            autoplay: { delay: 5000, disableOnInteraction: false },
                            pagination: { el: '.swiper-pagination', clickable: true },
                            slidesPerView: 1,
                            spaceBetween: 20,
                            on: {
                                slideChangeTransitionStart() {
                                    // re-trigger animations when slide changes
                                    document.querySelectorAll('.animated-text-left, .animated-text-right')
                                        .forEach(el => { el.style.animation = 'none'; el.offsetHeight; el.style.animation = ''; });
                                }
                            }
                        });
                    },
                    prevSlide() { this.swiper.slidePrev(); },
                    nextSlide() { this.swiper.slideNext(); },
                }
            }
        </script>
    </section>
    
    <!-- CALL TO ACTION SECTION -->
<section id="support" class="py-20 bg-kuppet-green-dark text-white text-center">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">
            Stand With Ago Raphael
        </h2>
        <p class="text-lg md:text-xl mb-8">
            Together, let’s shape a stronger, fairer KUPPET for every teacher in Homa Bay.
        </p>
        <a href="https://wa.me/254723867480?text=Hello%20Ago%20Raphael,%20I%20pledge%20my%20support%20for%20your%20vice-chairman%20bid!"
           target="_blank"
           class="inline-block bg-kuppet-gold text-kuppet-green-dark font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-yellow-400 transition">
            📲 Pledge Your Support on WhatsApp
        </a>
    </div>
</section>

<!-- CAMPAIGN POSTER ONLY -->
<section class="py-16 bg-kuppet-green-light">
    <div class="container mx-auto px-4 flex justify-center">
        <img src="{{ asset('images/raphael/raphael-campain-poster.jpg') }}"
             alt="Ago Raphael Campaign Poster"
             class="max-w-3xl w-full h-auto object-contain shadow-lg rounded-xl">
    </div>
</section>


<!-- HASHTAGS SECTION -->
<section id="hashtags" class="py-12 bg-gray-100">
    <div class="container mx-auto px-4 text-center">
        <h3 class="text-2xl font-bold text-kuppet-green-dark mb-6">
            Join the Conversation
        </h3>
        <div class="flex flex-wrap justify-center gap-4 text-lg font-semibold text-kuppet-green">
            <span class="px-4 py-2 bg-white rounded-full shadow">#AgoRaphael2026</span>
            <span class="px-4 py-2 bg-white rounded-full shadow">#TeachersFirstAlways</span>
            <span class="px-4 py-2 bg-white rounded-full shadow">#KUPPETUnity</span>
            <span class="px-4 py-2 bg-white rounded-full shadow">#HomaBayTeachers</span>
            <span class="px-4 py-2 bg-white rounded-full shadow">#StrongerTogether</span>
        </div>
    </div>
</section>

<!-- CONTINUOUS HUMBLE REQUEST TICKER -->
<section class="relative bg-kuppet-green text-white py-8 overflow-hidden">
    <div class="flex whitespace-nowrap animate-scroll">
        <!-- First instance -->
        <p class="inline-block text-2xl md:text-3xl font-medium mr-16">
            🙏 I humbly request your 
            <span class="text-kuppet-gold font-bold">support</span>, 
            <span class="text-kuppet-gold font-bold">trust</span>, and 
            <span class="text-kuppet-gold font-bold">prayers</span> as I seek to serve as your 
            <span class="underline font-bold">Vice Chairman</span>. 
            Thank you. 🙏
        </p>
        <!-- Duplicate for seamless loop -->
        <p class="inline-block text-2xl md:text-3xl font-medium">
            🙏 I humbly request your 
            <span class="text-kuppet-gold font-bold">support</span>, 
            <span class="text-kuppet-gold font-bold">trust</span>, and 
            <span class="text-kuppet-gold font-bold">prayers</span> as I seek to serve as your 
            <span class="underline font-bold">Vice Chairman</span>. 
            Thank you. 🙏
        </p>
    </div>
</section>

<!-- Add to your Tailwind or custom CSS -->
<style>
@keyframes scrollTicker {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-50%);
    }
}
.animate-scroll {
    animation: scrollTicker 14s linear infinite; /* faster, smoother */
}
</style>

    
</div>
