@extends('layouts.admin')

@section('content')
<div class="p-4 max-w-2xl mx-auto">
    <h1 class="text-xl font-bold mb-4">Create New Project</h1>
    <form action="{{ route('admin.projects.store') }}" method="POST" class="bg-white shadow p-4 rounded space-y-4">
        @csrf
        <div>
            <label class="block font-semibold">Name</label>
            <input type="text" name="name" class="w-full border rounded p-2" required>
        </div>
        <div>
            <label class="block font-semibold">Description</label>
            <textarea name="description" class="w-full border rounded p-2"></textarea>
        </div>
        <div class="text-right">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save</button>
        </div>
    </form>
</div>
@endsection
