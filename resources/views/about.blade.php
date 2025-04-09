@extends('layouts.user')

@section('content')
    <section class="min-h-screen pt-24 px-6 bg-base-100">
        <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-12 items-center">
            {{-- Foto pribadi --}}
            <div class="flex justify-center">
                <img src="{{ asset('images/profil.jpg') }}" alt="Foto Saya"
                    class="w-64 h-64 object-cover rounded-full shadow-md ring-4 ring-primary">
            </div>

            {{-- Deskripsi --}}
            <div class="space-y-6">
                <h2 class="text-4xl font-bold text-primary">Tentang Saya</h2>
                <p class="text-gray-600 dark:text-gray-300 text-lg leading-relaxed">
                    Halo! Saya Putra, seorang desainer grafis, UI/UX designer, dan web developer. Saya senang menciptakan
                    solusi visual yang menarik dan fungsional dengan pendekatan estetika dan pengalaman pengguna.
                </p>
                <ul class="text-gray-600 dark:text-gray-400 space-y-2">
                    <li><i class="fas fa-check-circle text-green-500 mr-2"></i> UI/UX Design</li>
                    <li><i class="fas fa-check-circle text-green-500 mr-2"></i> Web Development (Laravel)</li>
                    <li><i class="fas fa-check-circle text-green-500 mr-2"></i> Branding & Desain Grafis</li>
                </ul>
            </div>
        </div>
    </section>
@endsection
