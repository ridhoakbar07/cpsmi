<header id="main-navbar"
    class="sticky top-0 z-50 bg-transparent dark:bg-gray-900 backdrop-blur-xl transition-all duration-300 shadow-sm">
    <div class="absolute inset-0 -z-10">
        <div class="w-full h-full"
            style="background:rgba(244, 247, 255, 0.1);backdrop-filter:blur(36px);-webkit-backdrop-filter:blur(36px);">
        </div>
    </div>
    <nav class="container mx-auto flex items-center justify-between py-4 px-6">
        <a href="#"
            class="flex items-center text-gray-900 dark:text-blue-100 tracking-tight hover:font-bold hover:text-blue-900 dark:hover:text-blue-200 transition-all delay-100 duration-100 ease-in-out hover:scale-110">
            <img id="navbar-logo-img" src="{{ asset('/storage/assets/logo.png') }}"
                class="mr-3 h-6 sm:h-9 hidden md:inline" alt="Logo PT" />
            <span id="navbar-logo-text"
                class="self-center text-pretty text-md text-pretty lg:text-xl font-semibold whitespace-nowrap">Inayah
                Bintang Borneo</span>
        </a>

        <!-- Menu Desktop -->
        <div class="hidden lg:flex flex-1 justify-center items-center" id="main-menu">
            <ul class="flex flex-col mt-4 font-semibold lg:flex-row lg:space-x-8 lg:mt-0">
                <li>
                    <a href="{{ route('home') }}"
                        class="block py-2 text-gray-900 dark:text-blue-100 tracking-tight hover:animate-[pulse_1s_ease-in-out] hover:font-bold hover:text-blue-900 dark:hover:text-blue-200 transition delay-100 duration-300 ease-in-out hover:scale-110"
                        aria-current="page">Beranda</a>
                </li>
                <li>
                    <a href="{{ route('about-us') }}"
                        class="block py-2 text-gray-900 dark:text-blue-100 tracking-tight hover:animate-[pulse_1s_ease-in-out] hover:font-bold hover:text-blue-900 dark:hover:text-blue-200 transition delay-100 duration-100 ease-in-out hover:scale-110">Tentang
                        Kami</a>
                </li>
                <li>
                    <a href="{{ route('services') }}"
                        class="block py-2 text-gray-900 dark:text-blue-100 tracking-tight hover:animate-[pulse_1s_ease-in-out] hover:font-bold hover:text-blue-900 dark:hover:text-blue-200 transition delay-100 duration-100 ease-in-out hover:scale-110">Layanan</a>
                </li>
                <li>
                    <a href="{{ route('blogs') }}"
                        class="block py-2 text-gray-900 dark:text-blue-100 tracking-tight hover:animate-[pulse_1s_ease-in-out] hover:font-bold hover:text-blue-900 dark:hover:text-blue-200 transition delay-100 duration-100 ease-in-out hover:scale-110">Blogs</a>
                </li>
                <li>
                    <a href="{{ route('activity') }}"
                        class="block py-2 text-gray-900 dark:text-blue-100 tracking-tight hover:animate-[pulse_1s_ease-in-out] hover:font-bold hover:text-blue-900 dark:hover:text-blue-200 transition delay-100 duration-100 ease-in-out hover:scale-110">Aktivitas</a>
                </li>
                <li>
                    <a href="{{ route('contact-us') }}"
                        class="block py-2 text-gray-900 dark:text-blue-100 tracking-tight hover:animate-[pulse_1s_ease-in-out] hover:font-bold hover:text-blue-900 dark:hover:text-blue-200 transition delay-100 duration-100 ease-in-out hover:scale-110">Contact</a>
                </li>
            </ul>
        </div>

        <div class="flex items-center space-x-1">
            <button id="theme-toggle" type="button"
                class="rounded-full text-gray-900 dark:text-blue-100 hover:text-gray-800 dark:hover:text-blue-200 text-sm p-1 transition delay-150 duration-300 ease-in-out hover:scale-110">
                <svg id="theme-toggle-dark-icon"
                    class="hidden w-6 h-6 mr-2 hover:animate-[spin_2s_ease-in-out] tracking-tight hover:font-bold hover:text-blue-900 dark:hover:text-blue-200 transition-all delay-100 duration-100 ease-in-out hover:scale-110"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="theme-toggle-light-icon"
                    class="hidden w-6 h-6 mr-2 hover:animate-[spin_2s_ease-in-out] tracking-tight hover:font-bold hover:text-blue-900 dark:hover:text-blue-200 transition-all delay-100 duration-100 ease-in-out hover:scale-110"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
            </button>
            <button id="hamburger-btn"
                class="lg:hidden flex items-center px-3 py-2 border rounded text-gray-900 dark:text-blue-100 border-gray-400 dark:border-gray-600 focus:outline-none"
                aria-label="Open Menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <div class="hidden lg:block">
                @auth
                    <div class="relative group">
                        <button type="button" class="flex items-center space-x-2 focus:outline-none">
                            <img class="w-9 h-9 rounded-full border-2 border-gray-300 dark:border-gray-600 object-cover"
                                src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=0D8ABC&color=fff"
                                alt="User avatar">
                            <svg class="w-4 h-4 ml-1 text-gray-500 dark:text-blue-100" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div
                            class="absolute right-0 mt-2 w-64 bg-white dark:bg-gray-800 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 group-focus:opacity-100 transition-opacity duration-150 z-50 text-gray-900 dark:text-blue-100 font-semibold">
                            <div class="px-4 py-3 border-b border-gray-200 dark:border-gray-700">
                                <div class="font-semibold text-gray-900 dark:text-blue-100">{{ Auth::user()->name }}</div>
                                <div class="text-sm text-gray-900 dark:text-blue-100">{{ Auth::user()->email }}</div>
                            </div>
                            <ul class="py-2 text-sm">
                                <li>
                                    <a href="#"
                                        class="flex items-center px-4 py-2 text-gray-900 dark:text-blue-100 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-blue-900 dark:hover:text-blue-200 transition">
                                        <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor"
                                            stroke-width="2" viewBox="0 0 24 24">
                                            <path d="M5.121 17.804A9 9 0 1112 21a8.963 8.963 0 01-6.879-3.196z"></path>
                                        </svg>
                                        My profile
                                    </a>
                                </li>
                            </ul>
                            <div class="border-t border-gray-200 dark:border-gray-700">
                                <form method="POST" action="">
                                    @csrf
                                    <button type="submit"
                                        class="w-full flex items-center px-4 py-2 text-left text-gray-900 dark:text-blue-100 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-blue-900 dark:hover:text-blue-200 transition duration-300 ease-in-out">
                                        <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor"
                                            stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17 16l4-4m0 0l-4-4m4 4H7"></path>
                                        </svg>
                                        Sign out
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <a href="{{ route('filament.admin.auth.login') }}"
                        class="flex items-center px-4 py-2 font-semibold text-gray-900 dark:text-blue-100 tracking-tight hover:font-bold hover:text-blue-900 dark:hover:text-blue-200 transition-all delay-100 duration-100 ease-in-out hover:scale-110">
                        <svg class="w-8 h-8 mr-1 rounded-full p-1" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" clip-rule="evenodd"
                                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                        Login
                    </a>
                @endauth
            </div>
    </nav>
