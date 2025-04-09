@extends('layouts.user')

@section('content')
    <div class="max-w-6xl mx-auto py-10 px-4">
        <h1 class="text-3xl font-bold mb-8">Daftar Proyek</h1>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6" data-aos="fade-up" data-aos-delay="100">
            @forelse ($projects as $project)
                <a href="{{ route('projects.show', $project) }}"
                    class="block bg-base-100 border border-base-200 rounded-lg p-4 shadow hover:shadow-lg transition duration-300">
                    @if ($project->image)
                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}"
                            class="w-full h-40 object-cover rounded mb-4">
                    @endif
                    <h2 class="text-xl font-semibold mb-1">{{ $project->title }}</h2>
                    <p class="text-sm text-gray-500 line-clamp-3">{{ $project->description }}</p>
                </a>
            @empty
                <p class="text-gray-500">Belum ada proyek yang ditambahkan.</p>
            @endforelse
        </div>
    </div>
@endsection
