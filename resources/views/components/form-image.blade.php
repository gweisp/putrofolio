@props(['name', 'label' => ucfirst($name), 'preview' => null])

<div class="form-control w-full mb-4">
    <label class="label" for="{{ $name }}">
        <span class="label-text font-semibold">{{ $label }}</span>
    </label>

    <input type="file" name="{{ $name }}" id="{{ $name }}" class="file-input file-input-bordered w-full"
        accept="image/*" />

    @if ($preview)
        <div class="mt-4">
            <p class="text-sm text-gray-600">Gambar Saat Ini:</p>
            <img src="{{ asset('storage/' . $preview) }}" class="w-40 h-auto mt-2 rounded shadow" />
        </div>
    @endif

    @error($name)
        <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
    @enderror
</div>
