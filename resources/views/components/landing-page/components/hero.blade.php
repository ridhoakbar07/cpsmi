<div
    class="flex flex-col-reverse lg:flex-row items-center justify-between min-h-[50vh] sm:min-h-screen py-12 sm:py-24 lg:py-32 gap-8">
    <div class="container mx-auto flex flex-col-reverse lg:flex-row items-center w-full">
        <div class="flex flex-col lg:items-start text-center lg:text-left w-full lg:w-1/2 items-center">
            <h1
                class="text-5xl md:text-6xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent mb-4">
                <span id="typed-text"></span>
            </h1>
            <p
                class="mt-8 text-lg font-medium tracking-tight bg-gradient-to-r from-blue-400 to-blue-600 dark:from-blue-300 dark:to-blue-900 text-transparent bg-clip-text sm:text-xl">
            </p>
            Kami berkomitmen menjadi perusahaan ekspedisi terdepan yang mengutamakan kecepatan, keamanan, dan
            kepuasan pelanggan dalam pengiriman barang ke seluruh Indonesia hingga internasional.
            </p>
            <div class="mt-10 flex gap-x-6 lg:justify-start justify-center items-center">
                <a href="{{ route('services') }}"
                    class="rounded-md bg-blue-600 px-3.5 py-2.5 text-sm font-semibold text-gray-900 dark:text-blue-100 shadow hover:bg-blue-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
                    Layanan Kami
                </a>
            </div>
        </div>
        <div class="flex items-center justify-center mb-8 lg:mb-0 w-full lg:w-1/2">
            <iframe width="100%" height="315" class="max-w-[480px] rounded-xl shadow-lg"
                src="https://www.youtube.com/embed/V1LK1IyYqDc?si=x_nJNDnASBOcWTRu" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const text = "Menuju Ekspedisi Terkemuka, Cepat & Aman";
            const typedText = document.getElementById('typed-text');
            let i = 0;

            function type() {
                if (i < text.length) {
                    typedText.textContent += text.charAt(i);
                    i++;
                    setTimeout(type, 60);
                }
            }
            type();
        });
    </script>
@endpush
