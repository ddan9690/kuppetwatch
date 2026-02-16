@section('title', 'Nyanza Leadership Dashboard 2026–2031 | Reform Momentum Across Counties')

<div class="bg-gray-50">

    <!-- HERO SECTION -->
    <section class="relative py-28 bg-kuppet-green-dark text-white text-center overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-kuppet-green-dark"></div>
        <div class="relative container mx-auto px-6 md:px-12" data-aos="fade-up">

            <h1 class="text-5xl md:text-7xl font-extrabold uppercase tracking-wide leading-tight">
                Nyanza Leadership Dashboard
            </h1>

            <p class="mt-6 text-xl md:text-2xl max-w-3xl mx-auto text-gray-200">
                The 2026 KUPPET elections have sent a resounding signal: the teachers of Nyanza are calling for 
                change, transparency, and a new leadership era. Migori, Kisumu, and Siaya have set the pace. 
                The region watches, the momentum builds.
            </p>

            <div class="mt-10 inline-flex items-center gap-3 bg-kuppet-yellow text-kuppet-green-dark px-8 py-3 rounded-full font-bold shadow-xl">
                <i class='bx bx-line-chart text-2xl'></i>
                Reform Momentum Across Nyanza
            </div>

        </div>
    </section>

    <!-- ================= PRIORITY COUNTY CHARTS & INFO ================= -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6 md:px-12">

            <h2 class="text-4xl font-bold text-kuppet-green-dark text-center mb-16">
                Key County Results: Migori, Kisumu, Siaya
            </h2>

            <p class="text-center text-gray-700 max-w-3xl mx-auto mb-12">
                These counties have experienced decisive leadership changes. 
                The numbers show clear support for reform-minded candidates who prioritize teachers' voices, 
                transparency, and accountability. The pattern is unmistakable.
            </p>

            <div class="grid md:grid-cols-3 gap-12 mb-20">

                @foreach([
                    'Migori' => ['Henry Otunga' => 1497, 'Orwa Jasolo' => 765],
                    'Kisumu' => ['George Osura' => 1965, 'Zablon Awange' => 557, 'Chris Masai' => 86],
                    'Siaya' => ['Agot' => 1021, 'Opondo' => 999]
                ] as $county => $results)

                <div class="bg-gray-50 p-6 rounded-3xl shadow-xl text-center">

                    <h3 class="text-2xl font-bold mb-6 text-kuppet-green-dark">{{ $county }}</h3>

                    <canvas id="chart-{{ strtolower($county) }}" height="200"></canvas>

                    <table class="w-full mt-6 text-left table-auto border-collapse">
                        <tbody>
                            @php $maxVotes = max($results); @endphp
                            @foreach($results as $candidate => $votes)
                            <tr class="hover:bg-gray-100 transition">
                                <td class="px-3 py-2">{{ $candidate }}</td>
                                <td class="px-3 py-2">{{ $votes }}</td>
                                <td class="px-3 py-2 text-center">
                                    @if($votes === $maxVotes)
                                        <i class='bx bx-check-circle text-green-600 text-2xl'></i>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <p class="mt-4 text-gray-700 text-sm">
                        This county demonstrates a clear shift toward candidates aligned with reform principles. 
                        Outgoing leaders, once dominant, are now being replaced by a new wave of teachers’ representatives.
                    </p>

                </div>

                @endforeach

            </div>
        </div>
    </section>

    <!-- ================= OTHER COUNTIES ================= -->
    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-6 md:px-12">

            <h2 class="text-4xl font-bold text-kuppet-green-dark text-center mb-16">
                Other County Results
            </h2>

            <p class="text-center text-gray-700 max-w-3xl mx-auto mb-12">
                While priority counties lead the trend, other counties such as Kisii, Vihiga, and Nairobi 
                reflect a similar momentum. Green ticks highlight reform leaders gaining support.
            </p>

            <div class="grid md:grid-cols-3 gap-12">

                @foreach([
                    'Kisii' => ['Kenyanchui' => 1213, 'Abincha' => 834],
                    'Vihiga' => ['Charles Otiende' => 1704, 'Wilson Okutoyi' => 341],
                    'Nairobi' => ['Isaac Masenge' => 1235, 'Moses Mbora' => 1141],
                ] as $county => $results)

                <div class="bg-white p-6 rounded-3xl shadow-xl text-center">
                    <h3 class="text-2xl font-bold mb-6 text-kuppet-green-dark">{{ $county }}</h3>
                    <canvas id="chart-{{ strtolower($county) }}" height="200"></canvas>

                    <table class="w-full mt-6 text-left table-auto border-collapse">
                        <tbody>
                            @php $maxVotes = max($results); @endphp
                            @foreach($results as $candidate => $votes)
                            <tr class="hover:bg-gray-100 transition">
                                <td class="px-3 py-2">{{ $candidate }}</td>
                                <td class="px-3 py-2">{{ $votes }}</td>
                                <td class="px-3 py-2 text-center">
                                    @if($votes === $maxVotes)
                                        <i class='bx bx-check-circle text-green-600 text-2xl'></i>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                @endforeach

            </div>
        </div>
    </section>

    <!-- ================= HOMABAY PREDICTION ================= -->
    <section class="py-28 bg-kuppet-green-dark text-white text-center relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-black/70 to-kuppet-green-dark"></div>

        <div class="relative container mx-auto px-6 md:px-12" data-aos="fade-up">
            <h2 class="text-5xl font-extrabold uppercase mb-8">
                Homabay: The Pivotal Moment
            </h2>

            <p class="text-xl max-w-3xl mx-auto mb-6 leading-relaxed text-gray-200">
                Migori, Kisumu, and Siaya have demonstrated the desire for change. 
                Teachers have spoken; the wave of reform is real.  
                Homabay is the next frontier, poised at a defining moment.  
            </p>

            <p class="text-lg max-w-3xl mx-auto mb-10 leading-relaxed text-gray-300">
                The neighboring counties have embraced new leadership. Homabay’s teachers are watching, 
                ready to continue the momentum. The reform wave cannot be ignored.
            </p>

            <div class="inline-flex items-center gap-3 bg-kuppet-yellow text-kuppet-green-dark px-10 py-4 rounded-full font-bold shadow-xl mb-10">
                <i class='bx bx-bullseye'></i>
                The Future Awaits Homabay
            </div>

            <p class="text-2xl md:text-3xl font-extrabold uppercase leading-relaxed max-w-3xl mx-auto">
                Is this the Change moment in Homabay?  
                Is <span class="text-kuppet-yellow">Tom Thomas</span> poised to take the reins of office.
            </p>

        </div>
    </section>

