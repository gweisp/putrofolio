@extends('layouts.admin')

@section('content')
    <div class="max-w-6xl mx-auto px-4 py-10">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Kelola Proyek</h1>
            <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Tambah Project</a>

        </div>

        <div class="overflow-x-auto">
            <table class="table w-full">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->title }}</td>
                            <td class="line-clamp-2">{{ $project->description }}</td>
                            <td>
                                @if ($project->image)
                                    <img src="{{ asset('storage/' . $project->image) }}"
                                        class="w-16 h-16 object-cover rounded" />
                                @endif
                            </td>
                            <td class="space-x-2">
                                <a href="{{ route('admin.projects.edit', $project) }}"
                                    class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('admin.projects.destroy', $project) }}" method="POST"
                                    class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-error" onclick="return confirm('Yakin?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
