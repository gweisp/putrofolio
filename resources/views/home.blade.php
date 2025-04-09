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
            <div class="flex justify-center">
                <img src="{{ asset('images/home-illustration.svg') }}" alt="Contact Illustration"
                    class="w-full max-w-sm dark:invert">
            </div>
        </div>
    </section>
    {{-- About Section --}}
    <section class="py-20 bg-gray-100 dark:bg-gray-900" id="about" data-aos="fade-up">
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

    {{-- Skill Section --}}
    <section class="min-h-screen bg-base-100 text-base-content pt-6 pb-16 px-4 sm:px-8">
        <div class="max-w-5xl mx-auto text-center">
            <h1 class="text-4xl sm:text-5xl font-bold mb-6">💡 My Skills</h1>
            <p class="text-lg text-gray-500 dark:text-gray-400 mb-12">Berikut adalah keahlian yang saya kuasai dalam dunia
                desain, pemrograman, dan pengembangan web.</p>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-8">
                @php
                    $skills = [
                        ['name' => 'HTML', 'icon' => 'fab fa-html5', 'color' => 'text-orange-500'],
                        ['name' => 'CSS', 'icon' => 'fab fa-css3-alt', 'color' => 'text-blue-500'],
                        ['name' => 'JavaScript', 'icon' => 'fab fa-js', 'color' => 'text-yellow-400'],
                        ['name' => 'PHP', 'icon' => 'fab fa-php', 'color' => 'text-indigo-500'],
                        ['name' => 'Laravel', 'icon' => 'fab fa-laravel', 'color' => 'text-red-500'],
                        ['name' => 'Figma', 'icon' => 'fab fa-figma', 'color' => 'text-pink-500'],
                        ['name' => 'Photoshop', 'icon' => 'fas fa-image', 'color' => 'text-blue-700'],
                        ['name' => 'Illustrator', 'icon' => 'fas fa-pen-nib', 'color' => 'text-orange-600'],
                        ['name' => 'Canva', 'icon' => 'fas fa-paint-brush', 'color' => 'text-purple-600'],
                        ['name' => 'Tailwind CSS', 'icon' => 'fas fa-wind', 'color' => 'text-cyan-500'],
                        ['name' => 'MySQL', 'icon' => 'fas fa-database', 'color' => 'text-amber-600'],
                        ['name' => 'Git', 'icon' => 'fab fa-git-alt', 'color' => 'text-red-600'],
                    ];
                @endphp

                @foreach ($skills as $skill)
                    <div
                        class="flex flex-col items-center p-4 bg-base-200 rounded-lg shadow hover:scale-105 transition-transform duration-300">
                        <i class="{{ $skill['icon'] }} {{ $skill['color'] }} text-4xl mb-3"></i>
                        <span class="font-semibold">{{ $skill['name'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Projects Section --}}
    <section id="projects" class="py-16 bg-gray-50 dark:bg-gray-900 max-w-5xl mx-auto px-4">
        <h2 class="text-2xl font-bold mb-4">Project Terbaru</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($projects as $project)
                <div class="bg-white dark:bg-gray-800 rounded shadow p-4">
                    @if ($project->image)
                        <img src="{{ asset('storage/' . $project->image) }}" class="rounded mb-3" alt="image">
                    @endif
                    <h3 class="font-bold text-lg">{{ $project->title }}</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-3">{{ $project->description }}</p>
                    <a href="{{ $project->link }}" target="_blank" class="text-blue-500 mt-2 inline-block">Lihat
                        Project</a>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Contact Section --}}
    <section id="contact" class="py-16 max-w-5xl mx-auto px-4">
        <h2 class="text-2xl font-bold mb-4">Kontak</h2>
        <form action="{{ route('contact.store') }}" method="POST" class="grid gap-4">
            @csrf
            <input type="text" name="name" placeholder="Nama" required class="input">
            <input type="email" name="email" placeholder="Email" required class="input">
            <textarea name="message" placeholder="Pesan" rows="4" required class="input"></textarea>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </section>
@endsection
