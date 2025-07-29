<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    @stack('styles')
    <title>{{ $title ?? env('APP_NAME') }}</title>
</head>

<body class="bg-gray-50 text-gray-900 dark:bg-gray-950 dark:text-gray-100 font-sans">

    <!-- Navbar -->
    <header class="bg-white shadow dark:bg-gray-900 dark:shadow-lg">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <div class="text-2xl font-bold text-sky-700 dark:text-sky-300">{{ __('Al Qomar Studio') }}</div>
            <nav class="space-x-6 hidden md:block">
                <a href="{{ route('home') }}" class="hover:text-sky-600 dark:hover:text-sky-400">{{ __('Home') }}</a>
                <a href="{{ route('project.index') }}" class="hover:text-sky-600 dark:hover:text-sky-400">{{ __('Projects') }}</a>
                <a href="{{ route('service') }}" class="hover:text-sky-600 dark:hover:text-sky-400">{{ __('Services') }}</a>
                <a href="{{ route('about') }}" class="hover:text-sky-600 dark:hover:text-sky-400">{{ __('About Us') }}</a>
                <a href="{{ route('contact') }}" class="hover:text-sky-600 dark:hover:text-sky-400">{{ __('Contact') }}</a>
            </nav>
            <!-- Dark Mode Switcher -->
            <div class="flex items-center space-x-4">
                <button id="dark-toggle" class="w-9 h-9 flex items-center justify-center rounded-full bg-gray-200 hover:bg-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600 transition" title="Toggle dark mode">
                    <i id="dark-toggle-icon" class="bi bi-moon text-xl text-gray-700 dark:text-yellow-300"></i>
                </button>
            </div>
        </div>
    </header>
        @yield('content')
    
    <footer class="bg-gray-900 border-t border-gray-800 pt-6 pb-3 dark:bg-gray-950 dark:border-gray-700">
        <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center gap-4">
            <!-- Logo & Slogan -->
            <div class="flex items-center gap-3">
                <span class="font-bold text-2xl text-white dark:text-sky-200">{{ __('Al Qomar Studio') }}</span>
                <span class="hidden md:inline text-gray-500 dark:text-gray-400">|</span>
                <span class="text-gray-400 text-sm hidden md:inline dark:text-gray-300">{{ __('Simple, Creative & Flexible Design') }}</span>
            </div>
            <!-- Sosial Media -->
            <div class="flex gap-4 mt-2 md:mt-0">
                <a href="#" class="text-gray-300 hover:text-sky-400 dark:text-gray-400 dark:hover:text-sky-300 transition" title="Facebook">
                    <i class="bi bi-facebook text-2xl"></i>
                </a>
                <a href="#" class="text-gray-300 hover:text-pink-400 dark:text-gray-400 dark:hover:text-pink-300 transition" title="Instagram">
                    <i class="bi bi-instagram text-2xl"></i>
                </a>
                <a href="#" class="text-gray-300 hover:text-blue-400 dark:text-gray-400 dark:hover:text-blue-300 transition" title="LinkedIn">
                    <i class="bi bi-linkedin text-2xl"></i>
                </a>
                <a href="#" class="text-gray-300 hover:text-red-500 dark:text-gray-400 dark:hover:text-red-400 transition" title="YouTube">
                    <i class="bi bi-youtube text-2xl"></i>
                </a>
            </div>
        </div>
        <div class="text-center text-gray-500 text-xs mt-4 dark:text-gray-400">
            &copy; {{ date('Y') }} {{ __('Al Qomar Studio') }}. {{ __('All rights reserved.') }}
        </div>
    </footer>
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @vite('resources/js/app.js')
    @stack('scripts')
    <script>
        // Dark mode toggle logic
        const html = document.documentElement;
        const toggle = document.getElementById('dark-toggle');
        const icon = document.getElementById('dark-toggle-icon');

        // Set initial mode from localStorage
        if (localStorage.getItem('theme') === 'dark' || 
            (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            html.classList.add('dark');
            icon.classList.remove('bi-moon');
            icon.classList.add('bi-brightness-high');
        } else {
            html.classList.remove('dark');
            icon.classList.remove('bi-brightness-high');
            icon.classList.add('bi-moon');
        }

        toggle.addEventListener('click', function() {
            html.classList.toggle('dark');
            if (html.classList.contains('dark')) {
                icon.classList.remove('bi-moon');
                icon.classList.add('bi-brightness-high');
                localStorage.setItem('theme', 'dark');
            } else {
                icon.classList.remove('bi-brightness-high');
                icon.classList.add('bi-moon');
                localStorage.setItem('theme', 'light');
            }
        });
    </script>
</body>

</html>