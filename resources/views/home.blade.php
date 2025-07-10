<x-layouts.app :title="'Selamat Datang di PT. Inayah Bintang Borneo'">
    <style>
        .text-blue-900,
        .text-blue-900 * {
            color: #1b1b1f !important;
        }
    </style>
    {{-- Hero Section --}}
    <x-hero />

    {{-- Feature and Pricing --}}
    <div class="flex flex-col items-center justify-center">
        <div class="container w-auto mx-auto rounded-3xl relative overflow-hidden">
            <div class="absolute inset-0 -z-10">
                <div class="w-full h-full rounded-3xl opacity-70"
                    style="background:rgba(244,247,255,0.18);backdrop-filter:blur(36px);-webkit-backdrop-filter:blur(36px);">
                </div>
            </div>

            {{-- Feature Section --}}
            <x-feature />

            {{-- Pricing Section --}}
            <x-pricing />
        </div>
    </div>

    {{-- Blog Section --}}
    <x-artikel />
</x-layouts.app>
