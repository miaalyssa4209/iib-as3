<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'MochiMap') }} - Contact</title>

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
                        <a href="#explore" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">Explore</a>
                        <a href="#regions" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">Regions</a>
                        <a href="#featured" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">Featured</a>
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
                        <span class="bg-gradient-to-r from-pink-500 via-rose-400 to-orange-300 bg-clip-text text-transparent">Get in touch</span>
                        <span class="block text-rose-950 dark:text-rose-50">we'd love to hear from you</span>
                    </h1>
                    <p class="text-lg sm:text-xl text-rose-800/80 dark:text-rose-100/80 mb-10 leading-relaxed">
                        Have a café recommendation, a question, or just want to say hi? Reach out on your favourite platform.
                    </p>
                </div>
            </div>
        </section>

        <section id="contact" class="py-20 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                    <div class="bg-white/80 dark:bg-[#2a1f25]/80 backdrop-blur-sm rounded-3xl p-8 text-center border border-pink-100/70 dark:border-rose-900/50 hover:shadow-xl hover:shadow-pink-100/40 dark:hover:shadow-pink-900/20 transition-all transform group-hover:-translate-y-1">
                        <div class="w-16 h-16 mx-auto rounded-full bg-gradient-to-br from-pink-100 to-rose-100 dark:from-pink-900/40 dark:to-rose-900/40 flex items-center justify-center mb-4">
                            <svg class="h-8 w-8 text-pink-500 dark:text-pink-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-7.63 0-13.82 6.17-13.82 13.82s6.19 13.82 13.82 13.82 13.82-6.17 13.82-13.82S29.09 6 22.46 6zM12 24c-6.63 0-12-5.37-12-12s5.37-12 12-12 12 5.37 12 12-5.37 12-12 12zM12 6a6 6 0 0 0 6 6c0 2.3-1.28 4.32-3 5.45a5.56 5.56 0 0 1 1.1-2.99c0-3.07-2.49-5.56-5.56-5.56-3.07 0-5.56 2.49-5.56 5.56 0 1 0.43 1.93 1.1 2.78A6 6 0 0 0 12 6z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-rose-950 dark:text-rose-50 mb-2">Instagram</h3>
                        <p class="text-sm text-rose-800/70 dark:text-rose-100/70 mb-6">@mochimap</p>
                        <a href="https://www.instagram.com/mochimap" target="_blank" class="px-6 py-2 bg-gradient-to-r from-pink-400 to-rose-400 text-white rounded-full hover:shadow-xl hover:shadow-pink-200/60 dark:hover:shadow-pink-900/40 transition-all text-sm font-semibold">
                            Message us
                        </a>
                    </div>

                    <div class="bg-white/80 dark:bg-[#2a1f25]/80 backdrop-blur-sm rounded-3xl p-8 text-center border border-pink-100/70 dark:border-rose-900/50 hover:shadow-xl hover:shadow-pink-100/40 dark:hover:shadow-pink-900/20 transition-all transform group-hover:-translate-y-1">
                        <div class="w-16 h-16 mx-auto rounded-full bg-gradient-to-br from-pink-100 to-rose-100 dark:from-pink-900/40 dark:to-rose-900/40 flex items-center justify-center mb-4">
                            <svg class="h-8 w-8 text-pink-500 dark:text-pink-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9.677 23.538A3.454 3.454 0 0 1 4 21c-1.103 0-2-0.897-2-2V3c0-1.103 0.897-2 2-2h1c1.103 0 2 0.897 2 2v1h4V3c0-1.103 0.897-2 2-2h1c1.103 0 2 0.897 2 2v16c0 1.103-0.897 2-2 2-1.103 0-2-0.897-2-2v-1H9v1c0 1.103-0.897 2-2 2-0.856-0.001-1.678-0.055-2.323-0.462M20 3V1h-1v2h-2V1h-1v2h-2V1h-1v2h-2V1h-1v2h-2V1H7v2H5V1H4v2H3v18h18V3h-1zM4 19c0 1.103-0.897 2-2 2s-2-0.897-2-2V5c0-1.103 0.897-2 2-2s2 0.897 2 2zm18 0c0 1.103-0.897 2-2 2s-2-0.897-2-2V5c0-1.103 0.897-2 2-2s2 0.897 2 2zm-2-16h-4V1h4z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-rose-950 dark:text-rose-50 mb-2">TikTok</h3>
                        <p class="text-sm text-rose-800/70 dark:text-rose-100/70 mb-6">@mochimap</p>
                        <a href="https://www.tiktok.com/@mochimap" target="_blank" class="px-6 py-2 bg-gradient-to-r from-pink-400 to-rose-400 text-white rounded-full hover:shadow-xl hover:shadow-pink-200/60 dark:hover:shadow-pink-900/40 transition-all text-sm font-semibold">
                            Follow us
                        </a>
                    </div>

                    <div class="bg-white/80 dark:bg-[#2a1f25]/80 backdrop-blur-sm rounded-3xl p-8 text-center border border-pink-100/70 dark:border-rose-900/50 hover:shadow-xl hover:shadow-pink-100/40 dark:hover:shadow-pink-900/20 transition-all transform group-hover:-translate-y-1">
                        <div class="w-16 h-16 mx-auto rounded-full bg-gradient-to-br from-pink-100 to-rose-100 dark:from-pink-900/40 dark:to-rose-900/40 flex items-center justify-center mb-4">
                            <svg class="h-8 w-8 text-pink-500 dark:text-pink-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.1 3.9C17.9 1.7 15 1 12 1c-1.9 0-3.8 0.7-5.3 1.9C5.7 5.1 3 7.9 3 12c0 4.2 2.7 7.8 6.5 9.9 3.5 2 7.8 3.1 12.4 3.1C20 21 22 19 22 16c0-2-1-3.8-2.9-4.6-.2-.1-0.4-0.2-0.6-0.3-0.1 0-0.2-0.1-0.3-0.1-0.3-0.1-0.1-0.1-0.2-0.2-0.3-0.2-0.2-0.3-0.5-0.4-0.7l-0.1-0.1c-0.2-0.2-0.4-0.4-0.5-0.7l-0.1-0.1c-0.2-0.3-0.2-0.6-0.2-0.9V13c0-0.1 0-0.2-0.1-0.3 0-0.1 0-0.2-0.1-0.2-0.1-0.1-0.2-0.1-0.3-0.2l-0.1-0.1c-0.1-0.2-0.1-0.4-0.2-0.6-0.1-0.1-0.1-0.3-0.1-0.4V10c0-0.4 0.2-0.7 0.5-1C18.7 8.2 20 7 20 5c0-1.9-1-3.8-2.9-4.6C17.4 0.2 15.6 0 13.6 0c-1.2 0-2.4 0.2-3.5 0.6C8.8 1.4 7 3.1 7 5c0 0.2 0 0.5 0.1 0.7l-0.1 0.2c0.1 0.4 0.1 0.8-0.1 1.3 0 0.3 0.1 0.6 0.2 0.9 0.1 0.1 0.1 0.2 0.2 0.4 0.2 0.5 0.4 0.9 0.6 1.4l-0.1 0.1c0.1 0.2 0.1 0.4 0.2 0.6 0.1 0.1 0.1 0.3 0.1 0.4v3c0 0.1 0 0.2 0.1 0.3 0 0.1 0.1 0.2 0.1 0.2 0 0.1 0.1 0.1 0.1 0.2l0.1 0.1c0.1 0.2 0.2 0.4 0.2 0.6l0.1 0.1c0.1 0.2 0.1 0.4 0.2 0.6 0 0.1 0.1 0.2 0.2 0.4l0 0.1c0.1 0.2 0.2 0.4 0.2 0.6v4c0 0.4-0.2 0.7-0.5 0.9C9.6 19.8 8.4 21 7 21c-1.2 0-2.4-0.2-3.5-0.6C2.8 20.2 1 18.4 1 16c0-1.9 1-3.8 2.9-4.6 0-0.1 0-0.2-0.1-0.3-0.1-0.1-0.1-0.2-0.2-0.3-0.1-0.2-0.2-0.4-0.3-0.6-0.1-0.1-0.1-0.3-0.1-0.4V5c0-2 2-4 6-4 2 0 3.9 0.7 5.3 1.9 1.4-1.2 3.3-1.9 5.5-1.9 3.1 0 6.1 1.2 8.3 3.2 1 0.9 1.9 2 2.6 3.1C22 8.4 23 10.5 23 13c0 2-1 3.8-2.9 4.6 0 0.1 0 0.2 0.1 0.3 0.1 0.1 0.1 0.2 0.2 0.3 0.1 0.2 0.2 0.4 0.3 0.6 0.1 0.1 0.1 0.3 0.1 0.4 0 0.1-0.1 0.2-0.2 0.4-0.1 0.2-0.2 0.4-0.2 0.6l0 0.1c-0.1 0.2-0.1 0.4-0.2 0.6l-0.1 0.1c-0.1 0.2-0.1 0.4-0.2 0.6v-3c0-0.1 0-0.2-0.1-0.3 0-0.1-0.1-0.2-0.1-0.2-0-0.1-0.1-0.1-0.1-0.2l-0.1-0.1c-0.1-0.2-0.2-0.4-0.2-0.6l-0.1-0.1c-0.1-0.2-0.1-0.4-0.2-0.6l0-0.1c0-0.2-0.1-0.4-0.2-0.6v-4c0-0.4 0.2-0.7 0.5-1C20.7 7.1 22 5.9 22 5c0-1.9-1-3.8-2.9-4.6C19.4 0.2 17.6 0 15.6 0c-1.3 0-2.5 0.2-3.6 0.6C11.5 1.4 9.7 3.1 9.7 5c0 0.2 0 0.5 0.1 0.7l-0.1 0.2c0.1 0.4 0.1 0.8-0.1 1.3 0 0.3 0.1 0.6 0.2 0.9 0.1 0.1 0.1 0.2 0.2 0.4 0.1 0.5 0.3 0.9 0.5 1.4l-0.1 0.1c0.1 0.2 0.2 0.4 0.2 0.6l0.1 0.1c0.1 0.2 0.1 0.4 0.2 0.6 0 0.1 0.1 0.2 0.2 0.4l0 0.1c0 0.2 0.1 0.4 0.1 0.6v4c0 0.4-0.2 0.7-0.5 0.9-1 0.8-2.2 1.3-3.5 1.3C6.1 19 4 17 4 15c0-1.9 1-3.8 2.9-4.6 0-0.1 0-0.2-0.1-0.3-0.1-0.1-0.1-0.2-0.2-0.3-0.1-0.2-0.2-0.4-0.3-0.6-0.1-0.1-0.1-0.3-0.1-0.4V5c0-2 2-4 6-4 2 0 3.9 0.7 5.3 1.9 1.4-1.2 3.3-1.9 5.5-1.9 2.4 0 4.7 0.9 6.5 2.5C21.3 4.2 22.2 4 22.9 4c1.8 0 3.4 0.8 4.4 1.9C25.3 7.8 26 10.6 26 13c0 2-1 4-2.9 5.6-0.1 0.1-0.2 0.2-0.3 0.3-0.2 0.1-0.4 0.2-0.6 0.3-0.1 0-0.2 0.1-0.3 0.2-0.1 0.1-0.2 0.2-0.3 0.3l-0.1 0.1c-0.2 0.2-0.4 0.4-0.7 0.5l-0.1 0.1c-0.2 0.1-0.3 0.3-0.4 0.5l-0.1 0.1c-0.2 0.2-0.3 0.4-0.5 0.6-0.1 0.1-0.2 0.2-0.3 0.3v-4c0-0.4 0.2-0.7 0.5-1 1-0.9 2.2-1.5 3.5-1.5 2.2 0 4.2 1.2 5.2 3.3C21.9 9 23 10.8 23 13c0 2-1 4-2.9 5.6-0.1 0.1-0.2 0.2-0.3 0.3-0.2 0.1-0.4 0.2-0.6 0.3-0.1 0-0.2 0.1-0.3 0.2-0.1 0.1-0.2 0.2-0.3 0.3l-0.1 0.1c-0.2 0.2-0.4 0.4-0.7 0.5l-0.1 0.1c-0.2 0.1-0.3 0.3-0.4 0.5l-0.1 0.1c-0.2 0.2-0.3 0.4-0.5 0.6-0.1 0.1-0.2 0.2-0.3 0.3v-4c0-0.4 0.2-0.7 0.5-1 1-0.9 2.2-1.5 3.5-1.5 1.9 0 3.7 0.8 5 2.1C21.9 9 23 10.8 23 13c0 2-1 4-2.9 5.6-0.1 0.1-0.2 0.2-0.3 0.3-0.2 0.1-0.4 0.2-0.6 0.3-0.1 0-0.2 0.1-0.3 0.2-0.1 0.1-0.2 0.2-0.3 0.3l-0.1 0.1c-0.2 0.2-0.4 0.4-0.7 0.5l-0.1 0.1c-0.2 0.1-0.3 0.3-0.4 0.5l-0.1 0.1c-0.2 0.2-0.3 0.4-0.5 0.6-0.1 0.1-0.2 0.2-0.3 0.3v-4c0-0.4 0.2-0.7 0.5-1 1-0.9 2.2-1.5 3.5-1.5 1.3 0 2.5 0.5 3.5 1.5 0.3-0.3 0.5-0.7 0.5-1.1V13c0-2.2-1-4.2-3-5.6-0.1-0.1-0.2-0.1-0.3-0.2-0.1 0-0.2-0.1-0.3-0.1z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-rose-950 dark:text-rose-50 mb-2">WhatsApp</h3>
                        <p class="text-sm text-rose-800/70 dark:text-rose-100/70 mb-6">+673 8300967</p>
                        <a href="https://wa.me/6738300967" target="_blank" class="px-6 py-2 bg-green-500 text-white rounded-full hover:bg-green-600 hover:shadow-xl hover:shadow-green-200/60 dark:hover:shadow-green-900/40 transition-all text-sm font-semibold">
                            Chat now
                        </a>
                    </div>
                </div>

                <div class="max-w-4xl mx-auto mt-12 text-center">
                    <p class="text-rose-800/60 dark:text-rose-100/60 text-sm">
                        Drop us a message and we'll get back to you as soon as we can.
                    </p>
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
                            <li><a href="#explore" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">Explore</a></li>
                            <li><a href="#regions" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">Regions</a></li>
                            <li><a href="#featured" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">Fan Favorites</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-rose-950 dark:text-rose-50 font-semibold mb-4">Get in touch</h4>
                        <ul class="space-y-2">
                            <li><a href="{{ url('/contact') }}" class="text-rose-800/80 dark:text-rose-100/80 hover:text-pink-500 dark:hover:text-pink-300 transition-colors">Contact</a></li>
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
