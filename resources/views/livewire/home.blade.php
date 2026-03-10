<div>

{{-- MOTTO BANNER --}}
<section class="bg-secondary text-primary py-2 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 x-data="{ show: false }"
            x-init="setTimeout(() => show = true, 300)"
            x-show="show"
            x-transition:enter="transform transition duration-1000"
            x-transition:enter-start="translate-y-[-50px] opacity-0"
            x-transition:enter-end="translate-y-0 opacity-100"
            class="text-sm sm:text-base md:text-lg font-bold uppercase tracking-widest">
            Service &mdash; Justice &mdash; Solidarity
        </h2>
    </div>
</section>

{{-- HERO SECTION --}}
<section class="bg-primary text-white">
    <div class="max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-12 items-center">
        <div>
            <h1 class="text-4xl md:text-5xl font-bold leading-tight">
                KUPPET Homa Bay Branch
            </h1>

            <p class="text-secondary mt-2 font-semibold">
                Kenya Union of Post Primary Education Teachers
            </p>

            <p class="mt-6 text-lg text-white/90">
                Bringing together teachers across Homa Bay County to champion professional growth,
                protect teachers' rights, and strengthen the voice of educators.
            </p>

            <div class="mt-8 flex flex-wrap gap-4">
                <a href="#updates"
                   class="bg-secondary text-primary px-6 py-3 rounded-lg font-semibold hover:bg-secondary/90 transition">
                    Latest Updates
                </a>

                <a href="#contact"
                   class="border border-white px-6 py-3 rounded-lg hover:bg-white hover:text-primary transition">
                    Contact Branch
                </a>
            </div>
        </div>

        <div class="flex justify-center">
            <img src="{{ asset('images/kuppet-officials-led-by-chairman-donating-trophy.jpg') }}"
                 class="rounded-xl shadow-xl"
                 alt="Teachers">
        </div>
    </div>
</section>

{{-- LATEST UPDATES --}}
<section id="updates" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between items-center mb-10">
            <h2 class="text-3xl font-bold text-gray-800">
                Latest Branch Updates
            </h2>

            <a href="/updates" class="text-primary font-semibold hover:underline">
                View All Updates
            </a>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            {{-- Hardcoded Update Cards --}}
            <div class="bg-white rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('images/treasurer-tembo-mwadime-presenting-trophy.jpg') }}"
                     class="rounded-t-xl"
                     alt="Update">
                <div class="p-6">
                    <h3 class="font-semibold text-lg">
                        KUPPET Homa Bay Officials Attend County Games
                    </h3>
                    <p class="text-gray-500 text-sm mt-2">
                        Branch officials reaffirm commitment to teachers during their first public engagement.
                    </p>
                    <a href="/updates#1" class="mt-4 text-primary font-semibold hover:underline">
                        Read More →
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('images/workshop-teachers.jpg') }}"
                     class="rounded-t-xl"
                     alt="Update">
                <div class="p-6">
                    <h3 class="font-semibold text-lg">
                        Teachers Workshop on Professional Development
                    </h3>
                    <p class="text-gray-500 text-sm mt-2">
                        Workshop to equip teachers with modern teaching methodologies and professional skills.
                    </p>
                    <a href="/updates#2" class="mt-4 text-primary font-semibold hover:underline">
                        Read More →
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('images/branch-meeting.jpg') }}"
                     class="rounded-t-xl"
                     alt="Update">
                <div class="p-6">
                    <h3 class="font-semibold text-lg">
                        Union Branch Meeting Held at Ringa Boys
                    </h3>
                    <p class="text-gray-500 text-sm mt-2">
                        Homa Bay branch members gathered to discuss policy and upcoming projects.
                    </p>
                    <a href="/updates#3" class="mt-4 text-primary font-semibold hover:underline">
                        Read More →
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- QUICK SERVICES --}}
<section class="py-16">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800">
                Branch Services
            </h2>
            <p class="text-gray-500 mt-2">
                Supporting teachers across Homa Bay County
            </p>
        </div>

        <div class="grid md:grid-cols-4 gap-8">
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg text-center">
                <i class='bx bx-news text-4xl text-primary'></i>
                <h3 class="font-semibold mt-4">Branch Updates</h3>
                <p class="text-sm text-gray-500 mt-2">
                    Latest union announcements and activities.
                </p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg text-center">
                <i class='bx bx-group text-4xl text-primary'></i>
                <h3 class="font-semibold mt-4">Leadership</h3>
                <p class="text-sm text-gray-500 mt-2">
                    Meet the officials serving teachers.
                </p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg text-center">
                <i class='bx bx-book text-4xl text-primary'></i>
                <h3 class="font-semibold mt-4">Resources</h3>
                <p class="text-sm text-gray-500 mt-2">
                    Access important teacher documents.
                </p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg text-center">
                <i class='bx bx-support text-4xl text-primary'></i>
                <h3 class="font-semibold mt-4">Member Support</h3>
                <p class="text-sm text-gray-500 mt-2">
                    Union assistance and representation.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- CONTACT CTA --}}
<section id="contact" class="bg-primary text-white py-16">
    <div class="max-w-5xl mx-auto text-center px-6">
        <h2 class="text-3xl font-bold">
            Contact KUPPET Homa Bay
        </h2>

        <p class="mt-4 text-white/90">
            Need assistance or have a union matter? Reach the branch leadership directly.
        </p>

        <div class="mt-8 flex justify-center flex-wrap gap-4">
            <a href="https://wa.me/254710709061"
               class="bg-green-500 px-6 py-3 rounded-lg font-semibold hover:bg-green-600">
                WhatsApp
            </a>

            <a href="sms:0710709061"
               class="bg-secondary text-primary px-6 py-3 rounded-lg font-semibold hover:bg-secondary/90">
                Send SMS
            </a>

            <a href="tel:0710709061"
               class="border border-white px-6 py-3 rounded-lg hover:bg-white hover:text-primary">
                Call 0710709061
            </a>
        </div>
    </div>
</section>

</div>