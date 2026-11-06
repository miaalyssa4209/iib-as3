<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'MochiMap') }} - Cute Cafés Across Brunei</title>

        @fonts

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="bg-[#fff8f6] dark:bg-[#1a1416] text-rose-950 dark:text-rose-50 min-h-screen overflow-x-hidden">
        <header class="w-full bg-white/70 dark:bg-[#231b1e]/70 backdrop-blur-sm border-b border-pink-100 dark:border-rose-900/50 sticky top-0 z-50">
            <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <div class="flex items-center space-x-2">
                        <svg class="h-9 w-9 text-pink-400 dark:text-pink-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M2,21V19H20V21H2M20,8H18V5H20M20,3H4V13A4,4 0 0,0 8,17H14A4,4 0 0,0 18,13V10H20A2,2 0 0,0 22,8V5C22,3.89 21.1,3 20,3M16,5H6V13A2,2 0 0,0 8,15H14A2,2 0 0,0 16,13V5Z" />
                        </svg>
                        <a href="{{ url('/') }}" class="text-xl font-bold bg-gradient-to-r from-pink-500 to-rose-400 bg-clip-text text-transparent">MochiMap</a>
                    </div>
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="#explore" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">Explore</a>
                        <a href="#districts" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">Districts</a>
                        <a href="#featured" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">Favourites</a>
                        <a href="{{ url('/about') }}" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">About</a>
                        <a href="{{ url('/contact') }}" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">Contact</a>
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="px-5 py-2 bg-gradient-to-r from-pink-400 to-rose-400 text-white rounded-full hover:shadow-lg hover:shadow-pink-200/50 dark:hover:shadow-pink-900/30 transition-all">My Map</a>
                            @else
                                <a href="{{ route('login') }}" class="px-5 py-2 text-pink-500 dark:text-pink-300 hover:text-pink-600 dark:hover:text-pink-200 transition-colors">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="px-5 py-2 bg-gradient-to-r from-pink-400 to-rose-400 text-white rounded-full hover:shadow-lg hover:shadow-pink-200/50 dark:hover:shadow-pink-900/30 transition-all">Sign up</a>
                                @endif
                            @endauth
                        @endif
                    </div>
                </div>
            </nav>
        </header>

        <section class="relative">
            <div class="absolute -top-24 -left-16 w-72 h-72 bg-pink-200/40 dark:bg-pink-900/20 rounded-full blur-3xl"></div>
            <div class="absolute top-32 -right-24 w-96 h-96 bg-orange-200/30 dark:bg-orange-900/15 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-1/3 w-64 h-64 bg-rose-200/30 dark:bg-rose-900/15 rounded-full blur-3xl"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
                <div class="text-center max-w-3xl mx-auto">
                    <div class="inline-flex items-center px-4 py-1.5 bg-white/80 dark:bg-[#2a2023]/80 rounded-full border border-pink-100 dark:border-rose-900/50 shadow-sm mb-8">
                        <span class="text-sm text-rose-700 dark:text-rose-200">Sweet sips all over Brunei Darussalam</span>
                    </div>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                        <span class="bg-gradient-to-r from-pink-500 via-rose-400 to-amber-300 bg-clip-text text-transparent">Find the cutest cafés</span>
                        <span class="block text-rose-950 dark:text-rose-50">from BSB to the heart of Temburong</span>
                    </h1>
                    <p class="text-lg sm:text-xl text-rose-800/80 dark:text-rose-100/80 mb-10 leading-relaxed">
                        Your pastel little guide to Brunei's coziest coffee corners — perfect for teh tarik catch-ups, study dates, and rainy afternoon treats.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="#explore" class="px-8 py-4 bg-gradient-to-r from-pink-400 to-rose-400 text-white rounded-full hover:shadow-xl hover:shadow-pink-200/60 dark:hover:shadow-pink-900/40 transition-all transform hover:scale-105 text-lg font-semibold">
                            Let's Go Café Hopping
                        </a>
                        <a href="#districts" class="px-8 py-4 bg-white/80 dark:bg-[#2a2023]/80 text-rose-700 dark:text-rose-200 border border-pink-100 dark:border-rose-900/50 rounded-full hover:bg-white dark:hover:bg-[#35292d] transition-all text-lg font-semibold shadow-sm">
                            Pick a District
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="explore" class="py-20 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl lg:text-4xl font-bold text-rose-950 dark:text-rose-50 mb-4">What's your café mood today?</h2>
                    <p class="text-lg text-rose-800/80 dark:text-rose-100/80 max-w-2xl mx-auto">
                        Choose a vibe and we'll point you to a spot you'll adore
                    </p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="group cursor-pointer">
                        <div class="bg-white/80 dark:bg-[#2a2023]/80 backdrop-blur-sm rounded-3xl p-6 h-52 flex flex-col justify-center items-center text-center border border-pink-100/70 dark:border-rose-900/50 hover:shadow-xl hover:shadow-pink-100/40 dark:hover:shadow-pink-900/20 transition-all transform group-hover:-translate-y-1">
                            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-pink-100 to-rose-100 dark:from-pink-900/40 dark:to-rose-900/40 flex items-center justify-center mb-3">
                                <svg class="h-7 w-7 text-pink-500 dark:text-pink-300" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-rose-950 dark:text-rose-50">Near Me</h3>
                            <p class="text-sm text-rose-800/70 dark:text-rose-100/70 mt-1">Cute corners just a short drive away</p>
                        </div>
                    </div>
                    <div class="group cursor-pointer">
                        <div class="bg-white/80 dark:bg-[#2a2023]/80 backdrop-blur-sm rounded-3xl p-6 h-52 flex flex-col justify-center items-center text-center border border-pink-100/70 dark:border-rose-900/50 hover:shadow-xl hover:shadow-pink-100/40 dark:hover:shadow-pink-900/20 transition-all transform group-hover:-translate-y-1">
                            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-amber-100 to-orange-100 dark:from-amber-900/30 dark:to-orange-900/30 flex items-center justify-center mb-3">
                                <svg class="h-7 w-7 text-rose-400 dark:text-pink-300" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M2,21V19H20V21H2M20,8V5H18V8H20M20,3A2,2 0 0,1 22,5V8A2,2 0 0,1 20,10H18V13A4,4 0 0,1 14,17H8A4,4 0 0,1 4,13V3H20M16,5H6V13A2,2 0 0,0 8,15H14A2,2 0 0,0 16,13V5Z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-rose-950 dark:text-rose-50">Kopi & Teh</h3>
                            <p class="text-sm text-rose-800/70 dark:text-rose-100/70 mt-1">Local brews, iced lattes & teh tarik twists</p>
                        </div>
                    </div>
                    <div class="group cursor-pointer">
                        <div class="bg-white/80 dark:bg-[#2a2023]/80 backdrop-blur-sm rounded-3xl p-6 h-52 flex flex-col justify-center items-center text-center border border-pink-100/70 dark:border-rose-900/50 hover:shadow-xl hover:shadow-pink-100/40 dark:hover:shadow-pink-900/20 transition-all transform group-hover:-translate-y-1">
                            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-rose-100 to-pink-100 dark:from-rose-900/40 dark:to-pink-900/40 flex items-center justify-center mb-3">
                                <svg class="h-7 w-7 text-pink-500 dark:text-pink-300" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12,3L2,12H5V20H19V12H22L12,3M12,8.75A2.25,2.25 0 0,1 14.25,11A2.25,2.25 0 0,1 12,13.25A2.25,2.25 0 0,1 9.75,11A2.25,2.25 0 0,1 12,8.75M12,15C13.5,15 16.5,15.75 16.5,17.25V18H7.5V17.25C7.5,15.75 10.5,15 12,15Z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-rose-950 dark:text-rose-50">Study & Chill</h3>
                            <p class="text-sm text-rose-800/70 dark:text-rose-100/70 mt-1">Cozy seats, Wi-Fi & calm pastel vibes</p>
                        </div>
                    </div>
                    <div class="group cursor-pointer">
                        <div class="bg-white/80 dark:bg-[#2a2023]/80 backdrop-blur-sm rounded-3xl p-6 h-52 flex flex-col justify-center items-center text-center border border-pink-100/70 dark:border-rose-900/50 hover:shadow-xl hover:shadow-pink-100/40 dark:hover:shadow-pink-900/20 transition-all transform group-hover:-translate-y-1">
                            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-orange-100 to-pink-100 dark:from-orange-900/30 dark:to-pink-900/30 flex items-center justify-center mb-3">
                                <svg class="h-7 w-7 text-rose-400 dark:text-pink-300" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4M11,6H13V12H17V14H11V6Z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-rose-950 dark:text-rose-50">Sweet Bites</h3>
                            <p class="text-sm text-rose-800/70 dark:text-rose-100/70 mt-1">Kuih, waffles, cakes & rainy-day treats</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="districts" class="py-20 relative">
            <div class="absolute -bottom-32 left-8 w-80 h-80 bg-pink-200/30 dark:bg-pink-900/15 rounded-full blur-3xl"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl lg:text-4xl font-bold text-rose-950 dark:text-rose-50 mb-4">Explore Brunei by district</h2>
                    <p class="text-lg text-rose-800/80 dark:text-rose-100/80 max-w-2xl mx-auto">
                        From the buzz of BSB to the calm of Temburong, every district has its own charm
                    </p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="group bg-white/80 dark:bg-[#2a2023]/80 backdrop-blur-sm rounded-3xl overflow-hidden border border-pink-100/70 dark:border-rose-900/50 hover:shadow-xl hover:shadow-pink-100/40 dark:hover:shadow-pink-900/20 transition-all transform group-hover:-translate-y-1">
                        <div class="h-40 bg-gradient-to-br from-violet-200 to-fuchsia-200 dark:from-violet-900/40 dark:to-fuchsia-900/40 relative">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <svg class="h-14 w-14 text-white/90" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12,3L2,12H5V20H19V12H22L12,3M12,7.7C14.1,7.7 15.8,9.4 15.8,11.5C15.8,14.5 12,18 12,18C12,18 8.2,14.5 8.2,11.5C8.2,9.4 9.9,7.7 12,7.7M12,10A1.5,1.5 0 0,0 10.5,11.5A1.5,1.5 0 0,0 12,13A1.5,1.5 0 0,0 13.5,11.5A1.5,1.5 0 0,0 12,10Z" />
                                </svg>
                            </div>
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-bold text-rose-950 dark:text-rose-50">Brunei-Muara</h3>
                            <p class="text-sm text-rose-800/70 dark:text-rose-100/70 mt-1 mb-3">48 cafés • BSB, Gadong & Kiulap</p>
                            <a href="#" class="text-pink-500 dark:text-pink-300 font-semibold text-sm hover:text-pink-600 dark:hover:text-pink-200 transition-colors">Explore →</a>
                        </div>
                    </div>
                    <div class="group bg-white/80 dark:bg-[#2a2023]/80 backdrop-blur-sm rounded-3xl overflow-hidden border border-pink-100/70 dark:border-rose-900/50 hover:shadow-xl hover:shadow-pink-100/40 dark:hover:shadow-pink-900/20 transition-all transform group-hover:-translate-y-1">
                        <div class="h-40 bg-gradient-to-br from-sky-200 to-cyan-200 dark:from-sky-900/40 dark:to-cyan-900/40 relative">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <svg class="h-14 w-14 text-white/90" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20,21C17.67,21 15.33,20.5 13,19.5C10.67,20.5 8.33,21 6,21H2V19H6C7.38,19 8.74,18.78 10,18.34V16H2V14H10V12H6V10H10V8H6V6H10V4.05C8.64,3.56 7.38,3 6,3H2V1H6C8.33,1 10.67,1.5 13,2.5C15.33,1.5 17.67,1 20,1H22V3H20C18.62,3 17.36,3.56 16,4.05V6H20V8H16V10H20V12H16V14H20V16H16V18.34C17.26,18.78 18.62,19 20,19H22V21H20Z" />
                                </svg>
                            </div>
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-bold text-rose-950 dark:text-rose-50">Belait</h3>
                            <p class="text-sm text-rose-800/70 dark:text-rose-100/70 mt-1 mb-3">16 cafés • Kuala Belait & Seria</p>
                            <a href="#" class="text-pink-500 dark:text-pink-300 font-semibold text-sm hover:text-pink-600 dark:hover:text-pink-200 transition-colors">Explore →</a>
                        </div>
                    </div>
                    <div class="group bg-white/80 dark:bg-[#2a2023]/80 backdrop-blur-sm rounded-3xl overflow-hidden border border-pink-100/70 dark:border-rose-900/50 hover:shadow-xl hover:shadow-pink-100/40 dark:hover:shadow-pink-900/20 transition-all transform group-hover:-translate-y-1">
                        <div class="h-40 bg-gradient-to-br from-emerald-200 to-teal-200 dark:from-emerald-900/40 dark:to-teal-900/40 relative">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <svg class="h-14 w-14 text-white/90" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17,8C8,10 5.9,16.17 3.82,21.34L5.71,22L6.66,19.7C7.14,19.87 7.64,20 8,20C19,20 22,3 22,3C21,5 14,5.25 9,6.25C4,7.25 2,11.5 2,13.5C2,15.5 3.75,17.25 3.75,17.25C7,8 17,8 17,8Z" />
                                </svg>
                            </div>
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-bold text-rose-950 dark:text-rose-50">Tutong</h3>
                            <p class="text-sm text-rose-800/70 dark:text-rose-100/70 mt-1 mb-3">11 cafés • Pekan Tutong & nearby</p>
                            <a href="#" class="text-pink-500 dark:text-pink-300 font-semibold text-sm hover:text-pink-600 dark:hover:text-pink-200 transition-colors">Explore →</a>
                        </div>
                    </div>
                    <div class="group bg-white/80 dark:bg-[#2a2023]/80 backdrop-blur-sm rounded-3xl overflow-hidden border border-pink-100/70 dark:border-rose-900/50 hover:shadow-xl hover:shadow-pink-100/40 dark:hover:shadow-pink-900/20 transition-all transform group-hover:-translate-y-1">
                        <div class="h-40 bg-gradient-to-br from-amber-200 to-orange-200 dark:from-amber-900/40 dark:to-orange-900/40 relative">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <svg class="h-14 w-14 text-white/90" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M14,6L10.25,11L13.1,14.8L11.5,16C9.81,13.75 7,10 7,10L1,18H23L14,6Z" />
                                </svg>
                            </div>
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-bold text-rose-950 dark:text-rose-50">Temburong</h3>
                            <p class="text-sm text-rose-800/70 dark:text-rose-100/70 mt-1 mb-3">7 cafés • Bangar & green escapes</p>
                            <a href="#" class="text-pink-500 dark:text-pink-300 font-semibold text-sm hover:text-pink-600 dark:hover:text-pink-200 transition-colors">Explore →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="featured" class="py-20 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl lg:text-4xl font-bold text-rose-950 dark:text-rose-50 mb-4">Brunei café favourites</h2>
                    <p class="text-lg text-rose-800/80 dark:text-rose-100/80 max-w-2xl mx-auto">
                        A few adorable (and totally fictional) spots to start your journey
                    </p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white/80 dark:bg-[#2a2023]/80 backdrop-blur-sm rounded-3xl overflow-hidden border border-pink-100/70 dark:border-rose-900/50 hover:shadow-xl hover:shadow-pink-100/40 dark:hover:shadow-pink-900/20 transition-all">
                        <div class="h-52 bg-gradient-to-br from-pink-200 to-rose-200 dark:from-pink-900/40 dark:to-rose-900/40 flex items-center justify-center relative">
                            <svg class="h-20 w-20 text-white/90" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M2,21V19H20V21H2M20,8H18V5H20M20,3H4V13A4,4 0 0,0 8,17H14A4,4 0 0,0 18,13V10H20A2,2 0 0,0 22,8V5C22,3.89 21.1,3 20,3M16,5H6V13A2,2 0 0,0 8,15H14A2,2 0 0,0 16,13V5Z" />
                            </svg>
                            <div class="absolute top-4 right-4 px-3 py-1 bg-white/80 dark:bg-[#2a2023]/80 rounded-full text-xs text-rose-700 dark:text-rose-200">Brunei-Muara</div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-xl font-bold text-rose-950 dark:text-rose-50">Gadong Gula Café</h3>
                                <span class="text-sm text-rose-800/70 dark:text-rose-100/70">4.9 ★</span>
                            </div>
                            <p class="text-rose-800/80 dark:text-rose-100/80 text-sm mb-1">Gadong, Bandar Seri Begawan</p>
                            <p class="text-rose-800/80 dark:text-rose-100/80 mb-4">Pastel corners, pandan lattes & the fluffiest waffles.</p>
                            <a href="#" class="text-pink-500 dark:text-pink-300 font-semibold hover:text-pink-600 dark:hover:text-pink-200 transition-colors">Take me there →</a>
                        </div>
                    </div>
                    <div class="bg-white/80 dark:bg-[#2a2023]/80 backdrop-blur-sm rounded-3xl overflow-hidden border border-pink-100/70 dark:border-rose-900/50 hover:shadow-xl hover:shadow-pink-100/40 dark:hover:shadow-pink-900/20 transition-all">
                        <div class="h-52 bg-gradient-to-br from-sky-200 to-cyan-200 dark:from-sky-900/40 dark:to-cyan-900/40 flex items-center justify-center relative">
                            <svg class="h-20 w-20 text-white/90" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M2,21V19H20V21H2M20,8H18V5H20M20,3H4V13A4,4 0 0,0 8,17H14A4,4 0 0,0 18,13V10H20A2,2 0 0,0 22,8V5C22,3.89 21.1,3 20,3M16,5H6V13A2,2 0 0,0 8,15H14A2,2 0 0,0 16,13V5Z" />
                            </svg>
                            <div class="absolute top-4 right-4 px-3 py-1 bg-white/80 dark:bg-[#2a2023]/80 rounded-full text-xs text-rose-700 dark:text-rose-200">Belait</div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-xl font-bold text-rose-950 dark:text-rose-50">Seria Sunset Sips</h3>
                                <span class="text-sm text-rose-800/70 dark:text-rose-100/70">4.8 ★</span>
                            </div>
                            <p class="text-rose-800/80 dark:text-rose-100/80 text-sm mb-1">Seria Town</p>
                            <p class="text-rose-800/80 dark:text-rose-100/80 mb-4">Golden-hour brews, cute cakes & breezy window seats.</p>
                            <a href="#" class="text-pink-500 dark:text-pink-300 font-semibold hover:text-pink-600 dark:hover:text-pink-200 transition-colors">Take me there →</a>
                        </div>
                    </div>
                    <div class="bg-white/80 dark:bg-[#2a2023]/80 backdrop-blur-sm rounded-3xl overflow-hidden border border-pink-100/70 dark:border-rose-900/50 hover:shadow-xl hover:shadow-pink-100/40 dark:hover:shadow-pink-900/20 transition-all">
                        <div class="h-52 bg-gradient-to-br from-emerald-200 to-lime-200 dark:from-emerald-900/40 dark:to-lime-900/40 flex items-center justify-center relative">
                            <svg class="h-20 w-20 text-white/90" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M2,21V19H20V21H2M20,8H18V5H20M20,3H4V13A4,4 0 0,0 8,17H14A4,4 0 0,0 18,13V10H20A2,2 0 0,0 22,8V5C22,3.89 21.1,3 20,3M16,5H6V13A2,2 0 0,0 8,15H14A2,2 0 0,0 16,13V5Z" />
                            </svg>
                            <div class="absolute top-4 right-4 px-3 py-1 bg-white/80 dark:bg-[#2a2023]/80 rounded-full text-xs text-rose-700 dark:text-rose-200">Temburong</div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-xl font-bold text-rose-950 dark:text-rose-50">Bangar Berry Nook</h3>
                                <span class="text-sm text-rose-800/70 dark:text-rose-100/70">5.0 ★</span>
                            </div>
                            <p class="text-rose-800/80 dark:text-rose-100/80 text-sm mb-1">Bangar, Temburong</p>
                            <p class="text-rose-800/80 dark:text-rose-100/80 mb-4">A tiny hideaway with berry sodas and rainforest calm.</p>
                            <a href="#" class="text-pink-500 dark:text-pink-300 font-semibold hover:text-pink-600 dark:hover:text-pink-200 transition-colors">Take me there →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 relative">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <div class="relative bg-gradient-to-r from-pink-400 via-rose-400 to-amber-300 rounded-[2.5rem] p-10 sm:p-14 overflow-hidden shadow-xl shadow-pink-200/50 dark:shadow-pink-900/30">
                    <div class="absolute -top-10 -right-10 w-40 h-40 bg-white/20 rounded-full blur-2xl"></div>
                    <div class="absolute -bottom-16 -left-16 w-56 h-56 bg-white/20 rounded-full blur-3xl"></div>
                    <div class="relative">
                        <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">Plan your next café date in Brunei</h2>
                        <p class="text-lg sm:text-xl text-white/90 mb-10">
                            Save your favourites, map out your route, and share the cutest spots with your friends.
                        </p>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="inline-block px-10 py-4 bg-white text-rose-500 rounded-full hover:shadow-xl hover:shadow-white/40 transition-all transform hover:scale-105 text-lg font-semibold">
                                Build My Café Map
                            </a>
                        @else
                            <a href="{{ url('/contact') }}" class="inline-block px-10 py-4 bg-white text-rose-500 rounded-full hover:shadow-xl hover:shadow-white/40 transition-all transform hover:scale-105 text-lg font-semibold">
                                Build My Café Map
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <footer class="bg-white/70 dark:bg-[#231b1e]/70 backdrop-blur-sm border-t border-pink-100 dark:border-rose-900/50 py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-4 gap-8">
                    <div class="col-span-2">
                        <div class="flex items-center space-x-2 mb-4">
                            <svg class="h-8 w-8 text-pink-400 dark:text-pink-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M2,21H20V19H2M20,8H18V5H20M20,3H4V13A4,4 0 0,0 8,17H14A4,4 0 0,0 18,13V10H20A2,2 0 0,0 22,8V5C22,3.89 21.1,3 20,3Z" />
                            </svg>
                        <a href="{{ url('/') }}" class="text-xl font-bold bg-gradient-to-r from-pink-500 to-rose-400 bg-clip-text text-transparent">MochiMap</a>
                        </div>
                        <p class="text-rose-800/80 dark:text-rose-100/80 mb-4 max-w-md">
                            A cute little guide to discovering (fake) cafés across Brunei Darussalam. Made for slow sips and sweet company.
                        </p>
                    </div>
                    <div>
                        <h4 class="text-rose-950 dark:text-rose-50 font-semibold mb-4">Explore</h4>
                        <ul class="space-y-2">
                            <li><a href="#districts" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">By District</a></li>
                            <li><a href="#featured" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">Favourites</a></li>
                            <li><a href="#explore" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">By Mood</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-rose-950 dark:text-rose-50 font-semibold mb-4">Say hello</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">Suggest a Spot</a></li>
                            <li><a href="/about" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">About</a></li>
                            <li><a href="#" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">Contact</a></li>
                            <li><a href="{{ url('/contact') }}" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">Suggest a Café</a></li>
                            <li><a href="{{ url('/about') }}" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">About</a></li>
                            <li><a href="{{ url('/contact') }}" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="border-t border-pink-100 dark:border-rose-900/50 mt-8 pt-8 text-center text-rose-800/60 dark:text-rose-100/60">
                    <p>&copy; {{ date('Y') }} MochiMap. Crafted with love in Brunei.</p>
                </div>
            </div>
        </footer>
    </body>
</html>
