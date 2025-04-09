@extends('layouts.guest')

@section('content')
    <div class="max-w-md mx-auto p-6 bg-base-100 shadow-md rounded-box animate-fade-in-down">
        <h2 class="text-2xl font-bold text-center mb-2 text-base-content">Masuk</h2>
        <p class="text-sm text-center mb-4 text-base-content/70">Silakan login untuk melanjutkan</p>

        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <div>
                <label for="email" class="label">
                    <span class="label-text">Email</span>
                </label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
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

            <div class="flex justify-between items-center text-sm">
                <label class="flex items-center gap-2">
                    <input type="checkbox" name="remember" class="checkbox checkbox-sm" />
                    <span>Ingat saya</span>
                </label>
                <a href="{{ route('password.request') }}" class="link link-primary">Lupa Password?</a>
            </div>

            <button type="submit" class="btn btn-primary w-full animate-bounce-once">
                Masuk
            </button>

            <div class="text-center mt-4 text-base-content/70 text-sm">
                Belum punya akun?
                <a href="{{ route('register') }}" class="link link-primary font-medium">Daftar</a>
            </div>
        </form>
    </div>
@endsection
