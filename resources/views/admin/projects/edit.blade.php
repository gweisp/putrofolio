@extends('layouts.admin')

@section('content')
<div class="p-4 max-w-2xl mx-auto">
    <h1 class="text-xl font-bold mb-4">Edit Project</h1>
    <form action="{{ route('admin.projects.update', $project) }}" method="POST" class="bg-white shadow p-4 rounded space-y-4">
        @csrf @method('PUT')
        <div>
            <label class="block font-semibold">Name</label>
            <input type="text" name="name" value="{{ $project->name }}" class="w-full border rounded p-2" required>
        </div>
        <div>
            <label class="block font-semibold">Description</label>
            <textarea name="description" class="w-full border rounded p-2">{{ $project->description }}</textarea>
        </div>
        <div class="text-right">
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Update</button>
        </div>
    </form>
</div>
@endsection
