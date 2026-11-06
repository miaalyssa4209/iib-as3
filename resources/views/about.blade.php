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
    <body class="bg-[#f4e9d8] dark:bg-[#2b1d14] text-[#3b2414] dark:text-[#f4e9d8] min-h-screen overflow-x-hidden">
        <header class="w-full bg-[#f5ead9]/80 dark:bg-[#3a2c22]/80 backdrop-blur-sm border-b border-amber-200/60 dark:border-amber-900/40 sticky top-0 z-50">
            <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <div class="flex items-center space-x-2">
                        <span class="text-xl font-bold text-amber-900 dark:text-amber-100">MochiMap</span>
                    </div>
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="{{ url('/') }}" class="text-stone-700/80 dark:text-stone-200/80 hover:text-amber-700 dark:hover:text-amber-300 transition-colors">Home</a>
                        <a href="#cafes" class="text-stone-700/80 dark:text-stone-200/80 hover:text-amber-700 dark:hover:text-amber-300 transition-colors">Cafés</a>
                        <a href="#mission" class="text-stone-700/80 dark:text-stone-200/80 hover:text-amber-700 dark:hover:text-amber-300 transition-colors">Mission</a>
                        <a href="#team" class="text-stone-700/80 dark:text-stone-200/80 hover:text-amber-700 dark:hover:text-amber-300 transition-colors">Team</a>
                    </div>
                </div>
            </nav>
        </header>

        <section class="relative">
            <div class="absolute -top-20 -left-20 w-72 h-72 bg-amber-200/40 dark:bg-amber-900/20 rounded-full blur-3xl"></div>
            <div class="absolute top-40 -right-32 w-96 h-96 bg-orange-200/30 dark:bg-orange-900/15 rounded-full blur-3xl"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
                <div class="text-center max-w-3xl mx-auto">
                    <div class="inline-flex items-center px-4 py-1.5 bg-[#f5ead9]/80 dark:bg-[#3a2c22]/80 rounded-full border border-amber-200/60 dark:border-amber-900/40 shadow-sm mb-8">
                        <span class="text-sm text-amber-900 dark:text-amber-100">Cozy corners of Brunei</span>
                    </div>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-6 leading-tight text-amber-950 dark:text-amber-50">
                        About MochiMap
                        <span class="block text-stone-700 dark:text-stone-200 text-2xl sm:text-3xl font-medium mt-3">our story, brewed with love</span>
                    </h1>
                    <p class="text-lg sm:text-xl text-stone-700/80 dark:text-stone-200/80 mb-10 leading-relaxed">
                        A warm little guide to the coziest cafés tucked across Brunei. We gather the spots worth lingering over, so you can find your next favorite sip.
                    </p>
                </div>
            </div>
        </section>

        <section id="cafes" class="py-20 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl lg:text-4xl font-bold text-amber-950 dark:text-amber-50 mb-4">Fictional cafés in Brunei</h2>
                    <p class="text-lg text-stone-700/80 dark:text-stone-200/80 max-w-2xl mx-auto">
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
                        <div class="bg-[#f5ead9]/80 dark:bg-[#3a2c22]/80 backdrop-blur-sm rounded-3xl overflow-hidden border border-amber-200/60 dark:border-amber-900/40 hover:shadow-xl hover:shadow-amber-100/40 dark:hover:shadow-amber-900/20 transition-all">
                            <div class="h-40 bg-gradient-to-br from-amber-200 to-orange-200 dark:from-amber-900/40 dark:to-orange-900/30 flex items-center justify-center relative">
                                <div class="absolute top-4 right-4 px-3 py-1 bg-[#f5ead9]/80 dark:bg-[#3a2c22]/80 rounded-full text-xs text-amber-900 dark:text-amber-100">{{ $cafe['tag'] }}</div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-amber-950 dark:text-amber-50 mb-2">{{ $cafe['name'] }}</h3>
                                <p class="text-stone-700/80 dark:text-stone-200/80 mb-4">{{ $cafe['desc'] }}</p>
                                <a href="#" class="text-amber-700 dark:text-amber-300 font-semibold hover:text-amber-800 dark:hover:text-amber-200 transition-colors">Visit →</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="mission" class="py-20 relative">
            <div class="absolute -bottom-40 left-10 w-80 h-80 bg-amber-200/30 dark:bg-amber-900/15 rounded-full blur-3xl"></div>
            <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <div class="relative bg-gradient-to-r from-amber-700 via-amber-600 to-orange-500 rounded-[2.5rem] p-10 sm:p-14 overflow-hidden shadow-xl shadow-amber-200/50 dark:shadow-amber-900/30">
                    <div class="absolute -top-10 -right-10 w-40 h-40 bg-white/10 rounded-full blur-2xl"></div>
                    <div class="absolute -bottom-16 -left-16 w-56 h-56 bg-white/10 rounded-full blur-3xl"></div>
                    <div class="relative">
                        <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">Our mission</h2>
                        <p class="text-lg sm:text-xl text-white/90 mb-10">
                            To help you discover local coffee spots nearby — wherever you are in Brunei. We map the cozy, the hidden, and the beloved, so your next slow sip is never far away.
                        </p>
                        <a href="#cafes" class="inline-block px-10 py-4 bg-[#faf3e8] text-amber-900 rounded-full hover:shadow-xl hover:shadow-white/40 transition-all transform hover:scale-105 text-lg font-semibold">
                            Find a spot
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="team" class="py-20 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl lg:text-4xl font-bold text-amber-950 dark:text-amber-50 mb-4">Our team</h2>
                    <p class="text-lg text-stone-700/80 dark:text-stone-200/80 max-w-2xl mx-auto">
                        The people brewing MochiMap behind the scenes
                    </p>
                </div>
                <div class="grid md:grid-cols-3 gap-6 max-w-4xl mx-auto">
                    @foreach ([
                        ['name' => 'Mia', 'role' => 'Founder'],
                        ['name' => 'Aqilah', 'role' => 'Designer'],
                        ['name' => 'Areena', 'role' => 'Developer'],
                    ] as $member)
                        <div class="bg-[#f5ead9]/80 dark:bg-[#3a2c22]/80 backdrop-blur-sm rounded-3xl p-6 text-center border border-amber-200/60 dark:border-amber-900/40 hover:shadow-xl hover:shadow-amber-100/40 dark:hover:shadow-amber-900/20 transition-all">
                            <div class="w-20 h-20 mx-auto rounded-full bg-gradient-to-br from-amber-200 to-orange-200 dark:from-amber-900/40 dark:to-orange-900/30 flex items-center justify-center mb-4">
                                <span class="text-2xl font-bold text-amber-900 dark:text-amber-100">{{ substr($member['name'], 0, 1) }}</span>
                            </div>
                            <h3 class="text-lg font-semibold text-amber-950 dark:text-amber-50">{{ $member['name'] }}</h3>
                            <p class="text-sm text-stone-700/70 dark:text-stone-200/70 mt-1">{{ $member['role'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <footer class="bg-[#f5ead9]/80 dark:bg-[#3a2c22]/80 backdrop-blur-sm border-t border-amber-200/60 dark:border-amber-900/40 py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-4 gap-8">
                    <div class="col-span-2">
                        <span class="text-xl font-bold text-amber-900 dark:text-amber-100">MochiMap</span>
                        <p class="text-stone-700/80 dark:text-stone-200/80 mb-4 max-w-md mt-3">
                            A warm guide to the coziest cafés across Brunei. Made for slow mornings and sweet moments.
                        </p>
                    </div>
                    <div>
                        <h4 class="text-amber-950 dark:text-amber-50 font-semibold mb-4">Explore</h4>
                        <ul class="space-y-2">
                            <li><a href="{{ url('/') }}" class="text-stone-700/80 dark:text-stone-200/80 hover:text-amber-700 dark:hover:text-amber-300 transition-colors">Home</a></li>
                            <li><a href="#cafes" class="text-stone-700/80 dark:text-stone-200/80 hover:text-amber-700 dark:hover:text-amber-300 transition-colors">Cafés</a></li>
                            <li><a href="#mission" class="text-stone-700/80 dark:text-stone-200/80 hover:text-amber-700 dark:hover:text-amber-300 transition-colors">Mission</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-amber-950 dark:text-amber-50 font-semibold mb-4">Get in touch</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-stone-700/80 dark:text-stone-200/80 hover:text-amber-700 dark:hover:text-amber-300 transition-colors">Suggest a Spot</a></li>
                            <li><a href="{{ url('/contact') }}" class="text-stone-700/80 dark:text-stone-200/80 hover:text-amber-700 dark:hover:text-amber-300 transition-colors">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="border-t border-amber-200/60 dark:border-amber-900/40 mt-8 pt-8 text-center text-stone-700/60 dark:text-stone-200/60">
                    <p>&copy; {{ date('Y') }} MochiMap. Made with love for café hoppers.</p>
                </div>
            </div>
        </footer>
    </body>
</html>