</header>

<!-- Menu Mobile -->
<div id="mobile-menu"
    class="lg:hidden fixed left-0 top-0 right-0 z-50 bg-white dark:bg-gray-900 bg-opacity-95 dark:bg-opacity-95 backdrop-blur-xl transition-all duration-300 transform -translate-x-full"
    style="height: auto; max-height: 100dvh; overflow-y: auto;">
    <div
        class="sticky top-0 flex justify-between items-center px-6 py-4 border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 bg-opacity-95 dark:bg-opacity-95 backdrop-blur-xl z-10">
        <span class="text-md font-bold text-gray-900 dark:text-gray-100">Inayah Bintang Borneo</span>
        <button id="close-mobile-menu" class="text-gray-900 dark:text-blue-100 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    <ul class="flex flex-col mt-4 font-semibold space-y-2 px-6">
        <li>
            <a href="{{ route('home') }}"
                class="flex items-center gap-2 block py-2 text-gray-900 dark:text-blue-100 hover:font-bold hover:text-blue-900 dark:hover:text-blue-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                Beranda
            </a>
        </li>
        <li>
            <a href="{{ route('services') }}"
                class="flex items-center gap-2 block py-2 text-gray-900 dark:text-blue-100 hover:font-bold hover:text-blue-900 dark:hover:text-blue-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                </svg>
                Layanan
            </a>
        </li>
        <li>
            <a href="{{ route('activity') }}"
                class="flex items-center gap-2 block py-2 text-gray-900 dark:text-blue-100 hover:font-bold hover:text-blue-900 dark:hover:text-blue-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                </svg>
                Aktivitas
            </a>
        </li>
        <li>
            <a href="{{ route('contact-us') }}"
                class="flex items-center gap-2 block py-2 text-gray-900 dark:text-blue-100 hover:font-bold hover:text-blue-900 dark:hover:text-blue-200">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-5 h-5 text-gray-900 dark:text-blue-100 group-hover:text-blue-900 dark:group-hover:text-blue-200 transition"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-18 8V8a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                </svg>
                Contact
            </a>
        </li>
        @auth
            <li class="border-t border-gray-200 dark:border-gray-700 pt-4">
                <div class="flex items-center space-x-3 mb-2">
                    <img class="w-9 h-9 rounded-full border-2 border-gray-300 dark:border-gray-600 object-cover"
                        src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=0D8ABC&color=fff"
                        alt="User avatar">
                    <div>
                        <div class="font-semibold text-gray-900 dark:text-blue-100">{{ Auth::user()->name }}</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">{{ Auth::user()->email }}</div>
                    </div>
                </div>
                <a href="#"
                    class="flex items-center px-2 py-2 text-gray-900 dark:text-blue-100 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-blue-900 dark:hover:text-blue-200 rounded transition">
                    <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path d="M5.121 17.804A9 9 0 1112 21a8.963 8.963 0 01-6.879-3.196z"></path>
                    </svg>
                    My profile
                </a>
                <form method="POST" action="" class="mt-2">
                    @csrf
                    <button type="submit"
                        class="w-full flex items-center px-2 py-2 text-left text-gray-900 dark:text-blue-100 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-blue-900 dark:hover:text-blue-200 rounded transition">
                        <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7"></path>
                        </svg>
                        Sign out
                    </button>
                </form>
            </li>
        @else
            <li class="pt-4 border-t border-gray-200 dark:border-gray-700">
                <a href="{{ route('filament.admin.auth.login') }}"
                    class="flex items-center mb-2 px-2 py-2 font-semibold text-gray-900 dark:text-gray-100 hover:font-bold hover:text-blue-900 dark:hover:text-blue-200 rounded transition">
                    <svg class="w-8 h-8 mr-1 rounded-full p-1" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" clip-rule="evenodd"
                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                    Login
                </a>
            </li>
        @endauth
    </ul>
