@extends('layouts.guest')

@section('content')
    <h1 class="text-xl font-bold mb-4">Konfirmasi Password</h1>

    <p class="mb-4 text-gray-600">
        Silakan konfirmasi password Anda sebelum melanjutkan.
    </p>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium">Password</label>
            <input id="password" type="password" name="password" required class="w-full border-gray-300 rounded mt-1">
        </div>

        <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded hover:bg-indigo-700 transition">
            Konfirmasi
        </button>
    </form>
@endsection
