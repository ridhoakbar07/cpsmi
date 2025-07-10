<x-layouts.app :title="'Visi - Misi | PT. Inayah Bintang Borneo'">

    <!-- Hero Background -->
    <div
        class="relative min-h-screen">

        <div class="relative container mx-auto px-4 py-16">

            <div class="isolate py-24 sm:py-32">
                <!-- Header Section -->
                <div class="mx-auto max-w-2xl text-center mb-16">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-blue-500 to-purple-600 rounded-2xl mb-6 shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <h1
                        class="text-5xl md:text-6xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent mb-4">
                        Visi & Misi
                    </h1>
                    <p class="text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                        Membangun masa depan logistik Indonesia dengan komitmen terhadap keunggulan dan inovasi
                    </p>
                </div>

                <!-- Main Content Grid -->
                <div class="grid lg:grid-cols-2 gap-8 mb-16">
                    <!-- Visi Card -->
                    <div class="group">
                        <div
                            class="relative h-full bg-white/80 dark:bg-gray-800/80 backdrop-blur-xl border border-white/20 dark:border-gray-700/30 rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                            <!-- Icon -->
                            <div class="flex items-center mb-6">
                                <div
                                    class="w-16 h-16 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-2xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                    </svg>
                                </div>
                                <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Visi</h2>
                            </div>

                            <!-- Content -->
                            <div class="relative">
                                <div
                                    class="absolute -left-4 top-0 w-1 h-full bg-gradient-to-b from-blue-500 to-indigo-600 rounded-full">
                                </div>
                                <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed font-medium">
                                    menjadi perusahaan
                                    ekspedisi yang terkemuka sehingga dapat menghadapi persaingan pasar
                                    dengan mengutamakan kecepatan, keamanan, dan kepuasan pelanggan
                                    dalam pengiriman barang di seluruh Indonesia hingga Internasional
                                </p>
                            </div>

                            <!-- Decorative Element -->
                            <div
                                class="absolute top-4 right-4 w-20 h-20 bg-gradient-to-r from-blue-500/10 to-indigo-600/10 rounded-full blur-xl group-hover:scale-150 transition-transform duration-500">
                            </div>
                        </div>
                    </div>

                    <!-- Misi Card -->
                    <div class="group">
                        <div
                            class="relative h-full bg-white/80 dark:bg-gray-800/80 backdrop-blur-xl border border-white/20 dark:border-gray-700/30 rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                            <!-- Icon -->
                            <div class="flex items-center mb-6">
                                <div
                                    class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                                <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Misi</h2>
                            </div>

                            <!-- Content -->
                            <div class="space-y-4">
                                <div class="flex items-start group/item">
                                    <div
                                        class="w-2 h-2 bg-gradient-to-r from-purple-500 to-pink-600 rounded-full mt-3 mr-4 group-hover/item:scale-150 transition-transform duration-300">
                                    </div>
                                    <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
                                        Memberikan layanan pengiriman yang cepat dan tepat waktu
                                    </p>
                                </div>
                                <div class="flex items-start group/item">
                                    <div
                                        class="w-2 h-2 bg-gradient-to-r from-purple-500 to-pink-600 rounded-full mt-3 mr-4 group-hover/item:scale-150 transition-transform duration-300">
                                    </div>
                                    <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
                                        Menjaga Kualitas Pelayanan
                                    </p>
                                </div>
                                <div class="flex items-start group/item">
                                    <div
                                        class="w-2 h-2 bg-gradient-to-r from-purple-500 to-pink-600 rounded-full mt-3 mr-4 group-hover/item:scale-150 transition-transform duration-300">
                                    </div>
                                    <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
                                        Menjamin Keamanan Barang
                                    </p>
                                </div>
                                <div class="flex items-start group/item">
                                    <div
                                        class="w-2 h-2 bg-gradient-to-r from-purple-500 to-pink-600 rounded-full mt-3 mr-4 group-hover/item:scale-150 transition-transform duration-300">
                                    </div>
                                    <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
                                        Harga yang Kompetitif
                                    </p>
                                </div>
                                <div class="flex items-start group/item">
                                    <div
                                        class="w-2 h-2 bg-gradient-to-r from-purple-500 to-pink-600 rounded-full mt-3 mr-4 group-hover/item:scale-150 transition-transform duration-300">
                                    </div>
                                    <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
                                        Transparansi Informasi
                                    </p>
                                </div>
                                <div class="flex items-start group/item">
                                    <div
                                        class="w-2 h-2 bg-gradient-to-r from-purple-500 to-pink-600 rounded-full mt-3 mr-4 group-hover/item:scale-150 transition-transform duration-300">
                                    </div>
                                    <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
                                        Pengoptimalan Kualitas Perusahaan
                                    </p>
                                </div>
                            </div>

                            <!-- Decorative Element -->
                            <div
                                class="absolute top-4 right-4 w-20 h-20 bg-gradient-to-r from-purple-500/10 to-pink-600/10 rounded-full blur-xl group-hover:scale-150 transition-transform duration-500">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Values Section -->
                <div
                    class="bg-white/60 dark:bg-gray-800/60 backdrop-blur-xl border border-white/20 dark:border-gray-700/30 rounded-3xl p-8 shadow-xl">
                    <div class="text-center mb-12">
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-white mb-4">Nilai-Nilai Perusahaan</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-lg">Fondasi yang memandu setiap langkah
                            perjalanan kami</p>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Integritas -->
                        <div class="text-center group">
                            <div
                                class="w-20 h-20 bg-gradient-to-r from-emerald-500 to-teal-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h4 class="text-xl font-bold text-gray-800 dark:text-white mb-2">Integritas</h4>
                            <p class="text-gray-600 dark:text-gray-300">Berkomitmen pada kejujuran dan transparansi</p>
                        </div>

                        <!-- Kualitas -->
                        <div class="text-center group">
                            <div
                                class="w-20 h-20 bg-gradient-to-r from-amber-500 to-orange-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                </svg>
                            </div>
                            <h4 class="text-xl font-bold text-gray-800 dark:text-white mb-2">Kualitas</h4>
                            <p class="text-gray-600 dark:text-gray-300">Mengutamakan standar tertinggi dalam layanan</p>
                        </div>

                        <!-- Inovasi -->
                        <div class="text-center group">
                            <div
                                class="w-20 h-20 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h4 class="text-xl font-bold text-gray-800 dark:text-white mb-2">Inovasi</h4>
                            <p class="text-gray-600 dark:text-gray-300">Terus berinovasi untuk solusi terbaik</p>
                        </div>
                        <!-- Kepercayaan -->
                        <div class="text-center group">
                            <div
                                class="w-20 h-20 bg-gradient-to-r from-rose-500 to-pink-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </div>
                            <h4 class="text-xl font-bold text-gray-800 dark:text-white mb-2">Kepercayaan</h4>
                            <p class="text-gray-600 dark:text-gray-300">Membangun kepercayaan melalui komitmen</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts.app>