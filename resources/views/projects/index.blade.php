@extends('layouts.user')

@section('content')
    <div class="max-w-6xl mt-16 mx-auto px-4 sm:px-6">
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
@endsection
