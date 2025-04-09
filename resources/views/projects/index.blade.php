@extends('layouts.user')

@section('content')
    <div class="max-w-7xl mx-auto px-4 py-10">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Daftar Project</h1>
            <a href="{{ route('projects.create') }}" class="btn btn-primary">+ Tambah Project</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if ($projects->isEmpty())
            <div class="text-gray-500 dark:text-gray-400 text-center mt-10">
                Belum ada project yang ditambahkan.
            </div>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach ($projects as $project)
                    <div class="card shadow-lg bg-white dark:bg-base-200 hover:shadow-xl transition duration-300">
                        @if ($project->image)
                            <figure>
                                <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}"
                                    class="h-48 w-full object-cover">
                            </figure>
                        @endif
                        <div class="card-body">
                            <h2 class="card-title">{{ $project->title }}</h2>
                            <p class="text-gray-600 dark:text-gray-300 line-clamp-3">
                                {{ $project->description }}
                            </p>
                            <div class="card-actions justify-between items-center mt-4">
                                <a href="{{ route('projects.edit', $project) }}" class="btn btn-sm btn-outline">Edit</a>

                                <form action="{{ route('projects.destroy', $project) }}" method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus project ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-error">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
