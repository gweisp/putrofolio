@extends('layouts.guest')

@section('content')
    <div class="max-w-md w-full mx-auto p-6 bg-base-100 rounded-box shadow-lg animate-fade-in-down">
        <h2 class="text-2xl font-bold text-center mb-2 text-base-content">Buat Akun</h2>
        <p class="text-sm text-center mb-4 text-base-content/70">Silakan daftar untuk melanjutkan</p>

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <div>
                <label for="name" class="label">
                    <span class="label-text">Nama Lengkap</span>
                </label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                    class="input input-bordered w-full" />
                @error('name')
                    <div class="text-error text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="email" class="label">
                    <span class="label-text">Email</span>
                </label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required
                    class="input input-bordered w-full" />
                @error('email')
                    <div class="text-error text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="password" class="label">
                    <span class="label-text">Password</span>
                </label>
                <input id="password" type="password" name="password" required class="input input-bordered w-full" />
                @error('password')
                    <div class="text-error text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="password_confirmation" class="label">
                    <span class="label-text">Konfirmasi Password</span>
                </label>
                <input id="password_confirmation" type="password" name="password_confirmation" required
                    class="input input-bordered w-full" />
            </div>

            <div class="pt-2">
                <button type="submit" class="btn btn-primary w-full animate-bounce-once">
                    Daftar
                </button>
            </div>

            <div class="text-center mt-2 text-sm text-base-content/70">
                Sudah punya akun?
                <a href="{{ route('login') }}" class="link link-primary font-medium">Masuk</a>
            </div>
        </form>
    </div>
@endsection
