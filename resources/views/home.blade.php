<<<<<<< HEAD
<x-layouts.app :title="'Selamat Datang di PT. Inayah Bintang Borneo'">
=======
<x-landing-page.layouts.app :title="'Selamat Datang di PT. Inayah Bintang Borneo'">
>>>>>>> dcd863326a13615bf16e80f23ab6a0bb215cb5cf
    {{-- Hero Section --}}
    <x-landing-page.components.hero />

    {{-- Feature and Pricing --}}
    <div class="flex flex-col items-center justify-center">
        <div class="container w-auto mx-auto rounded-3xl relative overflow-hidden">

            {{-- Feature Section --}}
            <x-landing-page.components.visi-misi />

            {{-- Service Section --}}
            <x-landing-page.components.pricing />
        </div>
    </div>

    {{-- Blog Section --}}
<<<<<<< HEAD
    <x-artikel />
</x-layouts.app>
=======
    <x-landing-page.components.artikel />
</x-landing-page.layouts.app>
>>>>>>> dcd863326a13615bf16e80f23ab6a0bb215cb5cf
