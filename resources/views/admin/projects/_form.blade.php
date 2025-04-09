@props(['route', 'method' => 'POST', 'project' => null])

<form action="{{ $route }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf
    @if ($method !== 'POST')
        @method($method)
    @endif

    {{-- Title --}}
    <div>
        <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Judul Project</label>
        <input type="text" name="title" id="title" required class="input input-bordered w-full mt-1"
            value="{{ old('title', $project->title ?? '') }}">
    </div>

    {{-- Description --}}
    <div>
        <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Deskripsi</label>
        <textarea name="description" id="description" rows="4" class="textarea textarea-bordered w-full mt-1" required>{{ old('description', $project->description ?? '') }}</textarea>
    </div>

    {{-- Tech Stack --}}
    <div>
        <label for="tech_stack" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Teknologi</label>
        <input type="text" name="tech_stack" id="tech_stack" class="input input-bordered w-full mt-1"
            placeholder="Contoh: Laravel, Tailwind CSS" value="{{ old('tech_stack', $project->tech_stack ?? '') }}">
    </div>

    {{-- Link --}}
    <div>
        <label for="link" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Link</label>
        <input type="url" name="link" id="link" class="input input-bordered w-full mt-1"
            placeholder="https://example.com" value="{{ old('link', $project->link ?? '') }}">
    </div>

    {{-- Image --}}
    <div>
        <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Gambar</label>
        <input type="file" name="image" id="image" class="file-input file-input-bordered w-full mt-1">
        @if (!empty($project?->image))
            <img src="{{ asset('storage/' . $project->image) }}" alt="Preview" class="mt-3 w-32 rounded shadow">
        @endif
    </div>

    {{-- Submit --}}
    <div class="text-end">
        <button type="submit" class="btn btn-primary">
            {{ $method === 'POST' ? 'Simpan Project' : 'Update Project' }}
        </button>
    </div>
</form>
