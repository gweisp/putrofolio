@extends('layouts.admin')

@section('content')
    <div class="max-w-3xl mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Detail Pesan</h1>

        <div class="bg-white shadow-md rounded p-6 space-y-4">
            <div>
                <h2 class="font-semibold text-gray-700">Nama:</h2>
                <p class="text-gray-900">{{ $message->name }}</p>
            </div>

            <div>
                <h2 class="font-semibold text-gray-700">Email:</h2>
                <p class="text-blue-600">{{ $message->email }}</p>
            </div>

            <div>
                <h2 class="font-semibold text-gray-700">Pesan:</h2>
                <p class="text-gray-800 whitespace-pre-line">{{ $message->message }}</p>
            </div>

            <div>
                <h2 class="font-semibold text-gray-700">Dikirim pada:</h2>
                <p class="text-sm text-gray-500">{{ $message->created_at->format('d M Y, H:i') }}</p>
            </div>

            <a href="{{ route('admin.messages.index') }}"
                class="inline-block mt-4 bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-800">
                ← Kembali ke daftar pesan
            </a>
        </div>
    </div>
@endsection
