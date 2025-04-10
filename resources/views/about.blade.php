@extends('layouts.user')

@section('content')
    <div class="about-section relative overflow-hidden py-24" id="about">
        {{-- Animated Gradient Background --}}
        <div
            class="absolute inset-0 z-0 animate-gradient bg-gradient-to-br from-pink-300 via-purple-300 to-indigo-400 dark:from-indigo-900 dark:via-purple-900 dark:to-pink-900 opacity-10 blur-3xl">
        </div>

        <div class="relative z-10 max-w-6xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12 text-gray-800 dark:text-white" data-aos="fade-up">
                Tentang Saya
            </h2>

            <div class="grid md:grid-cols-2 gap-10 items-center">
                {{-- Ilustrasi --}}
                <div class="text-center" data-aos="fade-right" data-aos-delay="100">
                    <img src="{{ asset('images/profil.jpg') }}" alt="Tentang Saya"
                        class="w-full max-w-sm mx-auto rounded-lg shadow-md dark:invert parallax-element">
                </div>

                {{-- Deskripsi --}}
                <div class="max-w-xl text-gray-700 dark:text-gray-300 space-y-4 md:px-4" data-aos="fade-left"
                    data-aos-delay="200">
                    <p>Saya adalah seorang <strong>UI/UX Designer</strong>, <strong>Web Developer</strong>, dan
                        <strong>Content Creator</strong> yang memiliki passion besar dalam dunia digital dan teknologi.</p>
                    <p>Berpengalaman dalam mengelola project desain, mengembangkan aplikasi berbasis web dengan Laravel, dan
                        mengedepankan user experience yang solid.</p>
                    <p>Saya percaya bahwa desain yang baik adalah yang tidak hanya enak dilihat, tapi juga nyaman digunakan.
                    </p>
                </div>
            </div>

            {{-- Value Section --}}
            <div class="mt-20 grid md:grid-cols-3 gap-8 text-center">
                <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow hover:shadow-lg transition" data-aos="flip-left"
                    data-aos-delay="300">
                    <i class="fas fa-lightbulb text-primary text-3xl mb-3"></i>
                    <h3 class="font-semibold text-lg mb-2">Kreatif</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Solusi unik & inovatif untuk setiap tantangan.</p>
                </div>
                <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow hover:shadow-lg transition" data-aos="flip-up"
                    data-aos-delay="500">
                    <i class="fas fa-code text-primary text-3xl mb-3"></i>
                    <h3 class="font-semibold text-lg mb-2">Teknis</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Integrasi estetika desain dan logika koding.</p>
                </div>
                <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow hover:shadow-lg transition"
                    data-aos="flip-right" data-aos-delay="700">
                    <i class="fas fa-users text-primary text-3xl mb-3"></i>
                    <h3 class="font-semibold text-lg mb-2">Kolaboratif</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Terbiasa kerja bareng tim lintas divisi.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
