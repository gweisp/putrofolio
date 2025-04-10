@extends('layouts.user')

@section('title', 'My Skills')

@section('content')
    <section">
        <div class="about-section relative overflow-hidden py-24" id="about">
            {{-- Animated Gradient Background --}}
            <div
                class="absolute inset-0 z-0 animate-gradient bg-gradient-to-br from-pink-300 via-purple-300 to-indigo-400 dark:from-indigo-900 dark:via-purple-900 dark:to-pink-900 opacity-10 blur-3xl">
            </div>
            <div class="max-w-5xl mx-auto text-center animate-fade-in-up delay-200">
                <h1 class="text-4xl sm:text-5xl font-bold mb-6">💡 My Skills</h1>
                <p class="text-lg text-gray-500 dark:text-gray-400 mb-12">Berikut adalah keahlian yang saya kuasai dalam
                    dunia
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
        </div>
        </section>
    @endsection
