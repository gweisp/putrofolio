<div class="space-y-4">
    <!-- Judul -->
    <div>
        <label class="label" for="title">Judul Project</label>
        <input id="title" type="text" name="title" value="{{ old('title', $project->title ?? '') }}"
            class="input input-bordered w-full" required>
    </div>

    <!-- Deskripsi -->
    <div>
        <label class="label" for="description">Deskripsi</label>
        <textarea id="description" name="description" class="textarea textarea-bordered w-full" rows="4" required>{{ old('description', $project->description ?? '') }}</textarea>
    </div>

    <!-- Gambar -->
    <div>
        <label class="label" for="image">Gambar</label>
        <input type="file" name="image" id="image" class="file-input file-input-bordered w-full" />

        @if (!empty($project?->image))
            <div class="mt-2">
                <img src="{{ asset('storage/' . $project->image) }}" alt="Preview" class="w-32 rounded shadow">
            </div>
        @endif
    </div>
    <button type="submit" class="btn btn-primary mt-4">
        {{ isset($project) ? 'Update' : 'Simpan' }}
    </button>
</div>
