@section('title', 'Ago Raphael — The 5 Point Agenda')

<div class="relative bg-gray-100">

<!-- Top Campaign Image -->
<section class="relative h-[60vh] md:h-[75vh]">
    <img src="{{ asset('images/raphael/Raphael-on-the-capaign-with-teachers.jpg') }}" 
         alt="Raphael campaigning with teachers" 
         class="w-full h-full object-cover object-center brightness-75">
    <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4 md:px-8">
        <h1 class="text-5xl md:text-7xl font-extrabold mb-4 drop-shadow-xl tracking-wide" data-aos="fade-up">
            <span class="text-white">Go for</span>
            <span class="text-kuppet-yellow uppercase text-6xl md:text-8xl ml-2">AGO</span>
        </h1>
        <p class="text-xl md:text-3xl text-kuppet-yellow font-medium drop-shadow-md max-w-2xl" data-aos="fade-up" data-aos-delay="200">
            Empowering Teachers, Transforming Education
        </p>
    </div>
</section>


   <!-- 5 Point Agenda Accordion -->
<section id="agenda" class="py-20 bg-kuppet-green-light">
    <div class="container mx-auto px-4 md:px-12 max-w-4xl">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-kuppet-green-dark mb-16" data-aos="fade-up">
            The 5 Point Agenda
        </h2>

        <div x-data="{ active: null }" class="space-y-8"> <!-- Increased spacing -->
            @foreach ([
                ['icon' => 'bxs-megaphone', 'title' => "Amplifying Teachers' Voices", 'content' => "Every teacher’s voice matters. I will establish a structured network of school representatives across all sub-counties to ensure grassroots concerns reach the decision-making table. By strengthening participation and building inclusive dialogue platforms, we will create a union where no teacher feels unheard — a union that acts, not just reacts."],
                ['icon' => 'bxs-briefcase-alt', 'title' => "Improving Working Conditions", 'content' => "Teachers deserve respect, fair treatment, and dignified work environments. I will fight for clear promotion structures, predictable career progression, timely payment of dues, and improved teaching environments. We will push for policies that recognize teachers as the professionals they are — with rights, security, and the resources to perform at their best."],
                ['icon' => 'bxs-shield', 'title' => "Safeguarding Teachers' Well-being", 'content' => "Your safety, dignity, and mental health are non-negotiable. I will advocate for accessible legal support, protection from harassment or intimidation, and mental health resources for teachers facing stress, trauma, or unfair treatment. A teacher who feels safe is a teacher who can fully empower their students."],
                ['icon' => 'bxs-graduation', 'title' => "Fostering Professional Development", 'content' => "Our profession thrives on growth. I will prioritize continuous professional development through workshops, certification programs, mentorship, and capacity-building sessions. We will open doors for teachers to advance their skills, explore leadership roles, and raise the overall quality of education in Homa Bay."],
                ['icon' => 'bxs-group', 'title' => "Building a United & Transparent Union", 'content' => "Transparency builds trust, and trust drives progress. I will ensure open communication, accessible reporting of union activities, and collaboration across all sub-counties. Our union must not only speak with one voice — it must also act with integrity, accountability, and unity."]
            ] as $index => $item)
                <div 
                    class="bg-white border border-gray-200 rounded-xl shadow-md overflow-hidden transition hover:shadow-lg"
                    data-aos="fade-up"
                    data-aos-delay="{{ ($index + 1) * 100 }}">
                    <button @click="active === {{ $index + 1 }} ? active = null : active = {{ $index + 1 }}"
                            class="w-full flex justify-between items-center px-8 py-6 text-left font-semibold text-kuppet-green-dark text-xl focus:outline-none hover:bg-gray-50 transition-colors">
                        <span class="flex items-center">
                            <i class="bx {{ $item['icon'] }} text-3xl text-kuppet-yellow mr-4"></i> 
                            {{ $item['title'] }}
                        </span>
                        <i class="bx text-2xl" :class="active === {{ $index + 1 }} ? 'bx-chevron-up' : 'bx-chevron-down'"></i>
                    </button>
                    <div x-show="active === {{ $index + 1 }}" x-collapse class="px-8 pb-8 text-gray-700 leading-relaxed text-base">
                        {{ $item['content'] }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


    <!-- Bottom Campaign Image -->
    <section class="relative h-[50vh] md:h-[65vh]">
        <img src="{{ asset('images/raphael/raphael-posing-with-teachers.jpg') }}" 
             alt="Raphael with teachers" 
             class="w-full h-full object-cover object-center brightness-75">
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-kuppet-green-dark text-white text-center">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Team Teachers First</h2>
            <p class="text-lg md:text-xl mb-8 max-w-3xl mx-auto">
                Together, we can make these five priorities a reality. 
                Stand with Ago Raphael to build a stronger, fairer, and more united KUPPET for Homa Bay teachers.
            </p>
            <a href="{{ route('raphael.component') }}"
               class="inline-block bg-kuppet-gold text-kuppet-green-dark font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-yellow-400 transition">
                ⬅ Back to Main Campaign
            </a>
        </div>
    </section>
</div>
