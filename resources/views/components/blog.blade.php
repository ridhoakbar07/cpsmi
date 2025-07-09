<div class="flex flex-col items-center justify-center">
    <div class="container w-auto bg-blue-50 dark:bg-gray-900 my-12 py-24 sm:py-32 rounded-3xl shadow">
        <div class="mx-12 max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-4xl font-semibold tracking-tight text-blue-900 dark:text-gray-100 sm:text-5xl">
                    Artikel Ekspedisi</h2>
                <p class="mt-2 text-lg text-blue-700 dark:text-gray-300">Tips dan info terbaru seputar dunia
                    ekspedisi & logistik.</p>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
            <div class="relative">
                <div class="overflow-hidden">
                    @php
                        $post = [
                            [
                                'date' => '2024-06-01',
                                'date_text' => '1 Juni 2024',
                                'category' => 'Logistik',
                                'title' => 'Cara Efektif Mengelola Pengiriman Barang',
                                'excerpt' => 'Pelajari tips mengelola pengiriman barang agar lebih efisien dan hemat biaya.',
                                'author' => 'Budi Santoso',
                                'author_role' => 'Manajer Operasional',
                                'author_image' => 'https://randomuser.me/api/portraits/men/1.jpg',
                            ],
                            [
                                'date' => '2024-05-25',
                                'date_text' => '25 Mei 2024',
                                'category' => 'Ekspedisi',
                                'title' => 'Teknologi Terkini dalam Dunia Ekspedisi',
                                'excerpt' => 'Teknologi terbaru yang membantu proses ekspedisi menjadi lebih cepat dan aman.',
                                'author' => 'Siti Aminah',
                                'author_role' => 'Pakar Logistik',
                                'author_image' => 'https://randomuser.me/api/portraits/women/2.jpg',
                            ],
                            [
                                'date' => '2024-05-15',
                                'date_text' => '15 Mei 2024',
                                'category' => 'Tips',
                                'title' => 'Tips Packing Barang Agar Tidak Rusak',
                                'excerpt' => 'Panduan lengkap packing barang agar tetap aman sampai tujuan.',
                                'author' => 'Andi Wijaya',
                                'author_role' => 'Supervisor Gudang',
                                'author_image' => 'https://randomuser.me/api/portraits/men/3.jpg',
                            ],
                            [
                                'date' => '2024-06-01',
                                'date_text' => '1 Juni 2024',
                                'category' => 'Logistik',
                                'title' => 'Cara Efektif Mengelola Pengiriman Barang',
                                'excerpt' => 'Pelajari tips mengelola pengiriman barang agar lebih efisien dan hemat biaya.',
                                'author' => 'Budi Santoso',
                                'author_role' => 'Manajer Operasional',
                                'author_image' => 'https://randomuser.me/api/portraits/men/1.jpg',
                            ],
                            [
                                'date' => '2024-05-25',
                                'date_text' => '25 Mei 2024',
                                'category' => 'Ekspedisi',
                                'title' => 'Teknologi Terkini dalam Dunia Ekspedisi',
                                'excerpt' => 'Teknologi terbaru yang membantu proses ekspedisi menjadi lebih cepat dan aman.',
                                'author' => 'Siti Aminah',
                                'author_role' => 'Pakar Logistik',
                                'author_image' => 'https://randomuser.me/api/portraits/women/2.jpg',
                            ],
                            [
                                'date' => '2024-05-15',
                                'date_text' => '15 Mei 2024',
                                'category' => 'Tips',
                                'title' => 'Tips Packing Barang Agar Tidak Rusak',
                                'excerpt' => 'Panduan lengkap packing barang agar tetap aman sampai tujuan.',
                                'author' => 'Andi Wijaya',
                                'author_role' => 'Supervisor Gudang',
                                'author_image' => 'https://randomuser.me/api/portraits/men/3.jpg',
                            ],
                        ];
                    @endphp
                    <div x-data="{ current: 0 }" class="relative">
                        <div class="overflow-hidden">
                            <div class="flex transition-transform duration-500"
                                :style="'transform: translateX(-' + (current * 100) + '%)'">
                                @foreach (array_chunk($post, 3) as $slide)
                                    <div class="min-w-full px-12 grid grid-cols-1 gap-x-8 gap-y-8 pt-10 sm:mt-8 sm:pt-16 lg:grid-cols-3">
                                        @foreach ($slide as $item)
                                            <article class="flex max-w-xl flex-col items-start justify-between">
                                                <div class="flex items-center gap-x-4 text-xs">
                                                    <time datetime="{{ $item['date'] }}"
                                                        class="text-blue-700 dark:text-gray-400">{{ $item['date_text'] }}</time>
                                                    <a href="#"
                                                        class="relative z-10 rounded-full bg-blue-100 dark:bg-gray-800 px-3 py-1.5 font-medium text-blue-700 dark:text-gray-200 hover:bg-blue-200 dark:hover:bg-gray-700">{{ $item['category'] }}</a>
                                                </div>
                                                <div class="group relative">
                                                    <h3
                                                        class="mt-3 text-lg font-semibold text-blue-900 dark:text-gray-100 group-hover:text-blue-700 dark:group-hover:text-gray-300">
                                                        <a href="#"><span class="absolute inset-0"></span>{{ $item['title'] }}</a>
                                                    </h3>
                                                    <p class="mt-5 line-clamp-3 text-sm text-blue-700 dark:text-gray-300">
                                                        {{ $item['excerpt'] }}</p>
                                                </div>
                                                <div class="relative mt-8 flex items-center gap-x-4">
                                                    <img src="{{ $item['author_image'] }}" alt=""
                                                        class="w-10 h-10 rounded-full bg-blue-100 dark:bg-gray-800" />
                                                    <div class="text-sm">
                                                        <p class="font-semibold text-blue-900 dark:text-gray-100">
                                                            <a href="#" class="text-blue-900 dark:text-gray-100"><span
                                                                    class="absolute inset-0"></span>{{ $item['author'] }}</a>
                                                        </p>
                                                        <p class="text-blue-700 dark:text-gray-300">{{ $item['author_role'] }}</p>
                                                    </div>
                                                </div>
                                            </article>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="flex justify-center mt-6 space-x-2">
                            @for ($i = 0; $i < ceil(count($post) / 3); $i++)
                                <button type="button"
                                    class="w-3 h-3 rounded-full"
                                    :class="current === {{ $i }} ? 'bg-blue-600' : 'bg-blue-200'"
                                    @click="current = {{ $i }}"></button>
                            @endfor
                        </div>
                        <button type="button" @click="current = (current - 1 + {{ ceil(count($post) / 3) }}) % {{ ceil(count($post) / 3) }}"
                            class="absolute left-0 top-1/2 -translate-y-1/2 bg-transparent rounded-full p-2 hover:bg-blue-100 dark:hover:bg-gray-700 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-700 dark:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <button type="button" @click="current = (current + 1) % {{ ceil(count($post) / 3) }}"
                            class="absolute right-0 top-1/2 -translate-y-1/2 bg-transparent rounded-full p-2 hover:bg-blue-100 dark:hover:bg-gray-700 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-700 dark:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
