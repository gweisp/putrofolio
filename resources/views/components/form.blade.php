<div>
    <label class="block font-semibold">Judul</label>
    <input type="text" name="title" class="w-full border rounded-xl p-2"
        value="{{ old('title', $project->title ?? '') }}" required>
</div>

<div>
    <label class="block font-semibold">Deskripsi</label>
    <textarea name="description" rows="4" class="w-full border rounded-xl p-2" required>{{ old('description', $project->description ?? '') }}</textarea>
</div>

<div>
    <label class="block font-semibold">Link</label>
    <input type="url" name="link" class="w-full border rounded-xl p-2"
        value="{{ old('link', $project->link ?? '') }}">
</div>

<div>
    <label class="block font-semibold">Thumbnail</label>
    <input type="file" name="thumbnail" class="w-full border rounded-xl p-2">
    @if (!empty($project->thumbnail))
        <img src="{{ asset('storage/' . $project->thumbnail) }}" class="h-24 mt-2 rounded-xl" alt="Thumbnail">
    @endif
</div>
