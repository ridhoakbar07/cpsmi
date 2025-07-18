<x-landing-page.layouts.app :title="'Aktivitas | PT. Inayah Bintang Borneo'" :webProfile="$webProfiles">

    <div class="flex flex-col items-center justify-center">
        <div class="container w-full mx-auto rounded-3xl overflow-hidden my-12">
            <div class="absolute inset-0 -z-10">
                <div class="w-full h-full rounded-3xl opacity-70"
                    style="background:rgba(244,247,255,0.18);backdrop-filter:blur(36px);-webkit-backdrop-filter:blur(36px);">
                </div>
            </div>

            <div class="isolate px-6 py-24 sm:py-32 lg:px-8">
                <!-- Header Section -->
                <div class="mx-auto max-w-2xl text-center mb-16">
                    <h2
                        class="text-4xl font-semibold tracking-tight text-balance text-gray-900 dark:text-white sm:text-5xl">
                        Aktivitas Perusahaan
                    </h2>
                    <p class="mt-2 text-lg/8 text-gray-700 dark:text-gray-300">
                        Dokumentasi kegiatan dan aktivitas PT. Inayah Bintang Borneo dalam melayani kebutuhan logistik
                        Anda
                    </p>
                </div>

                <!-- Bento Grid Section -->
                <div class="mx-auto max-w-7xl">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 h-auto">

                        <!-- Large Image 1 - Warehouse Operations -->
                        <div
                            class="col-span-1 md:col-span-2 lg:col-span-2 row-span-2 relative group overflow-hidden rounded-3xl bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-900 shadow-lg hover:shadow-xl transition-all duration-300">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                            </div>
                            <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=800&h=600&fit=crop&crop=center"
                                alt="Operasi Gudang"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute bottom-6 left-6 text-white">
                                <h3 class="text-xl font-bold mb-2">Operasi Gudang</h3>
                                <p class="text-sm opacity-90">Fasilitas penyimpanan modern dengan sistem manajemen yang
                                    efisien</p>
                            </div>
                        </div>

                        <!-- Medium Image 1 - Loading Process -->
                        <div
                            class="col-span-1 lg:col-span-1 relative group overflow-hidden rounded-3xl bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-900 shadow-lg hover:shadow-xl transition-all duration-300">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                            </div>
                            <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=400&h=300&fit=crop&crop=center"
                                alt="Proses Loading"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute bottom-4 left-4 text-white">
                                <h3 class="text-sm font-bold mb-1">Proses Loading</h3>
                                <p class="text-xs opacity-90">Loading barang dengan peralatan modern</p>
                            </div>
                        </div>

                        <!-- Medium Image 2 - Delivery Truck -->
                        <div
                            class="col-span-1 lg:col-span-1 relative group overflow-hidden rounded-3xl bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-900 shadow-lg hover:shadow-xl transition-all duration-300">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                            </div>
                            <img src="https://images.unsplash.com/photo-1566576912321-d58ddd7a6088?w=400&h=300&fit=crop&crop=center"
                                alt="Armada Pengiriman"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute bottom-4 left-4 text-white">
                                <h3 class="text-sm font-bold mb-1">Armada Pengiriman</h3>
                                <p class="text-xs opacity-90">Fleet kendaraan yang siap melayani</p>
                            </div>
                        </div>

                        <!-- Small Images Row -->
                        <div
                            class="col-span-1 md:col-span-1 relative group overflow-hidden rounded-3xl bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-900 shadow-lg hover:shadow-xl transition-all duration-300">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                            </div>
                            <img src="https://images.unsplash.com/photo-1611273426858-450d8e3c9fce?w=400&h=250&fit=crop&crop=center"
                                alt="Tim Kerja"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute bottom-3 left-3 text-white">
                                <h3 class="text-sm font-bold mb-1">Tim Profesional</h3>
                                <p class="text-xs opacity-90">Tenaga kerja berpengalaman</p>
                            </div>
                        </div>

                        <div
                            class="col-span-1 md:col-span-1 relative group overflow-hidden rounded-3xl bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-900 shadow-lg hover:shadow-xl transition-all duration-300">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                            </div>
                            <img src="https://images.unsplash.com/photo-1553413077-190dd305871c?w=400&h=250&fit=crop&crop=center"
                                alt="Quality Control"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute bottom-3 left-3 text-white">
                                <h3 class="text-sm font-bold mb-1">Quality Control</h3>
                                <p class="text-xs opacity-90">Pemeriksaan kualitas barang</p>
                            </div>
                        </div>

                        <!-- Large Image 2 - Port Operations -->
                        <div
                            class="col-span-1 md:col-span-2 lg:col-span-2 relative group overflow-hidden rounded-3xl bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-900 shadow-lg hover:shadow-xl transition-all duration-300">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                            </div>
                            <img src="https://images.unsplash.com/photo-1605902711834-8b11c3e3ef1d?w=800&h=400&fit=crop&crop=center"
                                alt="Operasi Pelabuhan"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute bottom-6 left-6 text-white">
                                <h3 class="text-xl font-bold mb-2">Operasi Pelabuhan</h3>
                                <p class="text-sm opacity-90">Layanan port to door dengan jaringan pelabuhan terpercaya
                                </p>
                            </div>
                        </div>

                        <!-- Vertical Image -->
                        <div
                            class="col-span-1 md:col-span-1 lg:col-span-1 row-span-2 relative group overflow-hidden rounded-3xl bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-900 shadow-lg hover:shadow-xl transition-all duration-300">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                            </div>
                            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=400&h=600&fit=crop&crop=center"
                                alt="Meeting & Koordinasi"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute bottom-6 left-4 text-white">
                                <h3 class="text-lg font-bold mb-2">Meeting & Koordinasi</h3>
                                <p class="text-sm opacity-90">Koordinasi tim untuk pelayanan optimal</p>
                            </div>
                        </div>

                        <!-- Medium Images -->
                        <div
                            class="col-span-1 md:col-span-1 relative group overflow-hidden rounded-3xl bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-900 shadow-lg hover:shadow-xl transition-all duration-300">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                            </div>
                            <img src="https://images.unsplash.com/photo-1586521995568-39abaa0c2311?w=400&h=300&fit=crop&crop=center"
                                alt="Teknologi Tracking"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute bottom-4 left-4 text-white">
                                <h3 class="text-sm font-bold mb-1">Teknologi Tracking</h3>
                                <p class="text-xs opacity-90">Sistem pelacakan real-time</p>
                            </div>
                        </div>

                        <div
                            class="col-span-1 md:col-span-1 relative group overflow-hidden rounded-3xl bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-900 shadow-lg hover:shadow-xl transition-all duration-300">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                            </div>
                            <img src="https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?w=400&h=300&fit=crop&crop=center"
                                alt="Customer Service"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute bottom-4 left-4 text-white">
                                <h3 class="text-sm font-bold mb-1">Customer Service</h3>
                                <p class="text-xs opacity-90">Pelayanan pelanggan 24/7</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-landing-page.layouts.app>
