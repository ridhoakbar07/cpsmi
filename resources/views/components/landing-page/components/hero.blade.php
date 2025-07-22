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
            <div id="media-carousel"
                class="relative max-w-[480px] w-full h-[315px] rounded-xl shadow-lg overflow-hidden">
                <!-- Slides -->
                <div class="carousel-slide absolute inset-0 w-full h-full transition-opacity duration-500 opacity-100"
                    style="display: block;">
                    <video width="100%" height="315" class="w-full h-full object-cover" controls>
                        <source src="{{ asset('/storage/assets/banner/video.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="carousel-slide absolute inset-0 w-full h-full transition-opacity duration-500 opacity-0"
                    style="display: none;">
                    <img src="{{ asset('/storage/assets/banner/foto1.jpeg') }}" alt="Foto 1"
                        class="w-full h-full object-cover" />
                </div>
                <div class="carousel-slide absolute inset-0 w-full h-full transition-opacity duration-500 opacity-0"
                    style="display: none;">
                    <img src="{{ asset('/storage/assets/banner/foto2.jpeg') }}" alt="Foto 2"
                        class="w-full h-full object-cover" />
                </div>
                <div class="carousel-slide absolute inset-0 w-full h-full transition-opacity duration-500 opacity-0"
                    style="display: none;">
                    <img src="{{ asset('/storage/assets/banner/foto3.jpeg') }}" alt="Foto 3"
                        class="w-full h-full object-cover" />
                </div>
                <!-- Controls -->
                <button type="button" id="carousel-prev"
                    class="absolute left-2 top-1/2 -translate-y-1/2 bg-white/70 rounded-full p-2 shadow hover:bg-white z-10">
                    &#8592;
                </button>
                <button type="button" id="carousel-next"
                    class="absolute right-2 top-1/2 -translate-y-1/2 bg-white/70 rounded-full p-2 shadow hover:bg-white z-10">
                    &#8594;
                </button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Carousel logic only
            const slides = document.querySelectorAll('#media-carousel .carousel-slide');
            let current = 0;

            function showSlide(idx) {
                slides.forEach((slide, i) => {
                    slide.style.display = i === idx ? 'block' : 'none';
                    slide.style.opacity = i === idx ? '1' : '0';
                });
            }

            document.getElementById('carousel-prev').onclick = function () {
                current = (current - 1 + slides.length) % slides.length;
                showSlide(current);
            };
            document.getElementById('carousel-next').onclick = function () {
                current = (current + 1) % slides.length;
                showSlide(current);
            };

            showSlide(current);
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
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