</div>

<!-- ================= CHARTS ================= -->
<script>
window.addEventListener('DOMContentLoaded', () => {
    const counties = {
        'migori': { labels: ['Henry Otunga','Orwa Jasolo'], data: [1497,765] },
        'kisumu': { labels: ['George Osura','Zablon Awange','Chris Masai'], data: [1965,557,86] },
        'siaya': { labels: ['Agot','Opondo'], data: [1021,999] },
        'kisii': { labels: ['Kenyanchui','Abincha'], data: [1213,834] },
        'vihiga': { labels: ['Charles Otiende','Wilson Okutoyi'], data: [1704,341] },
        'nairobi': { labels: ['Isaac Masenge','Moses Mbora'], data: [1235,1141] },
    };

    Object.keys(counties).forEach(county => {
        const canvas = document.getElementById(`chart-${county}`);
        if(!canvas) return;
        const ctx = canvas.getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: counties[county].labels,
                datasets: [{
                    label: 'Votes',
                    data: counties[county].data,
                    backgroundColor: counties[county].data.map(v => v === Math.max(...counties[county].data) ? '#16a34a' : '#dc2626')
                }]
            },
            options: {
                responsive: true,
                plugins: { legend: { display: false } },
                scales: { y: { beginAtZero: true } }
            }
        });
    });
});
</script>
