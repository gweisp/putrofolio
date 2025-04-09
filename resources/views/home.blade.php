@extends('layouts.user')

@section('content')
    <section class="pt-4 pb-16 px-4 bg-base-100 min-h-[80vh] flex items-center justify-center">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            {{-- Text Section --}}
            <div class="animate-fade-in-down">
                <h1 class="text-4xl md:text-5xl font-bold text-primary">
                    Halo, saya <span class="text-accent">Putra</span>
                </h1>
                <p class="mt-4 text-lg md:text-xl text-gray-600 dark:text-gray-300 leading-relaxed">
                    Saya seorang <strong>Desainer Grafis</strong>, <strong>UI/UX Designer</strong>,
                    dan <strong>Web Developer</strong> yang berdedikasi untuk membangun solusi digital yang menarik dan
                    fungsional.
                </p>
                <div class="mt-6 flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('projects.index') }}" class="btn btn-primary">Lihat Portofolio</a>
                    <a href="{{ route('contact') }}" class="btn btn-outline btn-accent">Hubungi Saya</a>
                </div>
            </div>

            {{-- Ilustrasi Section --}}
            <div class="flex justify-center animate-fade-in-down delay-100">
                <img src="https://undraw.co/api/illustrations/f4e30b1b-0f3d-4c3a-b1f4-ea09ed0b2a1e" alt="Ilustrasi"
                    class="w-full max-w-sm dark:brightness-90" loading="lazy">
            </div>
        </div>
    </section>
@endsection
