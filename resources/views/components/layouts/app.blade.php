<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $attributes->get('title', $title ?? 'My Laravel App') }}</title>
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('/storage/assets/logo.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

    @stack('styles')
</head>

<body class="bg-gray-100 text-gray-900 backdrop-blur-xs backdrop-sepia-30"
    style="background-image: url('{{ asset('/storage/assets/background.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">

    <x-navbar />
    <main class="container-fluid mx-auto">
        <div class="pointer-events-none fixed inset-x-0 top-0 left-0 right-0 -z-10 overflow-hidden blur-3xl w-full h-full"
            aria-hidden="true" style="position: fixed;">
            <div
                class="relative aspect-[1155/678] bg-gradient-to-b from-slate-50 from-0% via-cyan-50 via-25% to-blue-100 to-100% opacity-50%">
            </div>
        </div>
        {{ $slot }}

        <button
            class="fixed right-8 bottom-8 z-50 p-3 rounded-full bg-blue-600 text-white shadow-lg hover:bg-blue-700 transition-all focus:outline-none"
            aria-label="Scroll to top" onclick="window.scrollTo({top: 0, behavior: 'smooth'});">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
            </svg>
        </button>
    </main>

    <x-footer />

    {{--
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script> --}}
    @stack('scripts')
</body>

</html>
