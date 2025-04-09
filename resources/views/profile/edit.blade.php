@extends('layouts.user')

@section('content')
    <div class="max-w-4xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Profil Saya</h2>

        {{-- Success message --}}
        @if (session('status') === 'profile-updated')
            <div class="mb-4 text-green-600">
                Profil berhasil diperbarui.
            </div>
        @endif

        {{-- Profile Update Form --}}
        <form method="post" action="{{ route('profile.update') }}" class="bg-white shadow-md rounded-lg p-6 space-y-6">
            @csrf
            @method('patch')

            <div>
                <label class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" name="name" value="{{ old('name', auth()->user()->name) }}"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    required>
                @error('name')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" value="{{ old('email', auth()->user()->email) }}"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    required>
                @error('email')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition">
                    Simpan Perubahan
                </button>
            </div>
        </form>

        {{-- Delete Account (opsional) --}}
        <div class="mt-10">
            <form method="post" action="{{ route('profile.destroy') }}"
                onsubmit="return confirm('Yakin ingin menghapus akun?');">
                @csrf
                @method('delete')

                <button type="submit" class="text-red-600 hover:underline hover:text-red-700 text-sm">
                    Hapus Akun
                </button>
            </form>
        </div>
    </div>
@endsection
