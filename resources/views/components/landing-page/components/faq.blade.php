<div class="max-w-3xl mx-auto my-12 px-4">
    <h2
        class="text-center text-5xl md:text-6xl font-extrabold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent mb-4">
        Frequently Asked Question (F.A.Q)</h2>
    <div x-data="{ open: null }" class="space-y-4">
        <!-- FAQ 1 -->
        <div class="rounded-xl shadow bg-white/80 dark:bg-gray-800/80" data-aos="fade-up" data-aos-delay="0">
            <button @click="open === 1 ? open = null : open = 1" type="button"
                class="w-full flex justify-between items-center px-6 py-4 focus:outline-none">
                <span class="font-semibold text-lg text-blue-700 dark:text-blue-400 text-left">Apa saja jenis container
                    yang tersedia?</span>
                <svg :class="open === 1 ? 'rotate-180' : ''"
                    class="w-5 h-5 text-blue-700 dark:text-blue-400 transition-transform" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div x-show="open === 1" x-collapse class="px-6 pb-4 text-gray-700 dark:text-gray-200">
                Kami menyediakan dua jenis container: <b>20ft</b> (panjang ±6 meter) dan <b>40ft</b> (panjang ±12 meter)
                dengan spesifikasi lengkap dan layanan profesional.
            </div>
        </div>
        <!-- FAQ 2 -->
        <div class="rounded-xl shadow bg-white/80 dark:bg-gray-800/80" data-aos="fade-up" data-aos-delay="100">
            <button @click="open === 2 ? open = null : open = 2" type="button"
                class="w-full flex justify-between items-center px-6 py-4 focus:outline-none">
                <span class="font-semibold text-lg text-blue-700 dark:text-blue-400 text-left">Apa keunggulan container
                    20ft?</span>
                <svg :class="open === 2 ? 'rotate-180' : ''"
                    class="w-5 h-5 text-blue-700 dark:text-blue-400 transition-transform" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div x-show="open === 2" x-collapse class="px-6 pb-4 text-gray-700 dark:text-gray-200">
                Container 20ft adalah peti kemas standar dengan panjang sekitar 6 meter. Cocok untuk <b>barang berat
                    dengan volume tidak terlalu besar</b>, seperti bahan baku padat, sparepart mesin, produk logam, dan
                material konstruksi.
            </div>
        </div>
        <!-- FAQ 3 -->
        <div class="rounded-xl shadow bg-white/80 dark:bg-gray-800/80" data-aos="fade-up" data-aos-delay="200">
            <button @click="open === 3 ? open = null : open = 3" type="button"
                class="w-full flex justify-between items-center px-6 py-4 focus:outline-none">
                <span class="font-semibold text-lg text-purple-700 dark:text-purple-400 text-left">Apa keunggulan
                    container 40ft?</span>
                <svg :class="open === 3 ? 'rotate-180' : ''"
                    class="w-5 h-5 text-purple-700 dark:text-purple-400 transition-transform" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div x-show="open === 3" x-collapse class="px-6 pb-4 text-gray-700 dark:text-gray-200">
                Container 40ft memiliki kapasitas lebih besar (panjang sekitar 12 meter). Cocok untuk <b>barang dengan
                    volume besar namun bobot ringan</b>, seperti furniture, produk tekstil, makanan kemasan, dan barang
                massal lainnya.
            </div>
        </div>
        <!-- FAQ 4 -->
        <div class="rounded-xl shadow bg-white/80 dark:bg-gray-800/80" data-aos="fade-up" data-aos-delay="300">
            <button @click="open === 4 ? open = null : open = 4" type="button"
                class="w-full flex justify-between items-center px-6 py-4 focus:outline-none">
                <span class="font-semibold text-lg text-blue-700 dark:text-blue-400 text-left">Berapa dimensi dan
                    kapasitas container?</span>
                <svg :class="open === 4 ? 'rotate-180' : ''"
                    class="w-5 h-5 text-blue-700 dark:text-blue-400 transition-transform" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div x-show="open === 4" x-collapse class="px-6 pb-4 text-gray-700 dark:text-gray-200">
                <ul class="list-disc pl-5">
                    <li><b>20ft:</b> Dimensi internal 5.9 x 2.35 x 2.39m, volume 33.2 CBM, berat maksimum 28.3 ton,
                        berat kosong 2.2 ton.</li>
                    <li><b>40ft:</b> Dimensi internal 12.03 x 2.35 x 2.39m, volume 67.5 CBM, berat maksimum 26.5 ton,
                        berat kosong 3.7 ton.</li>
                </ul>
            </div>
        </div>
        <!-- FAQ 5 -->
        <div class="rounded-xl shadow bg-white/80 dark:bg-gray-800/80" data-aos="fade-up" data-aos-delay="400">
            <button @click="open === 5 ? open = null : open = 5" type="button"
                class="w-full flex justify-between items-center px-6 py-4 focus:outline-none">
                <span class="font-semibold text-lg text-blue-700 dark:text-blue-400 text-left">Barang apa saja yang
                    ideal diangkut dengan container 20ft?</span>
                <svg :class="open === 5 ? 'rotate-180' : ''"
                    class="w-5 h-5 text-blue-700 dark:text-blue-400 transition-transform" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div x-show="open === 5" x-collapse class="px-6 pb-4 text-gray-700 dark:text-gray-200">
                <ul class="list-disc pl-5">
                    <li>Bahan baku padat (logam, batu bara, mineral)</li>
                    <li>Sparepart mesin dan komponen industri</li>
                    <li>Produk logam dan material konstruksi</li>
                    <li>Barang dengan bobot tinggi per m³</li>
                </ul>
            </div>
        </div>
        <!-- FAQ 6 -->
        <div class="rounded-xl shadow bg-white/80 dark:bg-gray-800/80" data-aos="fade-up" data-aos-delay="500">
            <button @click="open === 6 ? open = null : open = 6" type="button"
                class="w-full flex justify-between items-center px-6 py-4 focus:outline-none">
                <span class="font-semibold text-lg text-purple-700 dark:text-purple-400 text-left">Barang apa saja yang
                    ideal diangkut dengan container 40ft?</span>
                <svg :class="open === 6 ? 'rotate-180' : ''"
                    class="w-5 h-5 text-purple-700 dark:text-purple-400 transition-transform" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div x-show="open === 6" x-collapse class="px-6 pb-4 text-gray-700 dark:text-gray-200">
                <ul class="list-disc pl-5">
                    <li>Furniture dan perabotan rumah tangga</li>
                    <li>Produk tekstil dan pakaian jadi</li>
                    <li>Makanan kemasan dan consumer goods</li>
                    <li>Barang volume besar dengan bobot ringan</li>
                </ul>
            </div>
        </div>
        <!-- FAQ 7 -->
        <div class="rounded-xl shadow bg-white/80 dark:bg-gray-800/80" data-aos="fade-up" data-aos-delay="600">
            <button @click="open === 7 ? open = null : open = 7" type="button"
                class="w-full flex justify-between items-center px-6 py-4 focus:outline-none">
                <span class="font-semibold text-lg text-green-700 dark:text-green-400 text-left">Bagaimana cara memesan
                    layanan container?</span>
                <svg :class="open === 7 ? 'rotate-180' : ''"
                    class="w-5 h-5 text-green-700 dark:text-green-400 transition-transform" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div x-show="open === 7" x-collapse class="px-6 pb-4 text-gray-700 dark:text-gray-200">
                Anda dapat memesan layanan container melalui WhatsApp kami yang tersedia di halaman layanan, atau klik
                tombol "Pesan via WhatsApp" pada masing-masing layanan container.
            </div>
        </div>
    </div>
</div>
