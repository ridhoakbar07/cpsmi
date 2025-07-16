<div class="relative h-auto">
    <div
        class="relative container w-auto mx-4 my-8 sm:mx-auto px-4 py-16 bg-white/60 dark:bg-gray-800/60 backdrop-blur-xl border border-white/20 dark:border-gray-700/30 rounded-3xl shadow-xl">
        <div class="isolate">
            <div class="mx-auto max-w-2xl text-center mb-8">
                <h2 class="text-4xl font-semibold tracking-tight text-blue-900 dark:text-gray-100 sm:text-5xl mb-4">
                    Artikel Ekspedisi
                </h2>
                <p class="text-xl text-gray-900 dark:text-gray-300 max-w-2xl mx-auto">
                    Tips dan info terbaru seputar dunia ekspedisi & logistik.
                </p>
                <hr class="my-6 border-t-2 border-blue-200 dark:border-gray-700 w-full">
            </div>
            <div class="relative">
                <div class="overflow-hidden">
                    {{-- carausel hanya untuk tampilan desktop --}}
                    <div x-data="{ current: 0 }" class="relative hidden lg:block">
                        <div class="overflow-hidden">
                            <div class="flex transition-transform duration-500"
                                :style="'transform: translateX(-' + (current * 100) + '%)'">
                                @foreach ($posts->chunk(3) as $slide)
                                    <div
                                        class="min-w-full px-4 sm:px-12 grid grid-cols-1 gap-x-8 gap-y-8 py-8 lg:grid-cols-3">
                                        @foreach ($slide as $item)
                                            <article
                                                class="flex max-w-xl flex-col items-start justify-between bg-white/80 dark:bg-gray-800/80 rounded-md shadow-md p-6 transition hover:shadow-lg relative overflow-hidden">
                                                <div class="flex items-center gap-x-4 text-xs mt-2">
                                                    @forelse ($item->categories as $category)
                                                        <span
                                                            class="rounded-full bg-blue-100 dark:bg-gray-800 px-3 py-1 font-medium text-blue-700 dark:text-gray-200 hover:bg-blue-200 dark:hover:bg-gray-700">
                                                            {{ $category->name }}
                                                        </span>
                                                    @empty
                                                        <span class="text-blue-700 dark:text-gray-400">-</span>
                                                    @endforelse
                                                </div>
                                                <div class="group relative">
                                                    <h3
                                                        class="mt-3 text-lg font-semibold text-blue-900 dark:text-gray-100 group-hover:text-blue-700 dark:group-hover:text-gray-300">
                                                        <a href="#"><span
                                                                class="absolute inset-0"></span>{{ $item['title'] }}</a>
                                                    </h3>
                                                    <p class="mt-5 line-clamp-3 text-sm text-blue-700 dark:text-gray-300">
                                                        {{ Str::limit(strip_tags($item['body']), 120) }}
                                                    </p>
                                                </div>
                                                <div class="relative mt-8 flex items-center gap-x-4">
                                                    <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}"
                                                        alt="" class="w-10 h-10 rounded-full bg-blue-100 dark:bg-gray-800" />
                                                    <div class="text-sm">
                                                        <p class="font-semibold text-blue-900 dark:text-gray-100">
                                                            <a href="#" class="text-blue-900 dark:text-gray-100">
                                                                <span class="absolute inset-0"></span>{{ Auth::user()->name }}
                                                            </a>
                                                        </p>
                                                        <div class="flex items-center gap-x-2 text-xs">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="inline w-4 h-4 text-blue-700 dark:text-gray-400"
                                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                            </svg>
                                                            <time datetime="{{ $item['date'] }}"
                                                                class="text-blue-700 dark:text-gray-400">
                                                                diposting pada :
                                                                {{ \Carbon\Carbon::parse($item['created_at'])->format('d-m-Y') }}
                                                            </time>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="flex justify-center mt-6 space-x-2">
                            @for ($i = 0; $i < ceil(count($posts) / 3); $i++)
                                <button type="button" class="w-3 h-3 rounded-full"
                                    :class="current === {{ $i }} ? 'bg-blue-600' : 'bg-blue-200'"
                                    @click="current = {{ $i }}"></button>
                            @endfor
                        </div>
                        <button type="button"
                            @click="current = (current - 1 + {{ ceil(count($posts) / 3) }}) % {{ ceil(count($posts) / 3) }}"
                            class="absolute left-0 top-1/2 -translate-y-1/2 bg-transparent rounded-full p-2 hover:bg-blue-100 dark:hover:bg-gray-700 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-700 dark:text-gray-200"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <button type="button" @click="current = (current + 1) % {{ ceil(count($posts) / 3) }}"
                            class="absolute right-0 top-1/2 -translate-y-1/2 bg-transparent rounded-full p-2 hover:bg-blue-100 dark:hover:bg-gray-700 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-700 dark:text-gray-200"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>

                    {{-- carausel hanya untuk tampilan responsif mobile --}}
                    <div x-data="{ current: 0 }" class="relative block lg:hidden">
                        <div class="overflow-hidden">
                            <div class="flex transition-transform duration-500"
                                :style="'transform: translateX(-' + (current * 100) + '%)'">
                                @foreach ($posts->chunk(1) as $slide)
                                    <div class="min-w-full px-0 sm:px-0 py-8 flex justify-center">
                                        @foreach ($slide as $item)
                                            <article
                                                class="flex w-full max-w-xs flex-col items-start justify-between mx-auto
                                                                                                                        bg-white/80 dark:bg-gray-800/80 rounded-md shadow-md 
                                                                                                                        p-6 transition hover:shadow-lg"
                                                @if(!empty($item['cover_photo_path']))
                                                    x-bind:style="(document.documentElement.classList.contains('dark') ? 
                                                                                            'background: linear-gradient(rgba(31,41,55,0.85),rgba(31,41,55,0.85)), url(\'{{ asset('storage/' . $item['cover_photo_path']) }}\'); background-size: cover; background-position: center;' : 
                                                                                            'background: linear-gradient(rgba(255,255,255,0.85),rgba(255,255,255,0.85)), url(\'{{ asset('storage/' . $item['cover_photo_path']) }}\'); background-size: cover; background-position: center;')"
                                                @endif>
                                                <div class="flex items-center gap-x-4 text-xs mt-2">
                                                    @forelse ($item->categories as $category)
                                                        <span
                                                            class="rounded-full bg-blue-100 dark:bg-gray-800 px-3 py-1 font-medium text-blue-700 dark:text-gray-200 hover:bg-blue-200 dark:hover:bg-gray-700">
                                                            {{ $category->name }}
                                                        </span>
                                                    @empty
                                                        <span class="text-blue-700 dark:text-gray-400">-</span>
                                                    @endforelse
                                                </div>
                                                <div class="group relative">
                                                    <h3
                                                        class="mt-3 text-lg font-semibold text-blue-900 dark:text-gray-100 group-hover:text-blue-700 dark:group-hover:text-gray-300">
                                                        <a href="#"><span
                                                                class="absolute inset-0"></span>{{ $item['title'] }}</a>
                                                    </h3>
                                                    <p class="mt-5 line-clamp-3 text-sm text-blue-700 dark:text-gray-300">
                                                        {{ Str::limit(strip_tags($item['body']), 120) }}
                                                    </p>
                                                </div>
                                                <div class="relative mt-8 flex items-center gap-x-4">
                                                    <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}"
                                                        alt="" class="w-10 h-10 rounded-full bg-blue-100 dark:bg-gray-800" />
                                                    <div class="text-sm">
                                                        <p class="font-semibold text-blue-900 dark:text-gray-100">
                                                            <a href="#" class="text-blue-900 dark:text-gray-100">
                                                                <span class="absolute inset-0"></span>{{ Auth::user()->name }}
                                                            </a>
                                                        </p>
                                                        <div class="flex items-center gap-x-2 text-xs">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="inline w-4 h-4 text-blue-700 dark:text-gray-400"
                                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                            </svg>
                                                            <time datetime="{{ $item['date'] }}"
                                                                class="text-blue-700 dark:text-gray-400">
                                                                diposting pada :
                                                                {{ \Carbon\Carbon::parse($item['created_at'])->format('d-m-Y') }}
                                                            </time>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="flex justify-center mt-6 space-x-2">
                            @for ($i = 0; $i < min(3, count($posts)); $i++)
                                <button type="button" class="w-3 h-3 rounded-full"
                                    :class="current === {{ $i }} ? 'bg-blue-600' : 'bg-blue-200'"
                                    @click="current = {{ $i }}"></button>
                            @endfor
                        </div>
                        <button type="button"
                            @click="current = (current - 1 + {{ min(3, count(is_countable($posts) ? $posts : [])) }}) % {{ min(3, count(is_countable($posts) ? $posts : [])) }}"
                            class="absolute left-0 top-1/2 -translate-y-1/2 bg-transparent rounded-full p-2 hover:bg-blue-100 dark:hover:bg-gray-700 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-700 dark:text-gray-200"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <button type="button" @click="current = (current + 1) % {{ min(3, count($posts)) }}"
                            class="absolute right-0 top-1/2 -translate-y-1/2 bg-transparent rounded-full p-2 hover:bg-blue-100 dark:hover:bg-gray-700 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-700 dark:text-gray-200"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>