@extends('layouts.admin')

@section('content')
    <div class="max-w-4xl mx-auto px-4 py-10">
        <h1 class="text-2xl font-bold mb-6">Tambah Proyek Baru</h1>

        @include('admin.projects._form', [
            'route' => route('admin.projects.store'),
            'method' => 'POST',
            'project' => null,
        ])
    </div>
@endsection
