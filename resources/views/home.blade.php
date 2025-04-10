@extends('layouts.user')

@section('content')
    {{-- HOME SECTION --}}
    <section id="home"
        class="min-h-screen flex items-center justify-center bg-gradient-to-br from-white via-blue-100 to-white dark:from-gray-800 dark:via-gray-900 dark:to-gray-800 transition-colors duration-300">
        <div class="text-center px-4" data-aos="fade-down" data-aos-duration="800">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-800 dark:text-white mb-4">
                Halo, Saya <span class="text-primary dark:text-primary-400">Putraa</span>
            </h1>
            <p class="text-lg md:text-2xl text-gray-600 dark:text-gray-300">
                Seorang <span class="font-semibold text-primary dark:text-primary-400">UI/UX Designer & Developer</span>
            </p>
        </div>
    </section>

    {{-- ABOUT SECTION --}}
    <div class="about-section bg-gradient-to-b from-white via-gray-50 to-white dark:from-gray-900 dark:to-gray-800 py-20"
        id="about">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12 text-gray-800 dark:text-white" data-aos="fade-up">Tentang Saya
            </h2>

            <div class="grid md:grid-cols-2 gap-10 items-center">
                {{-- Ilustrasi / Foto --}}
                <div class="text-center" data-aos="fade-right" data-aos-delay="200">
                    <img src="{{ asset('images/profil.jpg') }}" alt="Tentang Saya"
                        class="w-full max-w-sm mx-auto rounded-lg shadow-md dark:invert">
                </div>

                {{-- Deskripsi --}}
                <div class="max-w-xl text-gray-700 dark:text-gray-300 space-y-4 md:px-4" data-aos="fade-left"
                    data-aos-delay="400">
                    <p>Saya adalah seorang <strong>UI/UX Designer</strong>, <strong>Web Developer</strong>, dan
                        <strong>Content Creator</strong> yang memiliki passion besar dalam dunia digital dan teknologi.
                    </p>
                    <p>Berpengalaman dalam mengelola project desain, mengembangkan aplikasi berbasis web dengan Laravel, dan
                        mengedepankan user experience yang solid.</p>
                    <p>Saya percaya bahwa desain yang baik adalah yang tidak hanya enak dilihat, tapi juga nyaman digunakan.
                    </p>
                </div>
            </div>

            {{-- Nilai-nilai --}}
            <div class="mt-20 grid md:grid-cols-3 gap-8 text-center">
                <div class="p-6 bg-white dark:bg-gray-600 rounded-lg shadow hover:shadow-lg transition" data-aos="flip-left"
                    data-aos-delay="300">
                    <i class="fas fa-lightbulb text-primary text-3xl mb-3"></i>
                    <h3 class="font-semibold text-lg mb-2">Kreatif</h3>
                    <p class="text-sm text-gray-300 dark:text-gray-400">Selalu mencari solusi unik dan desain inovatif untuk
                        setiap tantangan.</p>
                </div>
                <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow hover:shadow-lg transition" data-aos="flip-up"
                    data-aos-delay="600">
                    <i class="fas fa-code text-primary text-3xl mb-3"></i>
                    <h3 class="font-semibold text-lg mb-2">Teknis</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Mampu mengintegrasikan estetika desain dengan logika
                        pemrograman.</p>
                </div>
                <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow hover:shadow-lg transition"
                    data-aos="flip-right" data-aos-delay="1200">
                    <i class="fas fa-users text-primary text-3xl mb-3"></i>
                    <h3 class="font-semibold text-lg mb-2">Kolaboratif</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Terbiasa bekerja dalam tim lintas divisi untuk
                        mencapai hasil terbaik.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- SKILLS SECTION --}}
    <section id="skills"
        class="py-20 bg-gradient-to-r from-purple-50 to-white dark:from-gray-800 dark:to-gray-700 transition-colors duration-300">
        <div class="max-w-5xl mx-auto px-4 sm:px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">💡 My Skills</h2>
                <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                    Berikut adalah keahlian yang saya kuasai dalam dunia desain, pemrograman, dan pengembangan web.
                </p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4" data-aos="fade-up">
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

    {{-- PROJECTS SECTION --}}
    <section id="projects"
        class="py-20 bg-gradient-to-br from-white via-blue-50 to-white dark:from-gray-900 dark:to-gray-800 transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    <i class="fas fa-folder-open text-primary dark:text-primary-400 mr-2"></i>Project Saya
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                    Beberapa project yang telah saya selesaikan untuk klien maupun proyek pribadi.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" data-aos="fade-up">
                @foreach ($projects as $project)
                    <div
                        class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-all duration-300">
                        <div class="relative aspect-video overflow-hidden">
                            @if ($project->image)
                                <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}"
                                    class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
                                    loading="lazy">
                            @else
                                <div class="w-full h-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center">
                                    <i class="fas fa-image text-4xl text-gray-400"></i>
                                </div>
                            @endif
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">{{ $project->title }}
                            </h3>
                            <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">{{ $project->tech_stack }}</p>
                            <div class="flex justify-between items-center">
                                <a href="{{ $project->link }}" target="_blank"
                                    class="text-primary dark:text-primary-400 hover:underline text-sm flex items-center">
                                    <i class="fas fa-external-link-alt mr-2"></i>Demo
                                </a>
                                @if ($project->github_link)
                                    <a href="{{ $project->github_link }}" target="_blank"
                                        class="text-gray-600 dark:text-gray-400 hover:text-primary dark:hover:text-primary-400">
                                        <i class="fab fa-github text-lg"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CONTACT CTA SECTION --}}
    <section id="contact"
        class="py-20 bg-gradient-to-r from-green-50 to-white dark:from-gray-800 dark:to-gray-700 transition-colors duration-300">
        <div class="max-w-xl mx-auto px-4 text-center" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-gray-800 dark:text-white">
                <i class="fas fa-handshake text-primary dark:text-primary-400 mr-2"></i>Ingin Bekerja Sama?
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 mb-8 max-w-lg mx-auto">
                Hubungi saya melalui halaman kontak untuk berdiskusi lebih lanjut tentang proyek Anda.
            </p>
            <a href="{{ route('contact') }}"
                class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary/90 transition-all duration-300 hover:shadow-lg">
                <i class="fas fa-paper-plane mr-2 transition-transform duration-300 group-hover:rotate-12"></i>
                Hubungi Saya
            </a>
        </div>
    </section>
@endsection

@push('scripts')
    <script type="module">
        // Scrollspy functionality moved to separate JS file
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll("section");
            const navLinks = document.querySelectorAll(".nav-link");

            window.addEventListener("scroll", () => {
                let current = "";

                sections.forEach((section) => {
                    const sectionTop = section.offsetTop;
                    if (window.scrollY >= sectionTop - 100) {
                        current = section.getAttribute("id");
                    }
                });

                navLinks.forEach(link => {
                    link.classList.remove("active");
                    if (link.getAttribute("href") === `#${current}`) {
                        link.classList.add("active");
                    }
                });
            });
        });
    </script>
@endpush
