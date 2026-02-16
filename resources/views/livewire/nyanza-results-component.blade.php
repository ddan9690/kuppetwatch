@section('title', 'Nyanza Decides 2026–2031 | Regional Leadership Transition Dashboard')

<div class="bg-gray-50 overflow-hidden">

    <!-- ================= HERO ================= -->
    <section class="relative py-28 bg-kuppet-green-dark text-white text-center overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-kuppet-green-dark"></div>

        <div class="relative container mx-auto px-6 md:px-12" data-aos="fade-up">

            <h1 class="text-5xl md:text-7xl font-extrabold uppercase tracking-wide leading-tight">
                NYANZA DECIDES
            </h1>

            <p class="mt-6 text-xl md:text-2xl max-w-3xl mx-auto text-gray-200">
                A regional leadership transition is unfolding across KUPPET counties.
                The numbers reveal a clear direction.
            </p>

            <div class="mt-10 inline-flex items-center gap-3 bg-kuppet-yellow text-kuppet-green-dark px-8 py-3 rounded-full font-bold shadow-xl">
                <i class='bx bx-trending-up text-2xl'></i>
                Reform Momentum Across Nyanza
            </div>

        </div>
    </section>


    <!-- ================= REFORM METER ================= -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6 md:px-12 text-center">

            <h2 class="text-4xl font-bold text-kuppet-green-dark mb-12">
                Regional Shift Indicator
            </h2>

            <div class="max-w-3xl mx-auto">

                <div class="flex justify-between font-semibold mb-2">
                    <span>Counties Experiencing Leadership Change</span>
                    <span>4 of 5</span>
                </div>

                <div class="w-full bg-gray-200 rounded-full h-6 overflow-hidden">
                    <div class="bg-green-600 h-6 rounded-full transition-all duration-1000"
                         style="width:80%"></div>
                </div>

                <p class="mt-6 text-lg text-gray-600">
                    The transition trend reflects a strong regional appetite for renewal.
                </p>

            </div>

        </div>
    </section>


    <!-- ================= COUNTY TRANSITION EXPERIENCE ================= -->
    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-6 md:px-12">

            <h2 class="text-4xl font-bold text-center text-kuppet-green-dark mb-16">
                County Transition Dashboard
            </h2>

            <div class="space-y-24">

                @foreach($counties as $index => $county)

                <div 
                    x-data="{ showIn: true }"
                    class="bg-white rounded-3xl shadow-2xl p-10 relative overflow-hidden"
                    data-aos="fade-up"
                    data-aos-delay="{{ $index * 100 }}"
                >

                    <!-- Header -->
                    <div class="flex flex-col md:flex-row justify-between md:items-center mb-10 gap-6">
                        <h3 class="text-3xl font-extrabold uppercase text-kuppet-green-dark">
                            {{ $county['name'] }}
                        </h3>

                        <span class="flex items-center gap-2 px-6 py-2 rounded-full bg-green-100 text-green-700 font-semibold">
                            <i class='bx bx-line-chart text-xl'></i>
                            {{ $county['status'] }}
                        </span>
                    </div>


                    <!-- Toggle Buttons -->
                    <div class="flex justify-center mb-12">
                        <div class="bg-gray-100 rounded-full p-2 flex gap-2 shadow-inner">

                            <button 
                                @click="showIn = true"
                                :class="showIn ? 'bg-green-600 text-white shadow-lg' : 'text-gray-600'"
                                class="px-6 py-2 rounded-full font-semibold transition-all duration-300 flex items-center gap-2">
                                <i class='bx bx-user-check'></i>
                                Incoming
                            </button>

                            <button 
                                @click="showIn = false"
                                :class="!showIn ? 'bg-red-600 text-white shadow-lg' : 'text-gray-600'"
                                class="px-6 py-2 rounded-full font-semibold transition-all duration-300 flex items-center gap-2">
                                <i class='bx bx-user-x'></i>
                                Incumbents (Outgoing)
                            </button>

                        </div>
                    </div>


                    <div class="grid md:grid-cols-2 gap-12 items-center">

                        <!-- SVG SHIFT RING -->
                        <div class="flex justify-center">
                            <svg width="200" height="200" viewBox="0 0 120 120">
                                <circle cx="60" cy="60" r="50"
                                        stroke="#e5e7eb"
                                        stroke-width="10"
                                        fill="none"/>
                                <circle cx="60" cy="60" r="50"
                                        stroke="#16a34a"
                                        stroke-width="10"
                                        fill="none"
                                        stroke-dasharray="314"
                                        stroke-dashoffset="62"
                                        stroke-linecap="round"
                                        transform="rotate(-90 60 60)"/>
                                <text x="50%" y="50%" text-anchor="middle" dy=".3em"
                                      class="text-2xl font-bold fill-green-700">
                                    80%
                                </text>
                            </svg>
                        </div>


                        <!-- Dynamic Content -->
                        <div>

                            <!-- INCOMING -->
                            <div x-show="showIn" x-transition.opacity.duration.500ms class="space-y-4">
                                <h4 class="text-2xl font-bold text-green-700 flex items-center gap-2 mb-4">
                                    <i class='bx bx-up-arrow-alt text-3xl'></i>
                                    Incoming Leadership
                                </h4>

                                @foreach($county['details'] as $detail)
                                    @if(str_contains($detail, 'In'))
                                        <div class="flex items-start gap-4 p-4 bg-green-50 rounded-xl border-l-4 border-green-600 shadow-sm">
                                            <i class='bx bx-check-circle text-green-600 text-2xl mt-1'></i>
                                            <span class="text-gray-700 font-medium">
                                                {{ $detail }}
                                            </span>
                                        </div>
                                    @endif
                                @endforeach
                            </div>


                            <!-- OUTGOING INCUMBENTS -->
                            <div x-show="!showIn" x-transition.opacity.duration.500ms class="space-y-4">
                                <h4 class="text-2xl font-bold text-red-700 flex items-center gap-2 mb-4">
                                    <i class='bx bx-down-arrow-alt text-3xl'></i>
                                    Incumbents (Outgoing)
                                </h4>

                                @foreach($county['details'] as $detail)
                                    @if(str_contains($detail, 'Out'))
                                        <div class="flex items-start gap-4 p-4 bg-red-50 rounded-xl border-l-4 border-red-600 shadow-sm">
                                            <i class='bx bx-x-circle text-red-600 text-2xl mt-1'></i>
                                            <span class="text-gray-700 font-medium">
                                                {{ $detail }}
                                            </span>
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                        </div>

                    </div>

                </div>

                @endforeach

            </div>

        </div>
    </section>


    <!-- ================= REGIONAL PATTERN ================= -->
    <section class="py-24 bg-kuppet-green-light text-center">
        <div class="container mx-auto px-6 md:px-12">

            <h2 class="text-4xl font-bold text-kuppet-green-dark mb-8">
                The Regional Pattern
            </h2>

            <p class="text-xl text-gray-700 max-w-3xl mx-auto leading-relaxed">
                Across multiple counties, leadership renewal has taken precedence.
                The shift reflects a broader transition narrative shaping the region’s direction.
            </p>

        </div>
    </section>


    <!-- ================= HOMABAY ================= -->
    <section class="relative py-28 bg-kuppet-green-dark text-white text-center overflow-hidden">

        <div class="absolute inset-0 bg-gradient-to-b from-black/70 to-kuppet-green-dark"></div>

        <div class="relative container mx-auto px-6 md:px-12">

            <h2 class="text-5xl font-extrabold uppercase mb-8">
                Homabay: The Final Chapter
            </h2>

            <p class="text-xl max-w-3xl mx-auto mb-10 leading-relaxed text-gray-200">
                With elections previously postponed, Homabay now stands
                at a defining crossroads in the regional transition story.
            </p>

            <div class="inline-flex items-center gap-3 bg-kuppet-yellow text-kuppet-green-dark px-10 py-4 rounded-full font-bold shadow-xl">
                <i class='bx bx-map'></i>
                The Next Decision Shapes the Future
            </div>

        </div>
    </section>

</div>
