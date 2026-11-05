<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'MochiMap') }} - About</title>

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
                        <a href="{{ url('/') }}" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">Home</a>
                        <a href="#cafes" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">Cafés</a>
                        <a href="#mission" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">Mission</a>
                        <a href="#team" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">Team</a>
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
                        <span class="text-sm text-rose-700 dark:text-rose-200">Cozy corners of Brunei</span>
                    </div>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                        <span class="bg-gradient-to-r from-pink-500 via-rose-400 to-orange-300 bg-clip-text text-transparent">About MochiMap</span>
                        <span class="block text-rose-950 dark:text-rose-50">our story, brewed with love</span>
                    </h1>
                    <p class="text-lg sm:text-xl text-rose-800/80 dark:text-rose-100/80 mb-10 leading-relaxed">
                        A warm little guide to the coziest cafés tucked across Brunei. We gather the spots worth lingering over, so you can find your next favorite sip.
                    </p>
                </div>
            </div>
        </section>

        <section id="cafes" class="py-20 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl lg:text-4xl font-bold text-rose-950 dark:text-rose-50 mb-4">Fictional cafés in Brunei</h2>
                    <p class="text-lg text-rose-800/80 dark:text-rose-100/80 max-w-2xl mx-auto">
                        A playful taste of the spots we dream up for your slow mornings
                    </p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ([
                        ['name' => 'Bunga Raya Brew', 'tag' => 'Floral lattes', 'desc' => 'Hibiscus-infused brews and pink pastries in a garden setting.'],
                        ['name' => 'Borneo Bean', 'tag' => 'Single origin', 'desc' => 'Locally roasted beans with earthy, rich pour-overs.'],
                        ['name' => 'BruBrew Lab', 'tag' => 'Experimental', 'desc' => 'Cold brews, nitro taps, and playful science-y sips.'],
                        ['name' => 'Kopi Kampung', 'tag' => 'Traditional', 'desc' => 'Kampung-style kopi and kuih in a cozy wooden nook.'],
                        ['name' => 'Temburong Trail Café', 'tag' => 'Nature', 'desc' => 'Rainforest views with herbal teas and light bites.'],
                        ['name' => 'Bandar Beanery', 'tag' => 'City chic', 'desc' => 'Pastel storefronts, fairy lights, and sweet treats.'],
                    ] as $cafe)
                        <div class="bg-white/80 dark:bg-[#2a1f25]/80 backdrop-blur-sm rounded-3xl overflow-hidden border border-pink-100/70 dark:border-rose-900/50 hover:shadow-xl hover:shadow-pink-100/40 dark:hover:shadow-pink-900/20 transition-all">
                            <div class="h-40 bg-gradient-to-br from-pink-200 to-rose-200 dark:from-pink-900/40 dark:to-rose-900/40 flex items-center justify-center relative">
                                <svg class="h-16 w-16 text-white/90" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M2,21V19H20V21H2M20,8H18V5H20M20,3H4V13A4,4 0 0,0 8,17H14A4,4 0 0,0 18,13V10H20A2,2 0 0,0 22,8V5C22,3.89 21.1,3 20,3M16,5H6V13A2,2 0 0,0 8,15H14A2,2 0 0,0 16,13V5Z" />
                                </svg>
                                <div class="absolute top-4 right-4 px-3 py-1 bg-white/80 dark:bg-[#2a1f25]/80 rounded-full text-xs text-rose-700 dark:text-rose-200">{{ $cafe['tag'] }}</div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-rose-950 dark:text-rose-50 mb-2">{{ $cafe['name'] }}</h3>
                                <p class="text-rose-800/80 dark:text-rose-100/80 mb-4">{{ $cafe['desc'] }}</p>
                                <a href="#" class="text-pink-500 dark:text-pink-300 font-semibold hover:text-pink-600 dark:hover:text-pink-200 transition-colors">Visit →</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="mission" class="py-20 relative">
            <div class="absolute -bottom-40 left-10 w-80 h-80 bg-pink-200/30 dark:bg-pink-900/15 rounded-full blur-3xl"></div>
            <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <div class="relative bg-gradient-to-r from-pink-400 via-rose-400 to-orange-300 rounded-[2.5rem] p-10 sm:p-14 overflow-hidden shadow-xl shadow-pink-200/50 dark:shadow-pink-900/30">
                    <div class="absolute -top-10 -right-10 w-40 h-40 bg-white/20 rounded-full blur-2xl"></div>
                    <div class="absolute -bottom-16 -left-16 w-56 h-56 bg-white/20 rounded-full blur-3xl"></div>
                    <div class="relative">
                        <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">Our mission</h2>
                        <p class="text-lg sm:text-xl text-white/90 mb-10">
                            To help you discover local coffee spots nearby — wherever you are in Brunei. We map the cozy, the hidden, and the beloved, so your next slow sip is never far away.
                        </p>
                        <a href="#cafes" class="inline-block px-10 py-4 bg-white text-rose-500 rounded-full hover:shadow-xl hover:shadow-white/40 transition-all transform hover:scale-105 text-lg font-semibold">
                            Find a spot
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="team" class="py-20 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl lg:text-4xl font-bold text-rose-950 dark:text-rose-50 mb-4">Our team</h2>
                    <p class="text-lg text-rose-800/80 dark:text-rose-100/80 max-w-2xl mx-auto">
                        The people brewing MochiMap behind the scenes
                    </p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ([
                        ['name' => 'Aqilah', 'role' => 'Founder & Lead'],
                        ['name' => 'Nadia', 'role' => 'Designer'],
                        ['name' => 'Rizwan', 'role' => 'Developer'],
                        ['name' => 'Syafiq', 'role' => 'Community'],
                    ] as $member)
                        <div class="bg-white/80 dark:bg-[#2a1f25]/80 backdrop-blur-sm rounded-3xl p-6 text-center border border-pink-100/70 dark:border-rose-900/50 hover:shadow-xl hover:shadow-pink-100/40 dark:hover:shadow-pink-900/20 transition-all">
                            <div class="w-20 h-20 mx-auto rounded-full bg-gradient-to-br from-pink-200 to-rose-200 dark:from-pink-900/40 dark:to-rose-900/40 flex items-center justify-center mb-4">
                                <svg class="h-10 w-10 text-white/90" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-rose-950 dark:text-rose-50">{{ $member['name'] }}</h3>
                            <p class="text-sm text-rose-800/70 dark:text-rose-100/70 mt-1">{{ $member['role'] }}</p>
                        </div>
                    @endforeach
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
                            <li><a href="{{ url('/') }}" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">Home</a></li>
                            <li><a href="#cafes" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">Cafés</a></li>
                            <li><a href="#mission" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">Mission</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-rose-950 dark:text-rose-50 font-semibold mb-4">Get in touch</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">Suggest a Spot</a></li>
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
