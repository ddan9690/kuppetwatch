@section('title', 'Ringa Tour Coverage | KUPPET Homa Bay Branch')

<div class="bg-gray-50">

    <!-- TOP IMAGE WITH TITLE -->
    <section class="relative h-[60vh] md:h-[70vh] overflow-hidden">
        <img src="{{ asset('images/ringa-tour/kuppet-officials-led-by-chairman-donating-trophy.jpg') }}" 
             class="absolute w-full h-full object-cover parallax z-0">

        <div class="absolute inset-0 bg-black/50 z-10"></div>

        <div class="relative z-20 container mx-auto px-6 md:px-12 h-full flex flex-col justify-center items-center text-center text-white">
            <h1 class="text-4xl md:text-5xl font-extrabold drop-shadow-lg leading-tight mb-4" data-aos="fade-up">
                Work Begins for the New KUPPET Homa Bay Branch
            </h1>
        </div>
    </section>

    <!-- MAIN ARTICLE -->
    <section class="py-16 md:py-24 container mx-auto px-6 md:px-12 max-w-5xl">

        <p class="text-gray-700 text-base md:text-lg leading-relaxed mb-6" data-aos="fade-up">
            The newly elected officials of the KUPPET Homa Bay Branch made their first public appearance today during the Term 1 2026 County Championships held at Ringa Boys and Ober Boys High Schools. The branch leadership, led by Chairman Peter Otieno (Blacky) engaged teachers, donated trophies, and signaled the start of a new chapter in teacher-centered leadership.
        </p>

        <!-- INLINE IMAGE -->
        <div class="relative my-8 rounded-3xl overflow-hidden shadow-2xl" data-aos="fade-up">
            <img src="{{ asset('images/ringa-tour/peter-chairman-presenting trophy-to-winning-school.jpg') }}" 
                 class="w-full h-80 md:h-96 object-cover rounded-3xl parallax">
        </div>

        <p class="text-gray-700 text-base md:text-lg leading-relaxed mb-6" data-aos="fade-up">
            In his address to the Ringa Boys fraternity in the school staffroom, Chairman Otieno thanked teachers for electing the new branch officials. He assured them that the branch would work tirelessly to fulfill the promises made during the campaign and emphasized that teachers’ views regarding the national elections would be respected. “We are committed to serving teachers diligently and ensuring their voices guide our actions,” he said.
        </p>

        <p class="text-gray-700 text-base md:text-lg leading-relaxed mb-6" data-aos="fade-up">
            Throughout the championships, the officials engaged teachers in informal discussions on the sidelines, listening attentively to their concerns and feedback. The interactions highlighted the branch's commitment to accessibility and transparency.
        </p>

        <!-- INLINE GRID OF IMAGES -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 my-8" data-aos="fade-up">
            <div class="rounded-2xl overflow-hidden shadow-lg parallax">
                <img src="{{ asset('images/ringa-tour/tembo-treasurer-presenting-trophy.jpg') }}" 
                     class="w-full h-64 md:h-72 object-cover rounded-2xl">
            </div>
            <div class="rounded-2xl overflow-hidden shadow-lg parallax">
                <img src="{{ asset('images/ringa-tour/atanga-kennedy-assistant-executive-secretary-with-a-teacher.jpg') }}" 
                     class="w-full h-64 md:h-72 object-cover rounded-2xl">
            </div>
        </div>

        <p class="text-gray-700 text-base md:text-lg leading-relaxed mb-6" data-aos="fade-up">
            Officials accompanying Chairman Otieno included Tembo Mwadime (Treasurer), Atang'a Kennedy (Assistant Executive Secretary), Richard Okoth Otieno (Vice Chairman), Churchill Aroko (Organising Secretary), Felix John Oduor (Assistant Treasurer), Philip Adede (Secretary Junior), Duncan Alaka (2nd Assistant Secretary), Ann Blessing (3rd Assistant Secretary), and Quinter Nyakiye (1st Assistant Secretary). Their presence reinforced a unified leadership team ready to implement the branch's plans.
        </p>

        <p class="text-gray-700 text-base md:text-lg leading-relaxed mb-6" data-aos="fade-up">
            The Term 1 2026 County Championships not only highlighted students’ talents but also provided a platform for KUPPET to directly engage with teachers and demonstrate its commitment to the educational community.
        </p>

        <!-- HIGHLIGHT SLIDESHOW -->
        <div class="py-10" data-aos="fade-up">
            <h2 class="text-2xl md:text-3xl font-bold mb-6 text-gray-900 text-center">Event Highlights</h2>

            <div class="swiper ringa-tour-swiper">
                <div class="swiper-wrapper">
                    @php
                        $images = [
                            'ann-blessing-and-pk-adede.jpg',
                            'kennedy-atanga-presenting-trophy.jpg',
                            'tembo-treasurer-presenting-trophy.jpg',
                            'felix-john-assistant-treasurer-interacts-with-teachers.jpg',
                            'group-photo-teachers-with-kuppet-officials.jpg',
                            'richard-vice-chairman.jpg',
                        ];
                    @endphp

                    @foreach ($images as $img)
                        <div class="swiper-slide relative rounded-2xl overflow-hidden shadow-lg">
                            <img src="{{ asset('images/ringa-tour/' . $img) }}" 
                                 class="w-full h-72 md:h-96 object-cover rounded-2xl parallax">
                            <div class="absolute bottom-3 left-3 bg-white/70 backdrop-blur px-3 py-1 rounded-md text-xs md:text-sm font-semibold text-gray-800">
                                {{ pathinfo($img, PATHINFO_FILENAME) }}
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="swiper-button-next text-kuppet-green-dark"></div>
                <div class="swiper-button-prev text-kuppet-green-dark"></div>
                <div class="swiper-pagination mt-4"></div>
            </div>
        </div>

    </section>

    <!-- CALL TO ACTION BUTTON -->
    <section class="py-16 bg-kuppet-yellow/10">
        <div class="container mx-auto px-6 md:px-12 text-center">
            <a href="{{ route('home') }}"
               class="inline-block bg-kuppet-green-dark text-white text-lg md:text-xl font-bold px-10 py-4 rounded-full shadow-2xl hover:bg-kuppet-yellow hover:text-kuppet-green-dark transition duration-500 transform hover:scale-105">
                Return to Home
            </a>
        </div>
    </section>

</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {

    // Swiper carousel
    const swiper = new Swiper('.ringa-tour-swiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: { delay: 3000, disableOnInteraction: false },
        navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
        pagination: { el: '.swiper-pagination', clickable: true },
        breakpoints: { 640: { slidesPerView: 1 }, 768: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } },
    });

    // AOS animations
    AOS.init({ once: true, duration: 800, easing: 'ease-in-out' });

    // GSAP parallax
    gsap.registerPlugin(ScrollTrigger);
    gsap.utils.toArray('.parallax').forEach((el) => {
        gsap.to(el, {
            yPercent: 15,
            ease: 'none',
            scrollTrigger: { trigger: el, start: 'top bottom', end: 'bottom top', scrub: true }
        });
    });

});
</script>
@endpush