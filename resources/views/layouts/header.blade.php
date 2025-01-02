<header id="header" class="fixed top-0 w-full bg-transparent transition-colors duration-300 z-20">
    <div class="font-bold flex items-center justify-between px-6 py-4">
        <img class="w-auto h-20" src="{{ asset('images/LOGO/f91ebe9b-1820-4007-bdb0-429a77f13f94-Photoroom2.png') }}"
            alt="Logo">

        <nav>
            <div class="hidden md:flex space-x-10 mr-20 text-gray-500">
                <nav class="flex space-x-6 items-center"> <!-- Tambahkan items-center -->
                    <!-- Menu Lain -->
                    <a href="{{ route('home') }}"
                        class="{{ Route::currentRouteName() === 'home' ? 'text-white border-b-2 border-yellow-600' : 'text-gray-400 hover:text-white hover:border-yellow-600' }} border-b-2 pb-2 border-transparent text-xl">
                        Home
                    </a>
                    <a href="{{ route('menu') }}"
                        class="{{ Route::currentRouteName() === 'menu' ? 'text-white border-b-2 border-yellow-600' : 'text-gray-400 hover:text-white hover:border-yellow-600' }} border-b-2 pb-2 border-transparent text-xl">
                        Menu
                    </a>
                    <a href="{{ route('photos') }}"
                        class="{{ Route::currentRouteName() === 'photos' ? 'text-white border-b-2 border-yellow-600' : 'text-gray-400 hover:text-white hover:border-yellow-600' }} border-b-2 pb-2 border-transparent text-xl">
                        Photos
                    </a>
                    <a href="{{ route('team') }}"
                        class="{{ Route::currentRouteName() === 'team' ? 'text-white border-b-2 border-yellow-600' : 'text-gray-400 hover:text-white hover:border-yellow-600' }} border-b-2 pb-2 border-transparent text-xl">
                        Team
                    </a>
                    <a href="{{ route('reservation') }}"
                        class="{{ Route::currentRouteName() === 'reservation' ? 'text-yellow-600 border-2 border-yellow-600' : 'text-yellow-600 hover:border-yellow-600' }} border-2 pb-2 border-yellow-600 px-4 py-2 text-xl">
                        Reservation
                    </a>
                </nav>
            </div>
        </nav>


        <div class="md:hidden">
            <button id="menu-toggle" class="text-white focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
        </nav>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-gray-800 text-white">
        <a href="" class="block px-4 py-2 hover:bg-gray-700">Home</a>
        <a href="" class="block px-4 py-2 hover:bg-gray-700">Menu</a>
        <a href="" class="block px-4 py-2 hover:bg-gray-700">Photos</a>
        <a href="" class="block px-4 py-2 hover:bg-gray-700">Team</a>
        <a href="" class="block px-4 py-2 hover:bg-gray-700">Reservation</a>
    </div>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

    <script>
        const header = document.getElementById('header');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.remove('bg-transparent');
                header.classList.add('bg-[rgba(7,7,7,255)]');
            } else {
                header.classList.remove('bg-[rgba(7,7,7,255)]');
                header.classList.add('bg-transparent');
            }
        });
    </script>
</header>
