<x-layouts.app :title="'Selamat Datang di PT. Inayah Bintang Borneo'">
    {{-- Hero Section --}}
    <x-hero />

    {{-- Feature and Pricing --}}
    <div class="flex flex-col items-center justify-center">
        <div class="container w-auto mx-auto rounded-3xl relative overflow-hidden">

            {{-- Feature Section --}}
            <x-visi-misi />

            {{-- Pricing Section --}}
            <x-pricing />
        </div>
    </div>

    {{-- Blog Section --}}
    <x-artikel />
</x-layouts.app>