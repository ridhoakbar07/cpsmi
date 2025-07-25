<x-blogs.layouts.app>
    @if(count($posts))
    <section class="py-8">
        <div class="container mx-auto">
            <div class="">
                {{-- Hero Post      --}}
                @foreach ($posts->take(1) as $post)
                <div>
                    <x-blogs.components.feature-card :post="$post" />
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="pb-16 pt-8">
        <div class="container mx-auto">
            <div class="grid sm:grid-cols-3 gap-x-14 gap-y-14">
            </div>
            <div class="flex justify-center pt-20">
                <a href="{{ route('blog.post.all') }}" class="flex items-center justify-center md:gap-x-5 rounded-full bg-slate-100 px-20 py-4 text-sm font-semibold transition-all duration-300 hover:bg-slate-200">
                    <span>Show all blogs</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6m0 0H9m9 0v9" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
    @else
    <div class="container  mx-auto">
        <div class="flex justify-center">
            <p class="text-2xl font-semibold text-gray-300">No posts found</p>
        </div>
    </div>
    @endif

</x-blogs.layouts.app>
