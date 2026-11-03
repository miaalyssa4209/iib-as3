<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @fonts

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="bg-amber-50 dark:bg-stone-950 text-stone-900 dark:text-stone-100 min-h-screen">
        <header class="w-full bg-white/80 dark:bg-stone-900/80 backdrop-blur-sm border-b border-amber-200 dark:border-stone-800 sticky top-0 z-50">
            <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <div class="flex items-center space-x-2">
                        <svg class="h-8 w-8 text-amber-700 dark:text-amber-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M2,21H20V19H2M20,8H18V5H20M20,3H4V13A4,4 0 0,0 8,17H14A4,4 0 0,0 18,13V10H20A2,2 0 0,0 22,8V5C22,3.89 21.1,3 20,3Z" />
                        </svg>
                        <span class="text-xl font-bold text-amber-900 dark:text-amber-400">CaféRoutes</span>
                    </div>
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="#explore" class="text-stone-700 dark:text-stone-300 hover:text-amber-700 dark:hover:text-amber-400 transition-colors">Explore</a>
                        <a href="#regions" class="text-stone-700 dark:text-stone-300 hover:text-amber-700 dark:hover:text-amber-400 transition-colors">Regions</a>
                        <a href="#featured" class="text-stone-700 dark:text-stone-300 hover:text-amber-700 dark:hover:text-amber-400 transition-colors">Featured</a>
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="px-4 py-2 bg-amber-700 text-white rounded-lg hover:bg-amber-800 transition-colors">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="px-4 py-2 text-amber-700 dark:text-amber-400 hover:text-amber-800 dark:hover:text-amber-300 transition-colors">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="px-4 py-2 bg-amber-700 text-white rounded-lg hover:bg-amber-800 transition-colors">Sign up</a>
                                @endif
                            @endauth
                        @endif
                    </div>
                </div>
            </nav>
        </header>

        <section class="relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-amber-100 via-orange-50 to-yellow-50 dark:from-stone-900 dark:via-amber-950/20 dark:to-stone-950"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
                <div class="text-center max-w-3xl mx-auto">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-amber-900 dark:text-amber-400 mb-6 leading-tight">
                        Discover Hidden Cafés
                        <span class="block text-orange-700 dark:text-orange-400">Across the Country</span>
                    </h1>
                    <p class="text-xl text-stone-700 dark:text-stone-300 mb-10 leading-relaxed">
                        Navigate through curated collections of artisan coffee shops, cozy bistros, and local roasters. 
                        Your next perfect cup is just around the corner.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="#explore" class="px-8 py-4 bg-amber-700 text-white rounded-xl hover:bg-amber-800 transition-all transform hover:scale-105 shadow-lg shadow-amber-700/25 text-lg font-semibold">
                            Start Exploring
                        </a>
                        <a href="#regions" class="px-8 py-4 bg-white dark:bg-stone-800 text-amber-900 dark:text-amber-400 border-2 border-amber-200 dark:border-stone-700 rounded-xl hover:bg-amber-50 dark:hover:bg-stone-700 transition-all text-lg font-semibold">
                            Browse by Region
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="explore" class="py-20 bg-white dark:bg-stone-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl lg:text-4xl font-bold text-amber-900 dark:text-amber-400 mb-4">Find Your Perfect Café</h2>
                    <p class="text-lg text-stone-600 dark:text-stone-400 max-w-2xl mx-auto">
                        Filter by location, atmosphere, specialty brews, and more
                    </p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="group cursor-pointer">
                        <div class="bg-gradient-to-br from-amber-100 to-orange-100 dark:from-amber-900/30 dark:to-orange-900/30 rounded-2xl p-6 h-48 flex flex-col justify-center items-center text-center hover:shadow-xl transition-all transform group-hover:scale-105">
                            <svg class="h-12 w-12 text-amber-700 dark:text-amber-400 mb-3" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z" />
                            </svg>
                            <h3 class="text-lg font-semibold text-amber-900 dark:text-amber-400">By Location</h3>
                            <p class="text-sm text-stone-600 dark:text-stone-400 mt-1">Find nearby spots</p>
                        </div>
                    </div>
                    <div class="group cursor-pointer">
                        <div class="bg-gradient-to-br from-yellow-100 to-amber-100 dark:from-yellow-900/30 dark:to-amber-900/30 rounded-2xl p-6 h-48 flex flex-col justify-center items-center text-center hover:shadow-xl transition-all transform group-hover:scale-105">
                            <svg class="h-12 w-12 text-amber-700 dark:text-amber-400 mb-3" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M2,21V19H20V21H2M20,8V5H18V8H20M20,3A2,2 0 0,1 22,5V8A2,2 0 0,1 20,10H18V13A4,4 0 0,1 14,17H8A4,4 0 0,1 4,13V3H20M16,5H6V13A2,2 0 0,0 8,15H14A2,2 0 0,0 16,13V5Z" />
                            </svg>
                            <h3 class="text-lg font-semibold text-amber-900 dark:text-amber-400">Specialty Coffee</h3>
                            <p class="text-sm text-stone-600 dark:text-stone-400 mt-1">Pour-overs & roasts</p>
                        </div>
                    </div>
                    <div class="group cursor-pointer">
                        <div class="bg-gradient-to-br from-orange-100 to-red-100 dark:from-orange-900/30 dark:to-red-900/30 rounded-2xl p-6 h-48 flex flex-col justify-center items-center text-center hover:shadow-xl transition-all transform group-hover:scale-105">
                            <svg class="h-12 w-12 text-amber-700 dark:text-amber-400 mb-3" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17,8C8,10 5.9,16.17 3.82,21.34L5.71,22L6.66,19.7C7.14,19.87 7.64,20 8,20C19,20 22,3 22,3C21,5 14,5.25 9,6.25C4,7.25 2,11.5 2,13.5C2,15.5 3.75,17.25 3.75,17.25C7,8 17,8 17,8Z" />
                            </svg>
                            <h3 class="text-lg font-semibold text-amber-900 dark:text-amber-400">Cozy Atmosphere</h3>
                            <p class="text-sm text-stone-600 dark:text-stone-400 mt-1">Work & unwind</p>
                        </div>
                    </div>
                    <div class="group cursor-pointer">
                        <div class="bg-gradient-to-br from-rose-100 to-pink-100 dark:from-rose-900/30 dark:to-pink-900/30 rounded-2xl p-6 h-48 flex flex-col justify-center items-center text-center hover:shadow-xl transition-all transform group-hover:scale-105">
                            <svg class="h-12 w-12 text-amber-700 dark:text-amber-400 mb-3" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.06 22.99H19.72C20.56 22.99 21.25 22.35 21.35 21.53L23 5.05H18V1H16.03V5.05H11.06L11.36 7.39C13.07 7.86 14.67 8.71 15.63 9.65C17.07 11.07 18.06 12.54 18.06 14.94V22.99M1 21.99V21H16.03V21.99C16.03 22.55 15.58 23 15.02 23H1.99C1.44 23 1 22.55 1 21.99M16.03 15.01C16.03 7 1 7 1 15.01H16.03M1 17H16V19H1V17Z" />
                            </svg>
                            <h3 class="text-lg font-semibold text-amber-900 dark:text-amber-400">Local Treats</h3>
                            <p class="text-sm text-stone-600 dark:text-stone-400 mt-1">Pastries & bites</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="regions" class="py-20 bg-gradient-to-br from-amber-50 to-orange-50 dark:from-stone-950 dark:to-amber-950/10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl lg:text-4xl font-bold text-amber-900 dark:text-amber-400 mb-4">Explore by Region</h2>
                    <p class="text-lg text-stone-600 dark:text-stone-400 max-w-2xl mx-auto">
                        From bustling city centers to scenic mountain towns
                    </p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white dark:bg-stone-900 rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                        <div class="h-48 bg-gradient-to-br from-blue-400 to-cyan-500 relative">
                            <div class="absolute inset-0 bg-black/20"></div>
                            <div class="absolute bottom-4 left-4 text-white">
                                <h3 class="text-2xl font-bold">Coastal Region</h3>
                                <p class="text-sm opacity-90">32 cafés</p>
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-stone-600 dark:text-stone-400 mb-4">Seaside spots with ocean views and fresh sea air</p>
                            <a href="#" class="text-amber-700 dark:text-amber-400 font-semibold hover:text-amber-800 dark:hover:text-amber-300 transition-colors">Explore →</a>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-stone-900 rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                        <div class="h-48 bg-gradient-to-br from-green-400 to-emerald-500 relative">
                            <div class="absolute inset-0 bg-black/20"></div>
                            <div class="absolute bottom-4 left-4 text-white">
                                <h3 class="text-2xl font-bold">Mountain Highlands</h3>
                                <p class="text-sm opacity-90">28 cafés</p>
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-stone-600 dark:text-stone-400 mb-4">Rustic retreats nestled in scenic mountain valleys</p>
                            <a href="#" class="text-amber-700 dark:text-amber-400 font-semibold hover:text-amber-800 dark:hover:text-amber-300 transition-colors">Explore →</a>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-stone-900 rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                        <div class="h-48 bg-gradient-to-br from-purple-400 to-pink-500 relative">
                            <div class="absolute inset-0 bg-black/20"></div>
                            <div class="absolute bottom-4 left-4 text-white">
                                <h3 class="text-2xl font-bold">Urban Metros</h3>
                                <p class="text-sm opacity-90">67 cafés</p>
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-stone-600 dark:text-stone-400 mb-4">Trendy spots in the heart of bustling city life</p>
                            <a href="#" class="text-amber-700 dark:text-amber-400 font-semibold hover:text-amber-800 dark:hover:text-amber-300 transition-colors">Explore →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="featured" class="py-20 bg-white dark:bg-stone-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl lg:text-4xl font-bold text-amber-900 dark:text-amber-400 mb-4">Featured Cafés</h2>
                    <p class="text-lg text-stone-600 dark:text-stone-400 max-w-2xl mx-auto">
                        Handpicked gems from our nationwide collection
                    </p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-amber-50 dark:bg-stone-800 rounded-2xl overflow-hidden hover:shadow-lg transition-shadow">
                        <div class="h-56 bg-gradient-to-br from-amber-200 to-orange-300 dark:from-amber-800 dark:to-orange-900 flex items-center justify-center">
                            <svg class="h-16 w-16 text-amber-700 dark:text-amber-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M2,21H20V19H2M20,8H18V5H20M20,3H4V13A4,4 0 0,0 8,17H14A4,4 0 0,0 18,13V10H20A2,2 0 0,0 22,8V5C22,3.89 21.1,3 20,3Z" />
                            </svg>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-xl font-bold text-amber-900 dark:text-amber-400">Riverside Roasters</h3>
                                <span class="px-2 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 text-xs rounded-full">Coastal</span>
                            </div>
                            <p class="text-stone-600 dark:text-stone-400 text-sm mb-3">Harbor District • 4.9 ★</p>
                            <p class="text-stone-700 dark:text-stone-300 mb-4">Artisan micro-roastery with waterfront patio</p>
                            <a href="#" class="text-amber-700 dark:text-amber-400 font-semibold hover:text-amber-800 dark:hover:text-amber-300 transition-colors">View Details →</a>
                        </div>
                    </div>
                    <div class="bg-amber-50 dark:bg-stone-800 rounded-2xl overflow-hidden hover:shadow-lg transition-shadow">
                        <div class="h-56 bg-gradient-to-br from-green-200 to-emerald-300 dark:from-green-800 dark:to-emerald-900 flex items-center justify-center">
                            <svg class="h-16 w-16 text-amber-700 dark:text-amber-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M2,21H20V19H2M20,8H18V5H20M20,3H4V13A4,4 0 0,0 8,17H14A4,4 0 0,0 18,13V10H20A2,2 0 0,0 22,8V5C22,3.89 21.1,3 20,3Z" />
                            </svg>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-xl font-bold text-amber-900 dark:text-amber-400">Summit Brew House</h3>
                                <span class="px-2 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 text-xs rounded-full">Mountain</span>
                            </div>
                            <p class="text-stone-600 dark:text-stone-400 text-sm mb-3">Alpine Trail • 4.8 ★</p>
                            <p class="text-stone-700 dark:text-stone-300 mb-4">Mountain lodge café with panoramic views</p>
                            <a href="#" class="text-amber-700 dark:text-amber-400 font-semibold hover:text-amber-800 dark:hover:text-amber-300 transition-colors">View Details →</a>
                        </div>
                    </div>
                    <div class="bg-amber-50 dark:bg-stone-800 rounded-2xl overflow-hidden hover:shadow-lg transition-shadow">
                        <div class="h-56 bg-gradient-to-br from-purple-200 to-pink-300 dark:from-purple-800 dark:to-pink-900 flex items-center justify-center">
                            <svg class="h-16 w-16 text-amber-700 dark:text-amber-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M2,21H20V19H2M20,8H18V5H20M20,3H4V13A4,4 0 0,0 8,17H14A4,4 0 0,0 18,13V10H20A2,2 0 0,0 22,8V5C22,3.89 21.1,3 20,3Z" />
                            </svg>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-xl font-bold text-amber-900 dark:text-amber-400">Metro Grind Co.</h3>
                                <span class="px-2 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-400 text-xs rounded-full">Urban</span>
                            </div>
                            <p class="text-stone-600 dark:text-stone-400 text-sm mb-3">Downtown • 4.9 ★</p>
                            <p class="text-stone-700 dark:text-stone-300 mb-4">Third-wave coffee bar with rotating art exhibits</p>
                            <a href="#" class="text-amber-700 dark:text-amber-400 font-semibold hover:text-amber-800 dark:hover:text-amber-300 transition-colors">View Details →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 bg-gradient-to-br from-amber-700 to-orange-800 dark:from-amber-900 dark:to-orange-950">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">Ready to Start Your Café Journey?</h2>
                <p class="text-xl text-amber-100 mb-10">
                    Join thousands of coffee lovers discovering the best cafés across the country
                </p>
                <a href="#" class="inline-block px-10 py-4 bg-white text-amber-900 rounded-xl hover:bg-amber-50 transition-all transform hover:scale-105 shadow-xl text-lg font-semibold">
                    Create Your Café Map
                </a>
            </div>
        </section>

        <footer class="bg-stone-900 text-stone-300 py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-4 gap-8">
                    <div class="col-span-2">
                        <div class="flex items-center space-x-2 mb-4">
                            <svg class="h-8 w-8 text-amber-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M2,21H20V19H2M20,8H18V5H20M20,3H4V13A4,4 0 0,0 8,17H14A4,4 0 0,0 18,13V10H20A2,2 0 0,0 22,8V5C22,3.89 21.1,3 20,3Z" />
                            </svg>
                            <span class="text-xl font-bold text-white">CaféRoutes</span>
                        </div>
                        <p class="text-stone-400 mb-4 max-w-md">
                            Your ultimate guide to discovering and navigating the finest cafés across the nation.
                        </p>
                    </div>
                    <div>
                        <h4 class="text-white font-semibold mb-4">Explore</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="hover:text-amber-400 transition-colors">All Cafés</a></li>
                            <li><a href="#regions" class="hover:text-amber-400 transition-colors">By Region</a></li>
                            <li><a href="#featured" class="hover:text-amber-400 transition-colors">Featured</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-white font-semibold mb-4">Connect</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="hover:text-amber-400 transition-colors">About Us</a></li>
                            <li><a href="#" class="hover:text-amber-400 transition-colors">Submit a Café</a></li>
                            <li><a href="#" class="hover:text-amber-400 transition-colors">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="border-t border-stone-800 mt-8 pt-8 text-center text-stone-500">
                    <p>&copy; {{ date('Y') }} CaféRoutes. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </body>
</html>
