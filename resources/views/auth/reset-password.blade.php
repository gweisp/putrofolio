@extends('layouts.guest')

@section('content')
    <h1 class="text-xl font-bold mb-4">Reset Password</h1>

    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email', $request->email) }}" required
                autofocus class="w-full border-gray-300 rounded mt-1">
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium">Password Baru</label>
            <input id="password" type="password" name="password" required class="w-full border-gray-300 rounded mt-1">
        </div>

        <div class="mb-4">
            <label for="password_confirmation" class="block text-sm font-medium">Konfirmasi Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required
                class="w-full border-gray-300 rounded mt-1">
        </div>

        <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded hover:bg-indigo-700 transition">
            Simpan Password
        </button>
    </form>
@endsection