</div>

@push('scripts')
    <script>
        const navbar = document.getElementById('main-navbar');
        const logoImg = document.getElementById('navbar-logo-img');
        const logoText = document.getElementById('navbar-logo-text');
        window.addEventListener('scroll', function () {
            if (window.scrollY > 10) {
                navbar.classList.add('shadow-lg', 'bg-white/90', 'backdrop-blur', 'dark:bg-gray-900/90');
                if (logoImg) logoImg.classList.add('hidden');
                if (logoText) logoText.style.transform = 'scale(1.10)';
            } else {
                navbar.classList.remove('shadow-lg', 'bg-white/90', 'backdrop-blur', 'dark:bg-gray-900/90');
                if (logoImg) logoImg.classList.remove('hidden');
                if (logoText) logoText.style.transform = 'scale(1)';
            }
        });

        const themeToggle = document.getElementById('theme-toggle');
        const darkIcon = document.getElementById('theme-toggle-dark-icon');
        const lightIcon = document.getElementById('theme-toggle-light-icon');

        if (
            localStorage.getItem('theme') === 'dark' ||
            (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)
        ) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }

        function updateThemeIcons() {
            if (document.documentElement.classList.contains('dark')) {
                darkIcon.classList.remove('hidden');
                lightIcon.classList.add('hidden');
            } else {
                lightIcon.classList.remove('hidden');
                darkIcon.classList.add('hidden');
            }
        }

        updateThemeIcons();

        themeToggle.addEventListener('click', function () {
            document.documentElement.classList.toggle('dark');
            if (document.documentElement.classList.contains('dark')) {
                localStorage.setItem('theme', 'dark');
            } else {
                localStorage.setItem('theme', 'light');
            }
            updateThemeIcons();
        });

        const hamburgerBtn = document.getElementById('hamburger-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const closeMobileMenu = document.getElementById('close-mobile-menu');

        hamburgerBtn.addEventListener('click', function () {
            mobileMenu.classList.remove('-translate-x-full');
            mobileMenu.classList.add('translate-x-0');
            navbar.classList.add('hidden');
        });

        closeMobileMenu.addEventListener('click', function () {
            mobileMenu.classList.add('-translate-x-full');
            mobileMenu.classList.remove('translate-x-0');
            navbar.classList.remove('hidden');
        });

        document.addEventListener('click', function (e) {
            if (!mobileMenu.contains(e.target) && !hamburgerBtn.contains(e.target)) {
                mobileMenu.classList.add('-translate-x-full');
                mobileMenu.classList.remove('translate-x-0');
                navbar.classList.remove('hidden');
            }
        });
    </script>
@endpush