<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'My Laravel App' }}</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />

    @stack('styles')
</head>

<body class="bg-gray-100 text-gray-900">

    <x-navbar />

    <main class="container-fluid mx-auto">
        {{ $slot }}
    </main>

    <x-footer />

    @stack('scripts')
</body>

</html>
