@extends('layouts.guest')

@section('content')
    <h1 class="text-xl font-bold mb-4">Verifikasi Email</h1>

    <p class="mb-4 text-gray-600">
        Sebelum melanjutkan, silakan verifikasi alamat email Anda melalui link yang telah kami kirim.
        Jika Anda belum menerima emailnya, klik tombol di bawah.
    </p>

    @if (session('status') === 'verification-link-sent')
        <div class="mb-4 text-green-600">
            Link verifikasi baru telah dikirim ke email Anda.
        </div>
    @endif

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded hover:bg-indigo-700 transition">
            Kirim Ulang Link Verifikasi
        </button>
    </form>

    <form method="POST" action="{{ route('logout') }}" class="mt-4">
        @csrf
        <button type="submit" class="text-sm text-red-600 hover:underline">Keluar</button>
    </form>
@endsection
