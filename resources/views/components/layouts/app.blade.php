<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $attributes->get('title', $title ?? 'My Laravel App') }}</title>
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('/storage/assets/logo.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />

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
        <div class="pointer-events-none fixed inset-x-0 top-0 left-0 right-0 -z-10 overflow-hidden blur-3xl w-full h-full" aria-hidden="true" style="position: fixed;">
            <div
            class="relative aspect-[1155/678] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 w-full h-full">
            </div>
        </div>
        {{ $slot }}
    </main>

    <x-footer />

    {{-- <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script> --}}
    @stack('scripts')
</body>

</html>
