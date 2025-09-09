<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'KUPPETWatch')</title>

     <!-- Favicons -->
     <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
     <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
     <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
     <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}">
     <link rel="shortcut icon" href="{{ asset('images/favicon/favicon.ico') }}" type="image/x-icon">

    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')

    <!-- Livewire Styles -->
    @livewireStyles

    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Boxicons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

    <!-- Animate On Scroll -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
</head>
<body class="bg-kuppet-white text-kuppet-text font-sans min-h-screen flex flex-col">

    {{-- Header / Navigation --}}
    @include('partials.nav')

    {{-- Main Content --}}
    <main class="flex-grow">
        {{ $slot ?? '' }}
    </main>

    {{-- Footer --}}
    <footer class="bg-kuppet-green-dark text-kuppet-white py-6 mt-16">
        <div class="container mx-auto text-center">
            &copy; {{ date('Y') }} KUPPETWatch. All rights reserved.
        </div>
    </footer>

    {{-- Initialize AOS --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            AOS.init({
                once: true, // animations happen only once
                duration: 800,
                easing: 'ease-in-out',
            });
        });
    </script>

    <!-- Livewire Scripts -->
    @livewireScripts
</body>
</html>
