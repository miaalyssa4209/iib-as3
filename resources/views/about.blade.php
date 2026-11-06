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
    <body id="top" class="min-h-screen overflow-x-hidden bg-amber-50/60 text-stone-800 antialiased dark:bg-stone-950 dark:text-stone-100">
        <div class="pointer-events-none fixed inset-0 -z-10 overflow-hidden">
            <div class="absolute -top-24 left-1/2 h-80 w-80 -translate-x-1/2 rounded-full bg-amber-200/35 blur-3xl dark:bg-amber-900/15"></div>
            <div class="absolute top-1/3 -left-24 h-72 w-72 rounded-full bg-orange-200/25 blur-3xl dark:bg-orange-900/10"></div>
            <div class="absolute bottom-0 right-0 h-96 w-96 rounded-full bg-yellow-100/35 blur-3xl dark:bg-amber-950/20"></div>
        </div>

        <header class="sticky top-0 z-50 border-b border-amber-200/50 bg-amber-50/80 backdrop-blur-md dark:border-stone-800/80 dark:bg-stone-950/80">
            <nav class="mx-auto flex h-16 max-w-6xl items-center justify-between px-4 sm:px-6 lg:px-8" aria-label="Main">
                <a href="{{ url('/') }}" class="flex items-center gap-2.5">
                    <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-amber-100 text-amber-700 ring-1 ring-amber-200/60 dark:bg-amber-950/60 dark:text-amber-300 dark:ring-amber-900/50">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M2,21V19H20V21H2M20,8H18V5H20M20,3H4V13A4,4 0 0,0 8,17H14A4,4 0 0,0 18,13V10H20A2,2 0 0,0 22,8V5C22,3.89 21.1,3 20,3M16,5H6V13A2,2 0 0,0 8,15H14A2,2 0 0,0 16,13V5Z" />
                        </svg>
                    </span>
                    <span class="text-lg font-semibold tracking-tight text-stone-900 dark:text-stone-50">{{ config('app.name', 'MochiMap') }}</span>
                </a>

                <div class="hidden items-center gap-8 text-sm font-medium md:flex">
                    <a href="{{ url('/') }}" class="text-stone-600 transition hover:text-amber-700 dark:text-stone-300 dark:hover:text-amber-300">Home</a>
                    <a href="#cafes" class="text-stone-600 transition hover:text-amber-700 dark:text-stone-300 dark:hover:text-amber-300">Cafés</a>
                    <a href="#mission" class="text-stone-600 transition hover:text-amber-700 dark:text-stone-300 dark:hover:text-amber-300">Mission</a>
                    <a href="#team" class="text-stone-600 transition hover:text-amber-700 dark:text-stone-300 dark:hover:text-amber-300">Team</a>
                </div>

                <a href="#cafes" class="inline-flex items-center rounded-full bg-amber-700 px-4 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-amber-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-500 focus-visible:ring-offset-2 dark:bg-amber-600 dark:hover:bg-amber-500 dark:focus-visible:ring-offset-stone-950">
                    Explore cafés
                </a>
            </nav>
        </header>

        <main>
            <section class="relative">
                <div class="mx-auto max-w-6xl px-4 py-20 sm:px-6 sm:py-24 lg:px-8 lg:py-28">
                    <div class="mx-auto max-w-3xl text-center">
                        <p class="inline-flex items-center rounded-full border border-amber-200/70 bg-white/70 px-4 py-1.5 text-sm font-medium text-amber-800 shadow-sm dark:border-amber-900/50 dark:bg-stone-900/70 dark:text-amber-200">
                            Cozy corners of Brunei
                        </p>
                        <h1 class="mt-6 text-4xl font-semibold tracking-tight text-stone-900 sm:text-5xl lg:text-6xl dark:text-stone-50">
                            About page
                        </h1>
                        <p class="mx-auto mt-6 max-w-2xl text-base leading-7 text-stone-600 sm:text-lg dark:text-stone-300">
                            A warm, welcoming guide to the coziest cafés tucked across Brunei. We gather the spots worth lingering over, so you can find your next favorite sip with ease.
                        </p>
                        <div class="mt-10 flex flex-col items-center justify-center gap-3 sm:flex-row">
                            <a href="#mission" class="inline-flex w-full items-center justify-center rounded-full bg-stone-900 px-6 py-3 text-sm font-semibold text-white transition hover:bg-stone-800 sm:w-auto dark:bg-amber-100 dark:text-stone-900 dark:hover:bg-white">
                                Our mission
                            </a>
                            <a href="#team" class="inline-flex w-full items-center justify-center rounded-full border border-amber-200 bg-white/70 px-6 py-3 text-sm font-semibold text-stone-800 transition hover:border-amber-300 hover:text-amber-800 sm:w-auto dark:border-stone-700 dark:bg-stone-900/60 dark:text-stone-100 dark:hover:border-amber-800 dark:hover:text-amber-300">
                                Meet the team
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="cafes" class="border-y border-amber-200/50 bg-white/50 py-16 sm:py-20 dark:border-stone-800/80 dark:bg-stone-900/25">
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
                            <article class="group flex h-full flex-col overflow-hidden rounded-2xl border border-amber-200/60 bg-white/90 shadow-sm transition duration-200 hover:-translate-y-0.5 hover:shadow-md dark:border-stone-800 dark:bg-stone-900/80">
                                <div class="relative flex h-36 items-center justify-center bg-gradient-to-br from-amber-100 via-orange-50 to-yellow-50 dark:from-amber-950/40 dark:via-stone-900 dark:to-stone-900">
                                    <svg class="h-12 w-12 text-amber-600/80 dark:text-amber-300/80" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M2,21V19H20V21H2M20,8H18V5H20M20,3H4V13A4,4 0 0,0 8,17H14A4,4 0 0,0 18,13V10H20A2,2 0 0,0 22,8V5C22,3.89 21.1,3 20,3M16,5H6V13A2,2 0 0,0 8,15H14A2,2 0 0,0 16,13V5Z" />
                                    </svg>
                                    <span class="absolute right-4 top-4 rounded-full bg-white/90 px-3 py-1 text-xs font-medium text-amber-900 ring-1 ring-amber-200/70 dark:bg-stone-950/80 dark:text-amber-100 dark:ring-stone-700">{{ $cafe['tag'] }}</span>
                                </div>
                                <div class="flex flex-1 flex-col p-6">
                                    <h3 class="text-lg font-semibold text-stone-900 dark:text-stone-50">{{ $cafe['name'] }}</h3>
                                    <p class="mt-2 flex-1 text-sm leading-6 text-stone-600 dark:text-stone-300">{{ $cafe['desc'] }}</p>
                                    <a href="#top" class="mt-5 inline-flex items-center text-sm font-semibold text-amber-700 transition hover:text-amber-600 dark:text-amber-300 dark:hover:text-amber-200">
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
                    <div class="relative overflow-hidden rounded-3xl border border-amber-700/20 bg-gradient-to-br from-amber-800 via-amber-700 to-orange-600 px-6 py-12 text-center shadow-lg sm:px-12 sm:py-16 dark:border-amber-900/50 dark:from-amber-950 dark:via-amber-900 dark:to-stone-900">
                        <div class="absolute -right-10 -top-10 h-40 w-40 rounded-full bg-white/10 blur-2xl"></div>
                        <div class="absolute -bottom-16 -left-12 h-56 w-56 rounded-full bg-yellow-200/10 blur-3xl"></div>
                        <div class="relative mx-auto max-w-2xl">
                            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-amber-100/90">What we believe</p>
                            <h2 class="mt-3 text-3xl font-semibold tracking-tight text-white sm:text-4xl">Our mission</h2>
                            <p class="mt-5 text-base leading-7 text-amber-50/95 sm:text-lg">
                                To help you discover local coffee spots nearby — wherever you are in Brunei. We map the cozy, the hidden, and the beloved, so your next slow sip is never far away.
                            </p>
                            <a href="#cafes" class="mt-8 inline-flex items-center justify-center rounded-full bg-amber-50 px-6 py-3 text-sm font-semibold text-amber-900 transition hover:bg-white focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-amber-700">
                                Find a spot
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="team" class="border-t border-amber-200/50 bg-white/50 py-16 sm:py-20 dark:border-stone-800/80 dark:bg-stone-900/25">
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
                            <article class="flex h-full flex-col rounded-2xl border border-amber-200/60 bg-white/90 p-6 text-center shadow-sm transition duration-200 hover:-translate-y-0.5 hover:shadow-md dark:border-stone-800 dark:bg-stone-900/80 sm:p-7">
                                <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-br from-amber-100 to-orange-200 text-amber-800 ring-4 ring-white dark:from-amber-950/70 dark:to-amber-900/50 dark:text-amber-200 dark:ring-stone-900">
                                    <span class="text-2xl font-semibold">{{ mb_substr($member['name'], 0, 1) }}</span>
                                </div>
                                <h3 class="mt-5 text-lg font-semibold text-stone-900 dark:text-stone-50">{{ $member['name'] }}</h3>
                                <p class="mt-1 text-sm font-medium text-amber-700 dark:text-amber-300">{{ $member['role'] }}</p>
                                <p class="mt-4 text-sm leading-6 text-stone-600 dark:text-stone-300">{{ $member['bio'] }}</p>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>
        </main>

        <footer class="border-t border-amber-200/50 bg-amber-50/70 py-10 backdrop-blur-sm dark:border-stone-800/80 dark:bg-stone-950/70">
            <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col gap-8 sm:flex-row sm:items-start sm:justify-between">
                    <div class="max-w-sm">
                        <div class="flex items-center gap-2.5">
                            <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-amber-100 text-amber-700 ring-1 ring-amber-200/60 dark:bg-amber-950/60 dark:text-amber-300 dark:ring-amber-900/50">
                                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M2,21V19H20V21H2M20,8H18V5H20M20,3H4V13A4,4 0 0,0 8,17H14A4,4 0 0,0 18,13V10H20A2,2 0 0,0 22,8V5C22,3.89 21.1,3 20,3M16,5H6V13A2,2 0 0,0 8,15H14A2,2 0 0,0 16,13V5Z" />
                                </svg>
                            </span>
                            <span class="text-base font-semibold text-stone-900 dark:text-stone-50">{{ config('app.name', 'MochiMap') }}</span>
                        </div>
                        <p class="mt-3 text-sm leading-6 text-stone-600 dark:text-stone-300">
                            A warm, modern guide to cafés across Brunei, made for slow mornings and sweet moments.
                        </p>
                    </div>

                    <div class="grid grid-cols-2 gap-8 text-sm sm:gap-12">
                        <div>
                            <h2 class="font-semibold text-stone-900 dark:text-stone-50">Explore</h2>
                            <ul class="mt-3 space-y-2 text-stone-600 dark:text-stone-300">
                                <li><a href="{{ url('/') }}" class="transition hover:text-amber-700 dark:hover:text-amber-300">Home</a></li>
                                <li><a href="#cafes" class="transition hover:text-amber-700 dark:hover:text-amber-300">Cafés</a></li>
                                <li><a href="#mission" class="transition hover:text-amber-700 dark:hover:text-amber-300">Mission</a></li>
                                <li><a href="#team" class="transition hover:text-amber-700 dark:hover:text-amber-300">Team</a></li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="font-semibold text-stone-900 dark:text-stone-50">Connect</h2>
                            <ul class="mt-3 space-y-2 text-stone-600 dark:text-stone-300">
                                <li><a href="#" class="transition hover:text-amber-700 dark:hover:text-amber-300">Suggest a spot</a></li>
                                <li><a href="{{ url('/contact') }}" class="transition hover:text-amber-700 dark:hover:text-amber-300">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="mt-10 border-t border-amber-200/50 pt-6 text-sm text-stone-500 dark:border-stone-800/80 dark:text-stone-400">
                    <p>&copy; {{ date('Y') }} {{ config('app.name', 'MochiMap') }}. Made with love for café hoppers.</p>
                </div>
            </div>
        </footer>
    </body>
</html>
