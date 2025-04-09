@extends('layouts.user')

@section('content')
    <div class="max-w-4xl mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold mb-4">{{ $project->title }}</h1>

        @if ($project->image)
            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}"
                class="w-full h-auto max-h-[400px] object-cover rounded mb-6">
        @endif

        <p class="text-lg text-gray-700">{{ $project->description }}</p>

        <div class="mt-6">
            <a href="{{ route('projects.index') }}" class="btn btn-outline btn-primary">← Kembali ke daftar proyek</a>
        </div>
    </div>
@endsection
