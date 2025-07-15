<x-landing-page.layouts.app :title="'Layanan | PT. Inayah Bintang Borneo'">
    <!-- Hero Background with Animated Gradient -->
    <div class="relative">
        <div class="relative container mx-auto px-4 py-16">
            <!-- Header Section -->
            <div class="mx-auto max-w-4xl text-center mb-20">
                <div
                    class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-blue-500 to-purple-600 rounded-2xl mb-6 shadow-lg">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20 7l-8-4-8 4m16 0l-8 4-8-4m16 0v10l-8 4-8-4V7" />
                    </svg>
                </div>
                <h1
                    class="text-5xl md:text-6xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent mb-6">
                    Layanan Trucking Container
                </h1>
                <div
                    class="bg-white/60 dark:bg-gray-800/60 backdrop-blur-xl border border-white/20 dark:border-gray-700/30 rounded-3xl p-8 shadow-xl">
                    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                        <span class="font-semibold text-blue-600 dark:text-blue-400">PT Inayah Bintang Borneo</span>
                        menyediakan layanan trucking container
                        profesional untuk <span class="font-semibold text-purple-600 dark:text-purple-400">container
                            20ft dan 40ft</span> dengan coverage area seluruh Indonesia.
                    </p>
                    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed">
                        Dengan <span class="font-semibold text-indigo-600 dark:text-indigo-400">armada truck modern dan
                            driver berpengalaman</span>,
                        kami memastikan pengiriman container Anda aman, tepat waktu, dan sesuai standar internasional.
                    </p>
                </div>
            </div>

            <!-- Services Introduction -->
            <div class="mx-auto max-w-2xl text-center mb-16">
                <div
                    class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-600 rounded-2xl mb-6 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                    </svg>
                </div>
                <h2
                    class="text-4xl font-bold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent mb-4">
                    Jenis Container yang Kami Handle
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300">Pilih ukuran container yang sesuai dengan kebutuhan
                    kargo Anda</p>
            </div>

            <!-- Container Services Grid -->
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
                    
                    <x-landing-page.components.pricing />
                    
                    <!-- Additional Services Section -->
                    <div
                        class="bg-white/60 dark:bg-gray-800/60 backdrop-blur-xl border border-white/20 dark:border-gray-700/30 rounded-3xl p-8 shadow-xl mb-16">
                        <div class="text-center mb-12">
                            <h3 class="text-3xl font-bold text-gray-800 dark:text-white mb-4">Keunggulan Layanan Kami
                            </h3>
                            <p class="text-gray-600 dark:text-gray-300 text-lg">Komitmen untuk memberikan layanan
                                trucking container terbaik</p>
                        </div>

                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <!-- Fleet Modern -->
                            <div class="text-center group">
                                <div
                                    class="w-20 h-20 bg-gradient-to-r from-emerald-500 to-teal-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                    </svg>
                                </div>
                                <h4 class="text-xl font-bold text-gray-800 dark:text-white mb-2">Armada Modern</h4>
                                <p class="text-gray-600 dark:text-gray-300">Truck container dengan teknologi terbaru dan
                                    terawat</p>
                            </div>

                            <!-- Professional Driver -->
                            <div class="text-center group">
                                <div
                                    class="w-20 h-20 bg-gradient-to-r from-amber-500 to-orange-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <h4 class="text-xl font-bold text-gray-800 dark:text-white mb-2">Driver Profesional</h4>
                                <p class="text-gray-600 dark:text-gray-300">Pengemudi bersertifikat dengan pengalaman
                                    bertahun-tahun</p>
                            </div>

                            <!-- Real-time Tracking -->
                            <div class="text-center group">
                                <div
                                    class="w-20 h-20 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <h4 class="text-xl font-bold text-gray-800 dark:text-white mb-2">Real-time Tracking</h4>
                                <p class="text-gray-600 dark:text-gray-300">Monitor perjalanan container secara
                                    real-time</p>
                            </div>

                            <!-- 24/7 Support -->
                            <div class="text-center group">
                                <div
                                    class="w-20 h-20 bg-gradient-to-r from-rose-500 to-pink-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M12 2.25A9.75 9.75 0 1021.75 12 9.75 9.75 0 0012 2.25z" />
                                    </svg>
                                </div>
                                <h4 class="text-xl font-bold text-gray-800 dark:text-white mb-2">Support 24/7</h4>
                                <p class="text-gray-600 dark:text-gray-300">Customer service siap melayani sepanjang
                                    waktu</p>
                            </div>
                        </div>
                    </div>

                    <!-- Contact CTA -->
                    <div class="text-center">
                        <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-3xl p-8 text-white shadow-xl">
                            <h3 class="text-3xl font-bold mb-4">Butuh Layanan Trucking Container?</h3>
                            <p class="text-xl mb-8 opacity-90">Hubungi tim kami untuk konsultasi dan penawaran terbaik
                                sesuai kebutuhan Anda</p>

                            <div class="grid md:grid-cols-2 gap-6 max-w-2xl mx-auto">
                                <a href="/contact-us"
                                    class="group relative overflow-hidden rounded-xl bg-white/20 backdrop-blur-sm px-8 py-4 font-semibold hover:bg-white/30">
                                    <span class="relative z-10 flex items-center justify-center text-white">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                        Hubungi Kami
                                    </span>
                                </a>
                                <a href="https://wa.me/6281234567890?text=Halo%20PT%20Inayah%20Bintang%20Borneo,%20saya%20membutuhkan%20layanan%20trucking%20container"
                                    target="_blank"
                                    class="group relative overflow-hidden rounded-xl bg-green-600 px-8 py-4 font-semibold hover:bg-green-500 shadow-lg">
                                    <span class="relative z-10 flex items-center justify-center text-white">
                                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
                                        </svg>
                                        Chat WhatsApp
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-landing-page.layouts.app>
