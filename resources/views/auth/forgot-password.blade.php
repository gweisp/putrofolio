@extends('layouts.guest')

@section('content')
    <div class="max-w-md mx-auto p-6 bg-base-100 shadow-md rounded-box animate-fade-in-down">
        <h2 class="text-2xl font-bold text-center mb-2 text-base-content">Reset Password</h2>
        <p class="text-sm text-center mb-4 text-base-content/70">Masukkan email untuk mengirimkan link reset</p>

        @if (session('status'))
            <div class="alert alert-success shadow mb-4">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
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

            <button type="submit" class="btn btn-primary w-full">
                Kirim Link Reset
            </button>

            <div class="text-center mt-4">
                <a href="{{ route('login') }}" class="link link-primary text-sm">Kembali ke Login</a>
            </div>
        </form>
    </div>
@endsection
