@extends('layouts.admin')

@section('content')
    <div class="max-w-4xl mx-auto px-4 py-10">
        <h1 class="text-2xl font-bold mb-6">Edit Proyek</h1>

        @include('admin.projects._form', [
            'route' => route('projects.update', $project),
            'method' => 'PUT',
            'project' => $project,
        ])
    </div>
@endsection
