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
HEAD
    <body id="top" class="min-h-screen overflow-x-hidden bg-stone-50 text-stone-900 antialiased dark:bg-stone-950 dark:text-stone-100">
        <div class="pointer-events-none fixed inset-0 -z-10 overflow-hidden">
            <div class="absolute -top-24 left-1/2 h-72 w-72 -translate-x-1/2 rounded-full bg-rose-200/40 blur-3xl dark:bg-rose-900/20"></div>
            <div class="absolute top-1/3 -left-20 h-64 w-64 rounded-full bg-pink-200/30 blur-3xl dark:bg-pink-900/15"></div>
            <div class="absolute bottom-0 right-0 h-80 w-80 rounded-full bg-amber-100/40 blur-3xl dark:bg-rose-900/10"></div>
        </div>

        <header class="sticky top-0 z-50 border-b border-stone-200/70 bg-white/80 backdrop-blur-md dark:border-stone-800/80 dark:bg-stone-950/75">
            <nav class="mx-auto flex h-16 max-w-6xl items-center justify-between px-4 sm:px-6 lg:px-8" aria-label="Main">
                <a href="{{ url('/') }}" class="flex items-center gap-2.5">
                    <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-rose-100 text-rose-600 dark:bg-rose-950/60 dark:text-rose-300">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M2,21V19H20V21H2M20,8H18V5H20M20,3H4V13A4,4 0 0,0 8,17H14A4,4 0 0,0 18,13V10H20A2,2 0 0,0 22,8V5C22,3.89 21.1,3 20,3M16,5H6V13A2,2 0 0,0 8,15H14A2,2 0 0,0 16,13V5Z" />
                        </svg>
                    </span>
                    <span class="text-lg font-semibold tracking-tight text-stone-900 dark:text-stone-50">{{ config('app.name', 'MochiMap') }}</span>
                </a>

                <div class="hidden items-center gap-8 text-sm font-medium md:flex">
                    <a href="{{ url('/') }}" class="text-stone-600 transition hover:text-rose-600 dark:text-stone-300 dark:hover:text-rose-300">Home</a>
                    <a href="#cafes" class="text-stone-600 transition hover:text-rose-600 dark:text-stone-300 dark:hover:text-rose-300">Cafés</a>
                    <a href="#mission" class="text-stone-600 transition hover:text-rose-600 dark:text-stone-300 dark:hover:text-rose-300">Mission</a>
                    <a href="#team" class="text-stone-600 transition hover:text-rose-600 dark:text-stone-300 dark:hover:text-rose-300">Team</a>
                </div>

                <a href="#cafes" class="inline-flex items-center rounded-full bg-rose-600 px-4 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-rose-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-rose-500 focus-visible:ring-offset-2 dark:focus-visible:ring-offset-stone-950">
                    Explore cafés
                </a>
            </nav>
        </header>

        <main>
            <section class="relative">
                <div class="mx-auto max-w-6xl px-4 py-20 sm:px-6 sm:py-24 lg:px-8 lg:py-28">
                    <div class="mx-auto max-w-3xl text-center">
                        <p class="inline-flex items-center rounded-full border border-rose-200/80 bg-white/70 px-4 py-1.5 text-sm font-medium text-rose-700 shadow-sm dark:border-rose-900/60 dark:bg-stone-900/70 dark:text-rose-200">
                            Cozy corners of Brunei
                        </p>
                        <h1 class="mt-6 text-4xl font-semibold tracking-tight text-stone-900 sm:text-5xl lg:text-6xl dark:text-stone-50">
                            About <span class="text-rose-600 dark:text-rose-300">{{ config('app.name', 'MochiMap') }}</span>
                        </h1>
                        <p class="mx-auto mt-6 max-w-2xl text-base leading-7 text-stone-600 sm:text-lg dark:text-stone-300">
                            A warm, modern guide to the coziest cafés tucked across Brunei. We gather the spots worth lingering over, so you can find your next favorite sip with ease.
                        </p>
                        <div class="mt-10 flex flex-col items-center justify-center gap-3 sm:flex-row">
                            <a href="#mission" class="inline-flex w-full items-center justify-center rounded-full bg-stone-900 px-6 py-3 text-sm font-semibold text-white transition hover:bg-stone-800 sm:w-auto dark:bg-stone-100 dark:text-stone-900 dark:hover:bg-white">
                                Our mission
                            </a>
                            <a href="#team" class="inline-flex w-full items-center justify-center rounded-full border border-stone-300 bg-white/70 px-6 py-3 text-sm font-semibold text-stone-800 transition hover:border-rose-300 hover:text-rose-700 sm:w-auto dark:border-stone-700 dark:bg-stone-900/60 dark:text-stone-100 dark:hover:border-rose-800 dark:hover:text-rose-300">
                                Meet the team
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="cafes" class="border-t border-stone-200/70 bg-white/40 py-16 sm:py-20 dark:border-stone-800/80 dark:bg-stone-900/20">
                <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl text-center">
                        <h2 class="text-3xl font-semibold tracking-tight text-stone-900 sm:text-4xl dark:text-stone-50">Fictional cafés in Brunei</h2>
                        <p class="mt-4 text-base leading-7 text-stone-600 dark:text-stone-300">
                            A playful taste of the spots we dream up for your slow mornings.
                        </p>
                    </div>

                    <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach ([
                            ['name' => 'Bunga Raya Brew', 'tag' => 'Floral lattes', 'desc' => 'Hibiscus-infused brews and pink pastries in a garden setting.'],
                            ['name' => 'Borneo Bean', 'tag' => 'Single origin', 'desc' => 'Locally roasted beans with earthy, rich pour-overs.'],
                            ['name' => 'BruBrew Lab', 'tag' => 'Experimental', 'desc' => 'Cold brews, nitro taps, and playful science-y sips.'],
                            ['name' => 'Kopi Kampung', 'tag' => 'Traditional', 'desc' => 'Kampung-style kopi and kuih in a cozy wooden nook.'],
                            ['name' => 'Temburong Trail Café', 'tag' => 'Nature', 'desc' => 'Rainforest views with herbal teas and light bites.'],
                            ['name' => 'Bandar Beanery', 'tag' => 'City chic', 'desc' => 'Pastel storefronts, fairy lights, and sweet treats.'],
                        ] as $cafe)
                            <article class="group flex h-full flex-col overflow-hidden rounded-2xl border border-stone-200/80 bg-white/90 shadow-sm transition duration-200 hover:-translate-y-0.5 hover:shadow-md dark:border-stone-800 dark:bg-stone-900/80">
                                <div class="relative flex h-36 items-center justify-center bg-gradient-to-br from-rose-100 via-pink-50 to-amber-50 dark:from-rose-950/50 dark:via-stone-900 dark:to-stone-900">
                                    <svg class="h-12 w-12 text-rose-500/80 dark:text-rose-300/80" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M2,21V19H20V21H2M20,8H18V5H20M20,3H4V13A4,4 0 0,0 8,17H14A4,4 0 0,0 18,13V10H20A2,2 0 0,0 22,8V5C22,3.89 21.1,3 20,3M16,5H6V13A2,2 0 0,0 8,15H14A2,2 0 0,0 16,13V5Z" />
                                    </svg>
                                    <span class="absolute right-4 top-4 rounded-full bg-white/90 px-3 py-1 text-xs font-medium text-stone-700 ring-1 ring-stone-200/70 dark:bg-stone-950/80 dark:text-stone-200 dark:ring-stone-700">{{ $cafe['tag'] }}</span>
                                </div>
                                <div class="flex flex-1 flex-col p-6">
                                    <h3 class="text-lg font-semibold text-stone-900 dark:text-stone-50">{{ $cafe['name'] }}</h3>
                                    <p class="mt-2 flex-1 text-sm leading-6 text-stone-600 dark:text-stone-300">{{ $cafe['desc'] }}</p>
                                    <a href="#top" class="mt-5 inline-flex items-center text-sm font-semibold text-rose-600 transition hover:text-rose-500 dark:text-rose-300 dark:hover:text-rose-200">
                                        Visit
                                        <span class="ml-1" aria-hidden="true">→</span>
                                    </a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>

            <section id="mission" class="py-16 sm:py-20">
                <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                    <div class="relative overflow-hidden rounded-3xl border border-rose-200/60 bg-gradient-to-br from-rose-600 via-rose-500 to-pink-500 px-6 py-12 text-center shadow-lg sm:px-12 sm:py-16 dark:border-rose-900/50 dark:from-rose-950 dark:via-rose-900 dark:to-stone-900">
                        <div class="absolute -right-10 -top-10 h-40 w-40 rounded-full bg-white/10 blur-2xl"></div>
                        <div class="absolute -bottom-16 -left-12 h-56 w-56 rounded-full bg-amber-200/10 blur-3xl"></div>
                        <div class="relative mx-auto max-w-2xl">
                            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-rose-100/90">What we believe</p>
                            <h2 class="mt-3 text-3xl font-semibold tracking-tight text-white sm:text-4xl">Our mission</h2>
                            <p class="mt-5 text-base leading-7 text-rose-50/95 sm:text-lg">
                                To help you discover local coffee spots nearby — wherever you are in Brunei. We map the cozy, the hidden, and the beloved, so your next slow sip is never far away.
                            </p>
                            <a href="#cafes" class="mt-8 inline-flex items-center justify-center rounded-full bg-white px-6 py-3 text-sm font-semibold text-rose-700 transition hover:bg-rose-50 focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-rose-600">
                                Find a spot
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="team" class="border-t border-stone-200/70 bg-white/40 py-16 sm:py-20 dark:border-stone-800/80 dark:bg-stone-900/20">
                <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl text-center">
                        <h2 class="text-3xl font-semibold tracking-tight text-stone-900 sm:text-4xl dark:text-stone-50">Meet the team</h2>
                        <p class="mt-4 text-base leading-7 text-stone-600 dark:text-stone-300">
                            The people brewing {{ config('app.name', 'MochiMap') }} behind the scenes.
                        </p>
                    </div>

                    <div class="mx-auto mt-12 grid max-w-4xl gap-6 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach ([
                            ['name' => 'Mia', 'role' => 'Product & Experience', 'bio' => 'Shapes the café journey with a focus on warmth, clarity, and delightful details.'],
                            ['name' => 'Aqilah', 'role' => 'Founder & Lead', 'bio' => 'Guides the vision for MochiMap and brings local coffee culture into every decision.'],
                            ['name' => 'Areena', 'role' => 'Design & Community', 'bio' => 'Crafts the visual story and helps connect café lovers with hidden neighborhood gems.'],
                        ] as $member)
                            <article class="flex h-full flex-col rounded-2xl border border-stone-200/80 bg-white/90 p-6 text-center shadow-sm transition duration-200 hover:-translate-y-0.5 hover:shadow-md dark:border-stone-800 dark:bg-stone-900/80 sm:p-7">
                                <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-br from-rose-100 to-pink-200 text-rose-700 ring-4 ring-white dark:from-rose-950/70 dark:to-rose-900/50 dark:text-rose-200 dark:ring-stone-900">
                                    <span class="text-2xl font-semibold">{{ mb_substr($member['name'], 0, 1) }}</span>
                                </div>
                                <h3 class="mt-5 text-lg font-semibold text-stone-900 dark:text-stone-50">{{ $member['name'] }}</h3>
                                <p class="mt-1 text-sm font-medium text-rose-600 dark:text-rose-300">{{ $member['role'] }}</p>
                                <p class="mt-4 text-sm leading-6 text-stone-600 dark:text-stone-300">{{ $member['bio'] }}</p>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>
        </main>

        <footer class="border-t border-stone-200/70 bg-white/70 py-10 backdrop-blur-sm dark:border-stone-800/80 dark:bg-stone-950/70">
            <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col gap-8 sm:flex-row sm:items-start sm:justify-between">
                    <div class="max-w-sm">
                        <div class="flex items-center gap-2.5">
                            <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-rose-100 text-rose-600 dark:bg-rose-950/60 dark:text-rose-300">
                                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M2,21V19H20V21H2M20,8H18V5H20M20,3H4V13A4,4 0 0,0 8,17H14A4,4 0 0,0 18,13V10H20A2,2 0 0,0 22,8V5C22,3.89 21.1,3 20,3M16,5H6V13A2,2 0 0,0 8,15H14A2,2 0 0,0 16,13V5Z" />
                                </svg>
                            </span>
                            <span class="text-base font-semibold text-stone-900 dark:text-stone-50">{{ config('app.name', 'MochiMap') }}</span>
                        </div>
                        <p class="mt-3 text-sm leading-6 text-stone-600 dark:text-stone-300">
                            A modern guide to cafés across Brunei, made for slow mornings and sweet moments.
                        </p>
                    </div>

                    <div class="grid grid-cols-2 gap-8 text-sm sm:gap-12">
                        <div>
                            <h2 class="font-semibold text-stone-900 dark:text-stone-50">Explore</h2>
                            <ul class="mt-3 space-y-2 text-stone-600 dark:text-stone-300">
                                <li><a href="{{ url('/') }}" class="transition hover:text-rose-600 dark:hover:text-rose-300">Home</a></li>
                                <li><a href="#cafes" class="transition hover:text-rose-600 dark:hover:text-rose-300">Cafés</a></li>
                                <li><a href="#mission" class="transition hover:text-rose-600 dark:hover:text-rose-300">Mission</a></li>
                                <li><a href="#team" class="transition hover:text-rose-600 dark:hover:text-rose-300">Team</a></li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="font-semibold text-stone-900 dark:text-stone-50">Connect</h2>
                            <ul class="mt-3 space-y-2 text-stone-600 dark:text-stone-300">
                                <li><a href="#" class="transition hover:text-rose-600 dark:hover:text-rose-300">Suggest a spot</a></li>
                                <li><a href="#" class="transition hover:text-rose-600 dark:hover:text-rose-300">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="mt-10 border-t border-stone-200/70 pt-6 text-sm text-stone-500 dark:border-stone-800/80 dark:text-stone-400">
                    <p>&copy; {{ date('Y') }} {{ config('app.name', 'MochiMap') }}. Made with love for café hoppers.</p>

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
155bf12531badadcedeb058de135ff6d8ab1c1d5
                </div>
            </div>
        </footer>
    </body>
</html>
