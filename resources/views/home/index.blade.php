@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="py-16 bg-sky-900 bg-opacity-90 dark:bg-gray-900"
    style="background-image: url('{{ asset('images/hero.png') }}');background-repeat: no-repeat;background-size: cover;">
    <div class="max-w-4xl mx-auto px-4 flex flex-col items-center text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold text-sky-100 dark:text-white mb-4">
            {{ __('Al Qomar Studio') }}
            <span class="block text-lg dark:text-gray-200">{{ __('Software House Inovatif, Untuk Masa Depan Digital Anda') }}</span>
        </h1>
        <p class="text-lg text-gray-100 dark:text-gray-300 mb-8">
            {{ __('Kolaborasi bersama kami untuk mengembangkan software yang tepat guna, efektif, dan sesuai kebutuhan bisnis Anda.') }}
        </p>
        <div class="space-x-4">
            <a href="{{ route('service') }}" class="px-6 py-3 rounded bg-sky-600 text-white font-semibold hover:bg-sky-700 dark:bg-sky-700 dark:hover:bg-sky-800">{{ __('Get Started') }}</a>
            <a href="{{ route('contact') }}" class="px-6 py-3 rounded border border-sky-600 text-sky-100 font-semibold hover:bg-sky-400 dark:text-white dark:border-sky-400 dark:hover:bg-sky-600">{{ __('Contact Us') }}</a>
        </div>
    </div>
</section>
<!-- Steps Section -->
<section class="py-14 bg-white dark:bg-gray-900">
    <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-3 gap-8">
        <div class="text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" fill="currentColor"
                class="bi bi-suitcase-lg-fill w-12 h-12 mx-auto mb-4 flex items-center justify-center text-2xl text-sky-700 dark:text-sky-300"
                viewBox="0 0 16 16">
                <path
                    d="M7 0a2 2 0 0 0-2 2H1.5A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14H2a.5.5 0 0 0 1 0h10a.5.5 0 0 0 1 0h.5a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2H11a2 2 0 0 0-2-2zM6 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1zM3 13V3h1v10zm9 0V3h1v10z" />
            </svg>
            <h3 class="text-xl font-semibold mb-2 dark:text-white">{{ __('Tim Profesional & Berpengalaman') }}</h3>
            <p class="text-gray-500 dark:text-gray-300">{{ __('Setiap solusi dirancang dengan standar terbaik dan inovasi terbaru.') }}</p>
        </div>
        <div class="text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-check-circle w-12 h-12 mx-auto mb-4 flex items-center justify-center text-2xl text-sky-700 dark:text-sky-300"
                viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                <path
                    d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
            </svg>
            <h3 class="text-xl font-semibold mb-2 dark:text-white">{{ __('Solusi Kustom & Fleksibel') }}</h3>
            <p class="text-gray-500 dark:text-gray-300">{{ __('Pengembangan software sesuai kebutuhan bisnis Anda.') }}</p>
        </div>
        <div class="text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-ui-checks w-12 h-12 mx-auto mb-4 flex items-center justify-center text-2xl text-sky-700 dark:text-sky-300 font-bold"
                viewBox="0 0 16 16">
                <path
                    d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zM2 1a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm0 8a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2zm.854-3.646a.5.5 0 0 1-.708 0l-1-1a.5.5 0 1 1 .708-.708l.646.647 1.646-1.647a.5.5 0 1 1 .708.708zm0 8a.5.5 0 0 1-.708 0l-1-1a.5.5 0 0 1 .708-.708l.646.647 1.646-1.647a.5.5 0 0 1 .708.708zM7 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
            </svg>
            <h3 class="text-xl font-semibold mb-2 dark:text-white">{{ __('Dukungan & Layanan Purna Jual') }}</h3>
            <p class="text-gray-500 dark:text-gray-300">{{ __('Support & maintenance responsif setelah implementasi.') }}</p>
        </div>
    </div>
</section>
<section class="bg-gray-50 dark:bg-gray-950 py-14">
    <div class="max-w-6xl mx-auto px-4">

        <!-- Judul & Subjudul -->
        <div class="text-center mb-8">
            <h2 class="text-4xl md:text-5xl font-bold mb-2 leading-tight dark:text-white">
                {{ __('Portofolio') }} <span class="bg-gradient-to-r from-pink-500 to-yellow-400 text-transparent bg-clip-text">{{ __('Terbaru') }}</span>
                <br />
                &amp; <span class="bg-gradient-to-r from-pink-500 via-purple-500 to-orange-400 text-transparent bg-clip-text">{{ __('Proyek Pilihan') }}</span>
            </h2>
            <p class="text-gray-500 dark:text-gray-300 mt-2">{{ __('Beberapa layanan unggulan dan hasil karya terbaik Al Qomar Studio untuk kebutuhan digital bisnis Anda.') }}</p>
        </div>

        <!-- Grid Project Card -->
        <div class="py-14 grid gap-6 md:grid-cols-2">
            @foreach($projects as $project)
            <div class="bg-blue-100 dark:bg-gray-800 rounded-xl p-4">
                <div class="mb-2">
                    <span class="font-semibold text-lg dark:text-white">{{ $project->title }}</span><br />
                    <span class="text-sm text-gray-600 dark:text-gray-300">{{ $project->category->name }}</span>
                </div>
                <img src="{{ Storage::url($project->image) }}" alt="{{ $project->title }}" class="rounded-lg w-full mt-2" />
            </div>
            @endforeach
        </div>
        <section class="py-14 bg-white dark:bg-gray-900">
            <div class="max-w-6xl mx-auto px-4">
                <h2 class="text-2xl font-bold text-center mb-10 dark:text-white">{{ __('Testimonials') }}</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    @foreach($testimonials as $testimonial)
                    <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-6 shadow">
                        <p class="italic mb-3 dark:text-gray-200">{{ $testimonial->message }}</p>
                        <div class="font-semibold dark:text-white">{{ $testimonial->name }} <span class="text-gray-400 dark:text-gray-300">· {{ $testimonial->company }}</span></div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</section>
@endsection