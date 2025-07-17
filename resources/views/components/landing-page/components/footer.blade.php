<footer
    class="relative bg-white/90 dark:bg-gray-900/80 backdrop-blur-xl border-t border-white/20 dark:border-gray-700/30 text-gray-900 dark:text-blue-100 shadow-xl">
    <div class="relative mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="absolute inset-0 -z-10">
            <div class="w-full h-full bg-transparent"></div>
        </div>
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-4">
            <!-- Company Info -->
            <div class="lg:col-span-2">
                <div class="flex items-center mb-6">
                    <img src="{{ asset('/storage/' . $webProfile->logo) }}" class="mr-3 h-6 sm:h-9" alt="Logo PT" />
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-blue-100">{{$webProfile->nama_perusahaan}}</h3>
                        <p class="text-blue-700 dark:text-blue-200">{{$webProfile->visi}}</p>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="space-y-3">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-blue-400 mr-3" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <p class="text-pretty text-gray-900 dark:text-gray-300 break-words max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg">
                            {{$webProfile->alamat}}
                        </p>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-blue-400 mr-3" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg>
                        <span class="text-gray-900 dark:text-gray-300">{{$webProfile->telp}}</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-blue-400 mr-3" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                        @foreach($webProfile->kontak_mail as $mail)
                            <span class="text-gray-900 dark:text-gray-300 block">
                                {{ $mail['posisi'] }}: {{ $mail['alamat_email'] }}
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="mb-6 text-sm font-semibold text-gray-900 dark:text-white uppercase tracking-wider">Navigasi
                </h3>
                <ul class="space-y-3">
                    <li>
                        <a href="/"
                            class="text-gray-900 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-200 flex items-center group">
                            <svg class="w-4 h-4 mr-2 group-hover:translate-x-1 transition-transform duration-200"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a href="/blogs"
                            class="text-gray-900 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-200 flex items-center group">
                            <svg class="w-4 h-4 mr-2 group-hover:translate-x-1 transition-transform duration-200"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                            Blogs
                        </a>
                    </li>
                    <li>
                        <a href="/activity"
                            class="text-gray-900 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-200 flex items-center group">
                            <svg class="w-4 h-4 mr-2 group-hover:translate-x-1 transition-transform duration-200"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                            Aktivitas
                        </a>
                    </li>
                    <li>
                        <a href="/contact-us"
                            class="text-gray-900 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-200 flex items-center group">
                            <svg class="w-4 h-4 mr-2 group-hover:translate-x-1 transition-transform duration-200"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                            Kontak Kami
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Services -->
            <div>
                <h3 class="mb-6 text-sm font-semibold text-gray-900 dark:text-white uppercase tracking-wider">Layanan
                </h3>
                <ul class="space-y-3">
                    <li>
                        <a href="#"
                            class="text-gray-900 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-200 flex items-center group">
                            <svg class="w-4 h-4 mr-2 group-hover:translate-x-1 transition-transform duration-200"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                            Pengiriman 20ft
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="text-gray-900 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-200 flex items-center group">
                            <svg class="w-4 h-4 mr-2 group-hover:translate-x-1 transition-transform duration-200"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                            Pengiriman 40ft
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Divider -->
        <div class="border-t border-white/10 mt-12 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <!-- Copyright -->
                <div class="text-center md:text-left mb-4 md:mb-0">
                    <span class="text-gray-900 dark:text-gray-300">© 2025
                        <a href="/"
                            class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-200 font-semibold">PT.
                            Inayah
                            Bintang Borneo</a>.
                        Seluruh hak cipta dilindungi.
                    </span>
                    <div class="mt-2">
                        <a href="#"
                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-200 text-sm mr-4">Kebijakan
                            Privasi</a>
                        <a href="#"
                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-200 text-sm">Syarat
                            &
                            Ketentuan</a>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="flex space-x-4">
                    <a href="#"
                        class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center text-gray-300 hover:text-white hover:bg-blue-600 transition-all duration-300 group">
                        <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                        </svg>
                    </a>
                    <a href="#"
                        class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center text-gray-300 hover:text-white hover:bg-blue-600 transition-all duration-300 group">
                        <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z" />
                        </svg>
                    </a>
                    <a href="#"
                        class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center text-gray-300 hover:text-white hover:bg-pink-600 transition-all duration-300 group">
                        <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.219-.359-1.219c0-1.142.662-1.995 1.482-1.995.699 0 1.037.219 1.037 1.142 0 .695-.442 1.734-.442 2.692 0 1.142.901 2.692 2.692 2.692 1.295 0 2.289-1.365 2.289-3.344 0-1.748-1.255-2.971-3.049-2.971-2.078 0-3.3 1.555-3.3 3.165 0 .626.24 1.295.539 1.659.059.072.068.135.05.209-.055.227-.177.719-.2.818-.032.132-.107.162-.246.098-1.394-.647-2.267-2.676-2.267-4.315 0-3.514 2.553-6.746 7.36-6.746 3.87 0 6.876 2.757 6.876 6.44 0 3.844-2.424 6.939-5.787 6.939-1.13 0-2.194-.587-2.557-1.295 0 0-.559 2.13-.695 2.651-.251.967-.926 2.168-1.378 2.904C10.5 23.85 11.22 24 12.017 24c6.624 0 11.99-5.367 11.99-11.987C24.007 5.367 18.641.001 12.017.001z" />
                        </svg>
                    </a>
                    <a href="#"
                        class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center text-gray-300 hover:text-white hover:bg-green-600 transition-all duration-300 group">
                        <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
                        </svg>
                    </a>
                    <a href="#"
                        class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center text-gray-300 hover:text-white hover:bg-red-600 transition-all duration-300 group">
                        <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                        </svg>
                    </a>
                    <a href="#"
                        class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center text-gray-300 hover:text-white hover:bg-blue-700 transition-all duration-300 group">
                        <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
