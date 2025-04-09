@extends('layouts.user')

@section('content')
    <div class="max-w-3xl mx-auto px-4 py-10">
        <h1 class="text-2xl font-bold mb-6">Edit Project</h1>

        <form method="POST" action="{{ route('projects.update', $project->id) }}" enctype="multipart/form-data"
            class="space-y-6 bg-white dark:bg-base-200 p-6 rounded-lg shadow">
            @csrf
            @method('PUT')

            @include('projects._form', ['project' => $project])

            <div class="flex justify-end">
                <button type="submit" class="btn btn-primary">
                    Update Project
                </button>
            </div>
        </form>
    </div>
@endsection
