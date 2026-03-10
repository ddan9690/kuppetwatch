<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'KUPPET Homa Bay Branch')</title>

    {{-- Favicons --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon/favicon.ico') }}" type="image/x-icon">

    {{-- Tailwind --}}
    @vite('resources/css/app.css')

    {{-- Livewire --}}
    @livewireStyles

    {{-- Alpine --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Icons --}}
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    {{-- Swiper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    {{-- Chart.js --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    {{-- GSAP --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

</head>

<body class="bg-gray-50 text-gray-800 font-sans min-h-screen flex flex-col antialiased">

    {{-- Navigation --}}
    @include('partials.nav')

    {{-- Page Content --}}
    <main class="flex-grow">

        {{ $slot ?? '' }}

    </main>

    {{-- Footer --}}
    @include('partials.footer')



    {{-- AOS Init --}}
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            AOS.init({
                once: true,
                duration: 800,
                easing: 'ease-in-out',
                offset: 100
            });

        });
    </script>



    {{-- GSAP Parallax --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            gsap.registerPlugin(ScrollTrigger);

            gsap.utils.toArray('.parallax').forEach((el) => {

                gsap.to(el, {
                    yPercent: 20,
                    ease: 'none',
                    scrollTrigger: {
                        trigger: el,
                        start: 'top bottom',
                        end: 'bottom top',
                        scrub: true
                    }
                });

            });

        });
    </script>



    {{-- Livewire --}}
    @livewireScripts

    {{-- Extra Scripts --}}
    @stack('scripts')

</body>
</html>