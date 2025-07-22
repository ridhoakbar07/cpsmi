<x-landing-page.layouts.app :title="'Blogs | PT. Inayah Bintang Borneo'" :webProfile="$webProfiles">
    <section class="pb-16 ">
        <div class="w-full px-4 md:px-10 lg:px-20 xl:px-32 2xl:px-64">
            <nav class="my-2 flex items-center gap-x-2 text-sm font-medium" aria-label="Breadcrumb">
                <a href="{{ route('home') }}"
                    class="flex items-center gap-1 text-slate-500 hover:text-blue-600 transition">
                    Home
                </a>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-slate-400" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <a href="{{ route('blog.post.index') }}" class="text-slate-500 hover:text-blue-600 transition">Blog</a>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-slate-400" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <a title="{{ $post->slug }}" href="{{ route('blog.post.show', ['post' => $post->slug]) }}"
                    class="truncate text-blue-700 font-semibold hover:text-blue-900 transition">
                    {{ $post->title }}
                </a>
            </nav>
            <div class="grid grid-cols-1 lg:grid-cols-[1fr_350px] gap-10 mb-10">
                <div class="bg-white/70 dark:bg-gray-900/70 backdrop-blur-md rounded-2xl shadow-lg p-8">
                    <div
                        class="mb-6 w-full h-72 rounded-xl overflow-hidden bg-slate-200 flex items-center justify-center">
                        <img src="{{ $post->featurePhoto }}" alt="{{ $post->photo_alt_text }}"
                            class="object-cover w-full h-full">
                    </div>
                    <h1 class="text-4xl font-bold text-blue-900 mb-2">{{ $post->title }}</h1>
                    <p class="text-lg text-blue-700/80 mb-4 italic">{{ $post->sub_title }}</p>
                    <div class="flex items-center gap-4 mb-6">
                        <img src="{{ $post->user->avatar ?? 'https://ui-avatars.com/api/?name=' . urlencode($post->user->name()) }}"
                            alt="{{ $post->user->name() }}"
                            class="w-12 h-12 rounded-full border-2 border-blue-100 object-cover">
                        <div>
                            <div class="font-semibold text-blue-900">{{ $post->user->name() }}</div>
                            <div class="text-xs text-slate-500">{{ $post->formattedPublishedDate() }}</div>
                        </div>
                    </div>
                    <div class="mt-8">
                        {!! $shareButton?->html_code !!}
                    </div>
                </div>
                <aside class="lg:sticky lg:top-32">
                    <div class="mb-6 bg-white/70 backdrop-blur-md rounded-xl shadow p-6">
                        <form action="{{ route('blog.post.index') }}" method="GET" class="flex items-center gap-3">
                            <div class="relative w-full">
                                <input
                                    type="text"
                                    name="search"
                                    value="{{ request('search') }}"
                                    placeholder="Cari blog..."
                                    class="w-full px-4 py-2 pl-10 rounded-lg border border-slate-300 focus:outline-none focus:ring-2 focus:ring-blue-300 transition"
                                >
                                <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-slate-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2" fill="none"/>
                                        <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35"/>
                                    </svg>
                                </span>
                            </div>
                            <button type="submit" class="px-5 py-2 bg-blue-600 text-white rounded-lg font-semibold shadow hover:bg-blue-700 transition flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7"/>
                                </svg>
                                Cari
                            </button>
                        </form>
                    </div>
                    <div class="bg-white/60 dark:bg-gray-900/60 backdrop-blur-md rounded-xl shadow p-6">
                        <span class="mb-3 block text-lg font-bold text-blue-900">Categories</span>
                        <div class="flex flex-wrap gap-2 mb-4">
                            @foreach ($post->categories as $category)
                                <a href="{{ route('blog.category.post', ['category' => $category->slug]) }}" class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-semibold hover:bg-blue-200">
                                    {{ $category->name }}
                                </a>
                            @endforeach
                        </div>
                        <span class="mb-2 block text-lg font-bold text-blue-900">Tags</span>
                        <div class="flex flex-wrap gap-2">
                            @foreach ($post->tags as $tag)
                                <a href="{{ route('blog.tag.post', ['tag' => $tag->slug]) }}" class="bg-slate-100 border border-slate-300 px-3 py-1 rounded-full text-sm text-slate-700 hover:bg-blue-50">
                                    {{ $tag->name }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </aside>
            </div>
            <div class="mb-16">
                <article
                    class="prose prose-blue max-w-none mb-8 bg-white rounded-xl shadow p-4 flex flex-col hover:shadow-lg transition">
                    {!! tiptap_converter()->asHTML($post->body, toc: true, maxDepth: 3) !!}
                </article>
                <div class="mb-6 flex items-center gap-x-4">
                    <h2 class="text-2xl font-bold text-blue-900">Related Posts</h2>
                    <span class="flex-1 h-0.5 bg-slate-200 rounded-full"></span>
                </div>
                <div class="grid md:grid-cols-3 sm:grid-cols-1 gap-8">
                    @forelse($post->relatedPosts() as $relatedPost)
                        <div class="bg-white rounded-xl shadow p-4 flex flex-col hover:shadow-lg transition">
                            <a href="{{ route('blog.post.show', ['post' => $relatedPost->slug]) }}" class="block mb-3">
                                <img src="{{ $relatedPost->featurePhoto }}" alt="{{ $relatedPost->photo_alt_text }}"
                                    class="h-32 w-full object-cover rounded">
                            </a>
                            <h3 class="text-lg font-semibold mb-1">
                                <a href="{{ route('blog.post.show', ['post' => $relatedPost->slug]) }}"
                                    class="hover:text-blue-600">{{ $relatedPost->title }}</a>
                            </h3>
                            <p class="text-sm text-slate-600 mb-2 line-clamp-2">{{ $relatedPost->sub_title }}</p>
                            <div class="flex items-center gap-2 text-xs text-slate-500 mt-auto">
                                <span>{{ $relatedPost->formattedPublishedDate() }}</span>
                                <span>&bull;</span>
                                <span>{{ $relatedPost->user->name() }}</span>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-3 text-center text-slate-500 py-10">No related posts found.</div>
                    @endforelse
                </div>
                <div class="flex justify-center pt-10">
                    <a href="{{ route('blog.post.all') }}"
                        class="flex items-center gap-x-3 rounded-full bg-blue-100 px-8 py-3 text-sm font-semibold text-blue-700 transition hover:bg-blue-200">
                        <span>Show all blogs</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" d="M6 18L18 6m0 0H9m9 0v9" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {!! $shareButton?->script_code !!}
</x-landing-page.layouts.app>