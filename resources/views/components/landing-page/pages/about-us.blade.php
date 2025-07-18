<x-landing-page.layouts.app :title="'Tentang Kami | PT. Inayah Bintang Borneo'" :webProfile="$webProfiles">
    <div
        class="container mx-auto my-12 px-4 py-8 max-w-5xl
        backdrop-blur-md
        bg-gray-900/60 dark:bg-gray-900/70
        rounded-2xl shadow-xl border border-gray-700
        text-gray-100 dark:text-gray-100">
        <h1 class="text-3xl font-bold mb-4 text-gray-100 dark:text-white text-center">Sejarah Perusahaan</h1>
        <p class="mb-4 text-gray-200 dark:text-gray-200 text-center">
            {!! strip_tags($webProfiles->sejarah, '<br><b><strong><i><em><ul><ol><li>') !!}
        </p>

        <h2 class="text-2xl font-semibold mb-4 text-gray-100 dark:text-white text-center">Struktur Organisasi</h2>
        <div class="flex justify-center mb-8">
            <div
                class="rounded-xl overflow-hidden shadow-lg border border-gray-700 bg-gray-800/70 dark:bg-gray-800/80 transition-all hover:scale-105 hover:shadow-2xl duration-300 max-w-2xl w-full">
                <img src="{{ asset('/storage/'.$webProfiles->struktur_organisasi) }}" alt="Struktur Organisasi"
                    class="w-full object-contain" loading="lazy" />
            </div>
        </div>

        <h2 class="text-2xl font-semibold mb-4 text-gray-100 dark:text-white text-center">Jumlah Personalia</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full rounded-xl shadow-lg overflow-hidden bg-gray-800/80 dark:bg-gray-900/80">
                <thead>
                    <tr>
                        <th
                            class="px-4 py-3 text-gray-200 dark:text-gray-200 font-semibold text-center bg-blue-900/80 dark:bg-blue-900/90">
                            No.</th>
                        <th
                            class="px-4 py-3 text-gray-200 dark:text-gray-200 font-semibold bg-blue-900/80 dark:bg-blue-900/90">
                            Jabatan</th>
                        <th
                            class="px-4 py-3 text-gray-200 dark:text-gray-200 font-semibold text-center bg-blue-900/80 dark:bg-blue-900/90">
                            Status</th>
                        <th
                            class="px-4 py-3 text-gray-200 dark:text-gray-200 font-semibold text-center bg-blue-900/80 dark:bg-blue-900/90">
                            Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-blue-900/40 dark:hover:bg-blue-900/60 transition-colors">
                        <td class="px-4 py-2 text-center text-gray-200 dark:text-gray-200">1</td>
                        <td class="px-4 py-2 text-gray-200 dark:text-gray-200">Direktur Utama</td>
                        <td class="px-4 py-2 text-center text-gray-200 dark:text-gray-200">Tetap</td>
                        <td class="px-4 py-2 text-center text-gray-200 dark:text-gray-200">1</td>
                    </tr>
                    <tr class="hover:bg-blue-900/40 dark:hover:bg-blue-900/60 transition-colors">
                        <td class="px-4 py-2 text-center text-gray-200 dark:text-gray-200">2</td>
                        <td class="px-4 py-2 text-gray-200 dark:text-gray-200">Bagian Keuangan</td>
                        <td class="px-4 py-2 text-center text-gray-200 dark:text-gray-200">Tetap</td>
                        <td class="px-4 py-2 text-center text-gray-200 dark:text-gray-200">1</td>
                    </tr>
                    <tr class="hover:bg-blue-900/40 dark:hover:bg-blue-900/60 transition-colors">
                        <td class="px-4 py-2 text-center text-gray-200 dark:text-gray-200">3</td>
                        <td class="px-4 py-2 text-gray-200 dark:text-gray-200">Bagian Administrasi 1</td>
                        <td class="px-4 py-2 text-center text-gray-200 dark:text-gray-200">Tetap</td>
                        <td class="px-4 py-2 text-center text-gray-200 dark:text-gray-200">1</td>
                    </tr>
                    <tr class="hover:bg-blue-900/40 dark:hover:bg-blue-900/60 transition-colors">
                        <td class="px-4 py-2 text-center text-gray-200 dark:text-gray-200">4</td>
                        <td class="px-4 py-2 text-gray-200 dark:text-gray-200">Pengelola Armada</td>
                        <td class="px-4 py-2 text-center text-gray-200 dark:text-gray-200">Tetap</td>
                        <td class="px-4 py-2 text-center text-gray-200 dark:text-gray-200">1</td>
                    </tr>
                    <tr class="hover:bg-blue-900/40 dark:hover:bg-blue-900/60 transition-colors">
                        <td class="px-4 py-2 text-center text-gray-200 dark:text-gray-200">5</td>
                        <td class="px-4 py-2 text-gray-200 dark:text-gray-200">Bagian Operasional</td>
                        <td class="px-4 py-2 text-center text-gray-200 dark:text-gray-200">Tetap</td>
                        <td class="px-4 py-2 text-center text-gray-200 dark:text-gray-200">2</td>
                    </tr>
                    <tr class="hover:bg-blue-900/40 dark:hover:bg-blue-900/60 transition-colors">
                        <td class="px-4 py-2 text-center text-gray-200 dark:text-gray-200">6</td>
                        <td class="px-4 py-2 text-gray-200 dark:text-gray-200">Koordinator Telly</td>
                        <td class="px-4 py-2 text-center text-gray-200 dark:text-gray-200">Tetap</td>
                        <td class="px-4 py-2 text-center text-gray-200 dark:text-gray-200">2</td>
                    </tr>
                    <tr class="hover:bg-blue-900/40 dark:hover:bg-blue-900/60 transition-colors">
                        <td class="px-4 py-2 text-center text-gray-200 dark:text-gray-200">7</td>
                        <td class="px-4 py-2 text-gray-200 dark:text-gray-200">Koordinator Buruh</td>
                        <td class="px-4 py-2 text-center text-gray-200 dark:text-gray-200">Tetap</td>
                        <td class="px-4 py-2 text-center text-gray-200 dark:text-gray-200">1</td>
                    </tr>
                    <tr class="hover:bg-blue-900/40 dark:hover:bg-blue-900/60 transition-colors">
                        <td class="px-4 py-2 text-center text-gray-200 dark:text-gray-200">8</td>
                        <td class="px-4 py-2 text-gray-200 dark:text-gray-200">Supir</td>
                        <td class="px-4 py-2 text-center text-gray-200 dark:text-gray-200">Tetap</td>
                        <td class="px-4 py-2 text-center text-gray-200 dark:text-gray-200">8</td>
                    </tr>
                    <tr class="hover:bg-blue-900/40 dark:hover:bg-blue-900/60 transition-colors">
                        <td class="px-4 py-2 text-center text-gray-200 dark:text-gray-200">9</td>
                        <td class="px-4 py-2 text-gray-200 dark:text-gray-200">Telly</td>
                        <td class="px-4 py-2 text-center text-gray-200 dark:text-gray-200">Tetap</td>
                        <td class="px-4 py-2 text-center text-gray-200 dark:text-gray-200">10</td>
                    </tr>
                    <tr class="hover:bg-blue-900/40 dark:hover:bg-blue-900/60 transition-colors">
                        <td class="px-4 py-2 text-center text-gray-200 dark:text-gray-200">10</td>
                        <td class="px-4 py-2 text-gray-200 dark:text-gray-200">Buruh</td>
                        <td class="px-4 py-2 text-center text-gray-200 dark:text-gray-200">Panggilan</td>
                        <td class="px-4 py-2 text-center text-gray-200 dark:text-gray-200">50</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-landing-page.layouts.app>
