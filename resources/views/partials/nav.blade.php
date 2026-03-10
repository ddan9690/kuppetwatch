<nav class="bg-primary text-white shadow-lg border-b border-secondary/20"
     x-data="{ open:false }">

    <div class="max-w-7xl mx-auto px-4 lg:px-8">
        <div class="flex justify-between items-center h-16">

            {{-- Logo + Title --}}
            <div class="flex items-center space-x-3">
                <a href="/" class="flex items-center space-x-3">

                    <img src="{{ asset('images/kuppet-logo.jpg') }}"
                         alt="KUPPET Logo"
                         class="h-10 w-auto">

                    <div class="hidden sm:block leading-tight">
                        <h1 class="text-sm font-bold tracking-wide">
                            KUPPET
                        </h1>

                        <p class="text-xs text-secondary font-medium">
                            Homa Bay Branch
                        </p>
                    </div>

                </a>
            </div>


            {{-- Desktop Navigation --}}
            <ul class="hidden md:flex items-center space-x-8 font-semibold text-sm">

                <li>
                    <a href="/"
                       class="hover:text-secondary transition duration-200">
                        Home
                    </a>
                </li>

                <li>
                    <a href="/updates"
                       class="hover:text-secondary transition duration-200">
                        Updates
                    </a>
                </li>

                <li>
                    <a href="/branch"
                       class="hover:text-secondary transition duration-200">
                        Branch Leadership
                    </a>
                </li>

                <li>
                    <a href="/resources"
                       class="hover:text-secondary transition duration-200">
                        Teacher Resources
                    </a>
                </li>

                <li>
                    <a href="/contact"
                       class="hover:text-secondary transition duration-200">
                        Contact
                    </a>
                </li>


                {{-- Support CTA --}}
                <li>
                    <a href="/member-support"
                       class="bg-secondary text-primary px-4 py-2 rounded-lg font-bold hover:bg-secondary/90 transition">
                        Get Support
                    </a>
                </li>


                {{-- LOGIN (Guest Only) --}}
                @guest
                <li>
                    <a href=""
                       class="border border-white px-4 py-2 rounded-lg hover:bg-white hover:text-primary transition">
                        Login
                    </a>
                </li>
                @endguest


                {{-- USER MENU (Authenticated Users) --}}
                @auth

                <li x-data="{ dropdown:false }" class="relative">

                    <button
                        @click="dropdown = !dropdown"
                        class="flex items-center space-x-2 hover:text-secondary transition">

                        <i class='bx bx-user text-lg'></i>

                        <span>
                            {{ Auth::user()->name }}
                        </span>

                        <i class='bx bx-chevron-down'></i>

                    </button>


                    {{-- Dropdown --}}
                    <div x-show="dropdown"
                         x-transition
                         @click.outside="dropdown = false"
                         class="absolute right-0 mt-3 w-48 bg-white text-gray-800 rounded-lg shadow-lg py-2">

                        <a href="/dashboard"
                           class="block px-4 py-2 hover:bg-gray-100">
                            Dashboard
                        </a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button
                                class="w-full text-left px-4 py-2 hover:bg-gray-100">
                                Logout
                            </button>
                        </form>

                    </div>

                </li>

                @endauth

            </ul>



            {{-- Mobile Hamburger --}}
            <button
                @click="open = !open"
                class="md:hidden focus:outline-none">

                <svg x-show="!open"
                     xmlns="http://www.w3.org/2000/svg"
                     class="h-7 w-7"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16" />
                </svg>


                <svg x-show="open"
                     xmlns="http://www.w3.org/2000/svg"
                     class="h-7 w-7"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M6 18L18 6M6 6l12 12" />

                </svg>

            </button>

        </div>
    </div>



    {{-- MOBILE MENU --}}
    <div x-show="open"
         x-transition
         @click.outside="open=false"
         class="md:hidden bg-primary border-t border-secondary/20">

        <ul class="flex flex-col space-y-4 px-6 py-6 font-semibold text-sm">

            <li>
                <a href="/" class="hover:text-secondary transition">
                    Home
                </a>
            </li>

            <li>
                <a href="/updates" class="hover:text-secondary transition">
                    Updates
                </a>
            </li>

            <li>
                <a href="/branch" class="hover:text-secondary transition">
                    Branch Leadership
                </a>
            </li>

            <li>
                <a href="/resources" class="hover:text-secondary transition">
                    Teacher Resources
                </a>
            </li>

            <li>
                <a href="/contact" class="hover:text-secondary transition">
                    Contact
                </a>
            </li>


            <li class="pt-2">
                <a href="/member-support"
                   class="block text-center bg-secondary text-primary py-2 rounded-lg font-bold">
                    Get Support
                </a>
            </li>


            {{-- LOGIN MOBILE --}}
            @guest
            <li>
                <a href=""
                   class="block text-center border border-white py-2 rounded-lg">
                    Login
                </a>
            </li>
            @endguest


            {{-- AUTH MOBILE --}}
            @auth

            <li>
                <a href="/dashboard"
                   class="hover:text-secondary transition">
                    Dashboard
                </a>
            </li>

            <li>
                <form method="POST" action="">
                    @csrf

                    <button class="text-left w-full hover:text-secondary">
                        Logout
                    </button>
                </form>
            </li>

            @endauth

        </ul>

    </div>

</nav>