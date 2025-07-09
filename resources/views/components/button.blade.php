@props(['link'])

<a href="{{ $link }}" class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
    {{ $slot }}
</a>
