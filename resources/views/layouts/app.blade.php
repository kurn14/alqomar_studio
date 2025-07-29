<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    @stack('styles')
    <title>{{ $title ?? env('APP_NAME') }}</title>
</head>

<body class="bg-gray-50 text-gray-900 font-sans">

    <!-- Navbar -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <div class="text-2xl font-bold text-amber-700">Al Qomar Studio</div>
            <nav class="space-x-6 hidden md:block">
                <a href="{{ route('home') }}" class="hover:text-amber-600">Home</a>
                <a href="{{ route('project.index') }}" class="hover:text-amber-600">Our Portfolio</a>
                <a href="{{ route('service') }}" class="hover:text-amber-600">Services</a>
                <a href="{{ route('about') }}" class="hover:text-amber-600">About Us</a>
                <a href="{{ route('contact') }}" class="hover:text-amber-600">Contact</a>
            </nav>
            <a href="#" class="ml-4 px-4 py-2 rounded bg-amber-600 text-white font-medium hover:bg-amber-700">Our Project</a>
        </div>
    </header>
        @yield('content')
    
    <footer class="bg-orange-200 border-t pt-10 pb-6 relative z-10">
        <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-12 gap-8">

            <!-- Kolom 1: Logo & Slogan -->
            <div class="md:col-span-5 flex flex-col space-y-6">
                <div class="flex items-center space-x-4">
                    <span class="font-bold text-3xl text-gray-700">canvas</span>
                    <span class="text-gray-600">|</span>
                    <span class="text-gray-600">
                        We believe in <b>Simple, Creative &amp; Flexible</b> Design Standards with a Retina &amp; Responsive Approach. Browse the amazing Features this template offers.
                    </span>
                </div>
            </div>

            <!-- Kolom 2: Navigasi -->
            <div class="md:col-span-7">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div>
                        <ul class="space-y-1 text-gray-700 text-sm">
                            <li>&#9654; Home</li>
                            <li>&#9654; About</li>
                            <li>&#9654; FAQs</li>
                            <li>&#9654; Support</li>
                            <li>&#9654; Contact</li>
                        </ul>
                    </div>

                <div class="mt-6">
                    <span class="text-gray-600 text-sm">Follow us on:</span>
                    <div class="flex space-x-4 mt-2">
                        <a href="#" class="text-white-600 hover:text-gray-800"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                </div>
            </div>
            
        </div>
        
    </footer>
    @vite('resources/js/app.js')
    @stack('scripts')
</body>

</html>