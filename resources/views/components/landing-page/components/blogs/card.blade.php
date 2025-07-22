<div class="container mx-auto max-w-6xl px-4 py-12">
    <div class="mb-12 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold text-blue-900 dark:text-white mb-3">Aktivitas</h1>
        <p class="text-lg text-gray-700 dark:text-gray-300">Temukan insight, tips, dan berita terbaru seputar logistik &
            ekspedisi dari PT. Inayah Bintang Borneo.</p>
    </div>
    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
        @foreach(\App\Models\Post::published()->with(['user', 'categories'])->paginate(9) as $post)
            <article
                class="bg-white/80 dark:bg-gray-800/80 rounded-xl shadow-md hover:shadow-xl transition p-6 flex flex-col h-full relative overflow-hidden">
                @if($post->cover_photo_path)
                    <div
                        class="h-48 w-full rounded-lg overflow-hidden mb-4 bg-gray-200 dark:bg-gray-700 flex items-center justify-center">
                        <img src="{{ asset('storage/' . $post->cover_photo_path) }}"
                            alt="{{ $post->photo_alt_text ?? $post->title }}"
                            class="object-cover w-full h-full transition group-hover:scale-105 duration-300" loading="lazy">
                    </div>
                @endif
                <div class="flex items-center gap-2 mb-2 flex-wrap">
                    @foreach($post->categories as $category)
                        <span
                            class="rounded-full bg-blue-100 dark:bg-gray-800 px-3 py-1 text-xs font-medium text-blue-700 dark:text-gray-200">
                            {{ $category->name }}
                        </span>
                    @endforeach
                </div>
                <h2 class="text-xl font-bold text-blue-900 dark:text-white mb-1 leading-tight">
                    <a href="{{ route('blog.post.show', ['post' => $post->slug]) }}" class="hover:text-blue-600 dark:hover:text-blue-300 transition">
                        {{ $post->title }}
                    </a>
                </h2>
                @if($post->sub_title)
                    <p class="text-[15px] text-blue-700/70 dark:text-gray-300/70 font-normal italic mb-2">{{ $post->sub_title }}
                    </p>
                @endif
                <p class="text-gray-700 dark:text-gray-300 mb-4 line-clamp-3">
                    {!! tiptap_converter()->asHTML($post->body, toc: true, maxDepth: 3) !!}
                </p>
                <div class="flex items-center gap-3 mt-auto">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode($post->user->name ?? 'User') }}"
                        alt="{{ $post->user->name ?? 'User' }}" class="w-9 h-9 rounded-full bg-blue-100 dark:bg-gray-800" />
                    <div>
                        <div class="text-sm font-semibold text-blue-900 dark:text-gray-100">{{ $post->user->name ?? '-' }}
                        </div>
                        <div class="text-xs text-gray-500 dark:text-gray-400">{{ $post->formattedPublishedDate() }}</div>
                    </div>
                </div>
                <a href="{{ route('blog.post.show', ['post' => $post->slug]) }}" class="absolute inset-0 z-10" aria-label="Baca selengkapnya"></a>
            </article>
        @endforeach
    </div>
    <div class="mt-10 flex justify-center">
        @php
            $posts = \App\Models\Post::published()->with(['user', 'categories'])->paginate(9);
        @endphp
        <nav class="flex items-center gap-2" aria-label="Pagination">
            {{-- Previous Page Link --}}
            @if ($posts->onFirstPage())
                <span class="px-3 py-2 rounded bg-gray-200 text-gray-400 cursor-not-allowed">Previous</span>
            @else
                <a href="{{ $posts->previousPageUrl() }}" class="px-3 py-2 rounded bg-blue-100 text-blue-700 hover:bg-blue-200 transition">Previous</a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)
                @if ($page == $posts->currentPage())
                    <span class="px-3 py-2 rounded bg-blue-700 text-white font-bold">{{ $page }}</span>
                @else
                    <a href="{{ $url }}" class="px-3 py-2 rounded bg-blue-100 text-blue-700 hover:bg-blue-200 transition">{{ $page }}</a>
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($posts->hasMorePages())
                <a href="{{ $posts->nextPageUrl() }}" class="px-3 py-2 rounded bg-blue-100 text-blue-700 hover:bg-blue-200 transition">Next</a>
            @else
                <span class="px-3 py-2 rounded bg-gray-200 text-gray-400 cursor-not-allowed">Next</span>
            @endif
        </nav>
    </div>
</div>