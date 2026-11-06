<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'MochiMap') }} - Cute Cafés Across the Country</title>

        @fonts

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="bg-[#fff7fb] dark:bg-[#1a1218] text-rose-950 dark:text-rose-50 min-h-screen overflow-x-hidden">
        <header class="w-full bg-white/70 dark:bg-[#221a20]/70 backdrop-blur-sm border-b border-pink-100 dark:border-rose-900/50 sticky top-0 z-50">
            <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <div class="flex items-center space-x-2">
                        <svg class="h-9 w-9 text-pink-400 dark:text-pink-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M2,21V19H20V21H2M20,8H18V5H20M20,3H4V13A4,4 0 0,0 8,17H14A4,4 0 0,0 18,13V10H20A2,2 0 0,0 22,8V5C22,3.89 21.1,3 20,3M16,5H6V13A2,2 0 0,0 8,15H14A2,2 0 0,0 16,13V5Z" />
                        </svg>
                        <span class="text-xl font-bold bg-gradient-to-r from-pink-500 to-rose-400 bg-clip-text text-transparent">MochiMap</span>
                    </div>
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="#explore" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">Explore</a>
                        <a href="#regions" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">Regions</a>
                        <a href="#featured" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">Featured</a>
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
            <div class="absolute -top-20 -left-20 w-72 h-72 bg-pink-200/40 dark:bg-pink-900/20 rounded-full blur-3xl"></div>
            <div class="absolute top-40 -right-32 w-96 h-96 bg-rose-200/40 dark:bg-rose-900/20 rounded-full blur-3xl"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
                <div class="text-center max-w-3xl mx-auto">
                    <div class="inline-flex items-center px-4 py-1.5 bg-white/80 dark:bg-[#2a1f25]/80 rounded-full border border-pink-100 dark:border-rose-900/50 shadow-sm mb-8">
                        <span class="text-sm text-rose-700 dark:text-rose-200">Soft brews & sweet spots</span>
                    </div>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                        <span class="bg-gradient-to-r from-pink-500 via-rose-400 to-orange-300 bg-clip-text text-transparent">Find the coziest cafés</span>
                        <span class="block text-rose-950 dark:text-rose-50">for the coziest days</span>
                    </h1>
                    <p class="text-lg sm:text-xl text-rose-800/80 dark:text-rose-100/80 mb-10 leading-relaxed">
                        A pastel map of tiny, hidden cafés across the country. Perfect for slow sips, study dates, or a moment all to yourself.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="#explore" class="px-8 py-4 bg-gradient-to-r from-pink-400 to-rose-400 text-white rounded-full hover:shadow-xl hover:shadow-pink-200/60 dark:hover:shadow-pink-900/40 transition-all transform hover:scale-105 text-lg font-semibold">
                            Start Sipping
                        </a>
                        <a href="#regions" class="px-8 py-4 bg-white/80 dark:bg-[#2a1f25]/80 text-rose-700 dark:text-rose-200 border border-pink-100 dark:border-rose-900/50 rounded-full hover:bg-white dark:hover:bg-[#352730] transition-all text-lg font-semibold shadow-sm">
                            Browse by Region
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="explore" class="py-20 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl lg:text-4xl font-bold text-rose-950 dark:text-rose-50 mb-4">How would you like to explore?</h2>
                    <p class="text-lg text-rose-800/80 dark:text-rose-100/80 max-w-2xl mx-auto">
                        Pick your mood and we'll lead you straight to the cutest spot
                    </p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="group cursor-pointer">
                        <div class="bg-white/80 dark:bg-[#2a1f25]/80 backdrop-blur-sm rounded-3xl p-6 h-48 flex flex-col justify-center items-center text-center border border-pink-100/70 dark:border-rose-900/50 hover:shadow-xl hover:shadow-pink-100/40 dark:hover:shadow-pink-900/20 transition-all transform group-hover:-translate-y-1">
                            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-pink-100 to-rose-100 dark:from-pink-900/40 dark:to-rose-900/40 flex items-center justify-center mb-3">
                                <svg class="h-7 w-7 text-pink-500 dark:text-pink-300" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-rose-950 dark:text-rose-50">Nearby & Walkable</h3>
                            <p class="text-sm text-rose-800/70 dark:text-rose-100/70 mt-1">Tiny spots just around the corner</p>
                        </div>
                    </div>
                    <div class="group cursor-pointer">
                        <div class="bg-white/80 dark:bg-[#2a1f25]/80 backdrop-blur-sm rounded-3xl p-6 h-48 flex flex-col justify-center items-center text-center border border-pink-100/70 dark:border-rose-900/50 hover:shadow-xl hover:shadow-pink-100/40 dark:hover:shadow-pink-900/20 transition-all transform group-hover:-translate-y-1">
                            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-peach-100 to-pink-100 dark:from-orange-900/30 dark:to-pink-900/30 flex items-center justify-center mb-3">
                                <svg class="h-7 w-7 text-rose-400 dark:text-pink-300" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M2,21V19H20V21H2M20,8V5H18V8H20M20,3A2,2 0 0,1 22,5V8A2,2 0 0,1 20,10H18V13A4,4 0 0,1 14,17H8A4,4 0 0,1 4,13V3H20M16,5H6V13A2,2 0 0,0 8,15H14A2,2 0 0,0 16,13V5Z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-rose-950 dark:text-rose-50">Specialty Sips</h3>
                            <p class="text-sm text-rose-800/70 dark:text-rose-100/70 mt-1">Lavender lattes & cute cold brews</p>
                        </div>
                    </div>
                    <div class="group cursor-pointer">
                        <div class="bg-white/80 dark:bg-[#2a1f25]/80 backdrop-blur-sm rounded-3xl p-6 h-48 flex flex-col justify-center items-center text-center border border-pink-100/70 dark:border-rose-900/50 hover:shadow-xl hover:shadow-pink-100/40 dark:hover:shadow-pink-900/20 transition-all transform group-hover:-translate-y-1">
                            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-rose-100 to-pink-100 dark:from-rose-900/40 dark:to-pink-900/40 flex items-center justify-center mb-3">
                                <svg class="h-7 w-7 text-pink-500 dark:text-pink-300" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12,3L2,12H5V20H19V12H22L12,3M12,8.75A2.25,2.25 0 0,1 14.25,11A2.25,2.25 0 0,1 12,13.25A2.25,2.25 0 0,1 9.75,11A2.25,2.25 0 0,1 12,8.75M12,15C13.5,15 16.5,15.75 16.5,17.25V18H7.5V17.25C7.5,15.75 10.5,15 12,15Z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-rose-950 dark:text-rose-50">Study Nooks</h3>
                            <p class="text-sm text-rose-800/70 dark:text-rose-100/70 mt-1">Plush seats & pastel vibes</p>
                        </div>
                    </div>
                    <div class="group cursor-pointer">
                        <div class="bg-white/80 dark:bg-[#2a1f25]/80 backdrop-blur-sm rounded-3xl p-6 h-48 flex flex-col justify-center items-center text-center border border-pink-100/70 dark:border-rose-900/50 hover:shadow-xl hover:shadow-pink-100/40 dark:hover:shadow-pink-900/20 transition-all transform group-hover:-translate-y-1">
                            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-orange-100 to-pink-100 dark:from-orange-900/30 dark:to-pink-900/30 flex items-center justify-center mb-3">
                                <svg class="h-7 w-7 text-rose-400 dark:text-pink-300" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18.06 22.99H19.72C20.56 22.99 21.25 22.35 21.35 21.53L23 5.05H18V1H16.03V5.05H11.06L11.36 7.39C13.07 7.86 14.67 8.71 15.63 9.65C17.07 11.07 18.06 12.54 18.06 14.94V22.99M1 21.99V21H16.03V21.99C16.03 22.55 15.58 23 15.02 23H1.99C1.44 23 1 22.55 1 21.99M16.03 15.01C16.03 7 1 7 1 15.01H16.03M1 17H16V19H1V17Z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-rose-950 dark:text-rose-50">Sweet Treats</h3>
                            <p class="text-sm text-rose-800/70 dark:text-rose-100/70 mt-1">Mochi donuts & strawberry tarts</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="regions" class="py-20 relative">
            <div class="absolute -bottom-40 left-10 w-80 h-80 bg-pink-200/30 dark:bg-pink-900/15 rounded-full blur-3xl"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl lg:text-4xl font-bold text-rose-950 dark:text-rose-50 mb-4">Wander by region</h2>
                    <p class="text-lg text-rose-800/80 dark:text-rose-100/80 max-w-2xl mx-auto">
                        Each area has its own sprinkle of charm
                    </p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="group bg-white/80 dark:bg-[#2a1f25]/80 backdrop-blur-sm rounded-3xl overflow-hidden border border-pink-100/70 dark:border-rose-900/50 hover:shadow-xl hover:shadow-pink-100/40 dark:hover:shadow-pink-900/20 transition-all transform group-hover:-translate-y-1">
                        <div class="h-48 bg-gradient-to-br from-sky-200 to-cyan-200 dark:from-sky-900/40 dark:to-cyan-900/40 relative">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <svg class="h-16 w-16 text-white/90" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M6,3L7.5,5.5L6,8L4.5,5.5L6,3M18,3L19.5,5.5L18,8L16.5,5.5L18,3M12,8C14.21,8 16,9.79 16,12C16,14.21 14.21,16 12,16C9.79,16 8,14.21 8,12C8,9.79 9.79,8 12,8M12,9.5A2.5,2.5 0 0,0 9.5,12A2.5,2.5 0 0,0 12,14.5A2.5,2.5 0 0,0 14.5,12A2.5,2.5 0 0,0 12,9.5M6,13L7.5,15.5L6,18L4.5,15.5L6,13M18,13L19.5,15.5L18,18L16.5,15.5L18,13Z" />
                                </svg>
                            </div>
                            <div class="absolute bottom-4 left-4 text-white">
                                <h3 class="text-xl font-bold">Seaside Breeze</h3>
                                <p class="text-sm opacity-90">24 cute cafés</p>
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-rose-800/80 dark:text-rose-100/80 mb-4">Salt-kissed lattes with the prettiest ocean views</p>
                            <a href="#" class="text-pink-500 dark:text-pink-300 font-semibold hover:text-pink-600 dark:hover:text-pink-200 transition-colors">Peek around →</a>
                        </div>
                    </div>
                    <div class="group bg-white/80 dark:bg-[#2a1f25]/80 backdrop-blur-sm rounded-3xl overflow-hidden border border-pink-100/70 dark:border-rose-900/50 hover:shadow-xl hover:shadow-pink-100/40 dark:hover:shadow-pink-900/20 transition-all transform group-hover:-translate-y-1">
                        <div class="h-48 bg-gradient-to-br from-emerald-200 to-teal-200 dark:from-emerald-900/40 dark:to-teal-900/40 relative">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <svg class="h-16 w-16 text-white/90" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M11,21V16.74C10.53,16.91 10.03,17 9.5,17C7,17 5,15 5,12.5C5,11.23 5.5,10.09 6.36,9.27C6.13,8.73 6,8.13 6,7.5C6,5 8,3 10.5,3C12.06,3 13.44,3.8 14.25,5C14.33,5 14.41,5 14.5,5A5.5,5.5 0 0,1 20,10.5A5.5,5.5 0 0,1 14.5,16C14,16 13.5,15.93 13,15.79V21H11Z" />
                                </svg>
                            </div>
                            <div class="absolute bottom-4 left-4 text-white">
                                <h3 class="text-xl font-bold">Mossy Meadows</h3>
                                <p class="text-sm opacity-90">19 cute cafés</p>
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-rose-800/80 dark:text-rose-100/80 mb-4">Woodsy nooks with wildflower pastries & herbal tea</p>
                            <a href="#" class="text-pink-500 dark:text-pink-300 font-semibold hover:text-pink-600 dark:hover:text-pink-200 transition-colors">Peek around →</a>
                        </div>
                    </div>
                    <div class="group bg-white/80 dark:bg-[#2a1f25]/80 backdrop-blur-sm rounded-3xl overflow-hidden border border-pink-100/70 dark:border-rose-900/50 hover:shadow-xl hover:shadow-pink-100/40 dark:hover:shadow-pink-900/20 transition-all transform group-hover:-translate-y-1">
                        <div class="h-48 bg-gradient-to-br from-violet-200 to-purple-200 dark:from-violet-900/40 dark:to-purple-900/40 relative">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <svg class="h-16 w-16 text-white/90" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12,3L2,12H5V20H19V12H22L12,3M12,7.7C14.1,7.7 15.8,9.4 15.8,11.5C15.8,14.5 12,18 12,18C12,18 8.2,14.5 8.2,11.5C8.2,9.4 9.9,7.7 12,7.7M12,10A1.5,1.5 0 0,0 10.5,11.5A1.5,1.5 0 0,0 12,13A1.5,1.5 0 0,0 13.5,11.5A1.5,1.5 0 0,0 12,10Z" />
                                </svg>
                            </div>
                            <div class="absolute bottom-4 left-4 text-white">
                                <h3 class="text-xl font-bold">Sugar District</h3>
                                <p class="text-sm opacity-90">56 cute cafés</p>
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-rose-800/80 dark:text-rose-100/80 mb-4">Pastel storefronts, fairy lights & the cutest menus</p>
                            <a href="#" class="text-pink-500 dark:text-pink-300 font-semibold hover:text-pink-600 dark:hover:text-pink-200 transition-colors">Peek around →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="featured" class="py-20 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl lg:text-4xl font-bold text-rose-950 dark:text-rose-50 mb-4">Fan favorites</h2>
                    <p class="text-lg text-rose-800/80 dark:text-rose-100/80 max-w-2xl mx-auto">
                        The ones everyone keeps recommending to each other
                    </p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white/80 dark:bg-[#2a1f25]/80 backdrop-blur-sm rounded-3xl overflow-hidden border border-pink-100/70 dark:border-rose-900/50 hover:shadow-xl hover:shadow-pink-100/40 dark:hover:shadow-pink-900/20 transition-all">
                        <div class="h-56 bg-gradient-to-br from-pink-200 to-rose-200 dark:from-pink-900/40 dark:to-rose-900/40 flex items-center justify-center relative">
                            <svg class="h-20 w-20 text-white/90" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M2,21V19H20V21H2M20,8H18V5H20M20,3H4V13A4,4 0 0,0 8,17H14A4,4 0 0,0 18,13V10H20A2,2 0 0,0 22,8V5C22,3.89 21.1,3 20,3M16,5H6V13A2,2 0 0,0 8,15H14A2,2 0 0,0 16,13V5Z" />
                            </svg>
                            <div class="absolute top-4 right-4 px-3 py-1 bg-white/80 dark:bg-[#2a1f25]/80 rounded-full text-xs text-rose-700 dark:text-rose-200">Seaside Breeze</div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-xl font-bold text-rose-950 dark:text-rose-50">Mochi & Tide</h3>
                                <span class="text-sm text-rose-800/70 dark:text-rose-100/70">4.9 ★</span>
                            </div>
                            <p class="text-rose-800/80 dark:text-rose-100/80 mb-4">Strawberry mochi lattes right by the boardwalk</p>
                            <a href="#" class="text-pink-500 dark:text-pink-300 font-semibold hover:text-pink-600 dark:hover:text-pink-200 transition-colors">Take me there →</a>
                        </div>
                    </div>
                    <div class="bg-white/80 dark:bg-[#2a1f25]/80 backdrop-blur-sm rounded-3xl overflow-hidden border border-pink-100/70 dark:border-rose-900/50 hover:shadow-xl hover:shadow-pink-100/40 dark:hover:shadow-pink-900/20 transition-all">
                        <div class="h-56 bg-gradient-to-br from-emerald-200 to-lime-200 dark:from-emerald-900/40 dark:to-lime-900/40 flex items-center justify-center relative">
                            <svg class="h-20 w-20 text-white/90" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M2,21V19H20V21H2M20,8H18V5H20M20,3H4V13A4,4 0 0,0 8,17H14A4,4 0 0,0 18,13V10H20A2,2 0 0,0 22,8V5C22,3.89 21.1,3 20,3M16,5H6V13A2,2 0 0,0 8,15H14A2,2 0 0,0 16,13V5Z" />
                            </svg>
                            <div class="absolute top-4 right-4 px-3 py-1 bg-white/80 dark:bg-[#2a1f25]/80 rounded-full text-xs text-rose-700 dark:text-rose-200">Mossy Meadows</div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-xl font-bold text-rose-950 dark:text-rose-50">Bunny Bloom Café</h3>
                                <span class="text-sm text-rose-800/70 dark:text-rose-100/70">4.9 ★</span>
                            </div>
                            <p class="text-rose-800/80 dark:text-rose-100/80 mb-4">Cottagecore vibes with bunny-shaped cookies</p>
                            <a href="#" class="text-pink-500 dark:text-pink-300 font-semibold hover:text-pink-600 dark:hover:text-pink-200 transition-colors">Take me there →</a>
                        </div>
                    </div>
                    <div class="bg-white/80 dark:bg-[#2a1f25]/80 backdrop-blur-sm rounded-3xl overflow-hidden border border-pink-100/70 dark:border-rose-900/50 hover:shadow-xl hover:shadow-pink-100/40 dark:hover:shadow-pink-900/20 transition-all">
                        <div class="h-56 bg-gradient-to-br from-violet-200 to-fuchsia-200 dark:from-violet-900/40 dark:to-fuchsia-900/40 flex items-center justify-center relative">
                            <svg class="h-20 w-20 text-white/90" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M2,21V19H20V21H2M20,8H18V5H20M20,3H4V13A4,4 0 0,0 8,17H14A4,4 0 0,0 18,13V10H20A2,2 0 0,0 22,8V5C22,3.89 21.1,3 20,3M16,5H6V13A2,2 0 0,0 8,15H14A2,2 0 0,0 16,13V5Z" />
                            </svg>
                            <div class="absolute top-4 right-4 px-3 py-1 bg-white/80 dark:bg-[#2a1f25]/80 rounded-full text-xs text-rose-700 dark:text-rose-200">Sugar District</div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-xl font-bold text-rose-950 dark:text-rose-50">Sugar Cloud</h3>
                                <span class="text-sm text-rose-800/70 dark:text-rose-100/70">5.0 ★</span>
                            </div>
                            <p class="text-rose-800/80 dark:text-rose-100/80 mb-4">Fairy lights, cotton candy lattes & cloud-shaped cakes</p>
                            <a href="#" class="text-pink-500 dark:text-pink-300 font-semibold hover:text-pink-600 dark:hover:text-pink-200 transition-colors">Take me there →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 relative">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <div class="relative bg-gradient-to-r from-pink-400 via-rose-400 to-orange-300 rounded-[2.5rem] p-10 sm:p-14 overflow-hidden shadow-xl shadow-pink-200/50 dark:shadow-pink-900/30">
                    <div class="absolute -top-10 -right-10 w-40 h-40 bg-white/20 rounded-full blur-2xl"></div>
                    <div class="absolute -bottom-16 -left-16 w-56 h-56 bg-white/20 rounded-full blur-3xl"></div>
                    <div class="relative">
                        <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">Your next cozy sip awaits</h2>
                        <p class="text-lg sm:text-xl text-white/90 mb-10">
                            Save your favorite spots, build your dream café route, and share it with your besties
                        </p>
                        <a href="#" class="inline-block px-10 py-4 bg-white text-rose-500 rounded-full hover:shadow-xl hover:shadow-white/40 transition-all transform hover:scale-105 text-lg font-semibold">
                            Build your MochiMap
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <footer class="bg-white/70 dark:bg-[#221a20]/70 backdrop-blur-sm border-t border-pink-100 dark:border-rose-900/50 py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-4 gap-8">
                    <div class="col-span-2">
                        <div class="flex items-center space-x-2 mb-4">
                            <svg class="h-8 w-8 text-pink-400 dark:text-pink-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M2,21H20V19H2M20,8H18V5H20M20,3H4V13A4,4 0 0,0 8,17H14A4,4 0 0,0 18,13V10H20A2,2 0 0,0 22,8V5C22,3.89 21.1,3 20,3Z" />
                            </svg>
                            <span class="text-xl font-bold bg-gradient-to-r from-pink-500 to-rose-400 bg-clip-text text-transparent">MochiMap</span>
                        </div>
                        <p class="text-rose-800/80 dark:text-rose-100/80 mb-4 max-w-md">
                            A pastel guide to the cutest cafés across the country. Made for slow mornings and sweet moments.
                        </p>
                    </div>
                    <div>
                        <h4 class="text-rose-950 dark:text-rose-50 font-semibold mb-4">Explore</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">All Cafés</a></li>
                            <li><a href="#regions" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">By Region</a></li>
                            <li><a href="#featured" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">Fan Favorites</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-rose-950 dark:text-rose-50 font-semibold mb-4">Get in touch</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">Suggest a Spot</a></li>
HEAD
                            <li><a href="/about" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">About</a></li>

                            <li><a href="#" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">About</a></li>
155bf12531badadcedeb058de135ff6d8ab1c1d5
                            <li><a href="#" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="border-t border-pink-100 dark:border-rose-900/50 mt-8 pt-8 text-center text-rose-800/60 dark:text-rose-100/60">
                    <p>&copy; {{ date('Y') }} MochiMap. Made with love for café hoppers.</p>
                </div>
            </div>
        </footer>
    </body>
</html>
