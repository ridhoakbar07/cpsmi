<x-landing-page.layouts.app :title="'Selamat Datang di PT. Inayah Bintang Borneo'" :webProfile="$webProfiles">
    {{-- Navbar --}}
    {{-- Hero Section --}}
    <x-landing-page.components.hero />

    {{-- Feature and Pricing --}}
    <div class="flex flex-col items-center justify-center">
        <div class="container w-auto mx-auto rounded-3xl relative overflow-hidden">

            {{-- Feature Section --}}
            <x-landing-page.components.visi-misi :webProfile="$webProfiles"/>

            {{-- Service Section --}}
            <x-landing-page.components.pricing />

            {{-- Service Section --}}
            <x-landing-page.components.faq />
        </div>
    </div>

    {{-- Blog Section --}}
    <x-landing-page.components.blogs.card :posts="$posts"/>
</x-landing-page.layouts.app>
