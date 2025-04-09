@extends('layouts.user')

@section('content')
    <div class="max-w-6xl mx-auto px-4 py-12">
        <h1 class="text-3xl md:text-4xl font-bold text-center mb-10 text-gray-800 dark:text-white">
            <i class="fas fa-envelope text-primary mr-2"></i>Hubungi Saya
        </h1>

        <div class="grid md:grid-cols-2 gap-10 items-center">
            {{-- Kolom Kiri: Ilustrasi --}}
            <div class="flex justify-center">
                <img src="{{ asset('images/contact-illustration.svg') }}" alt="Contact Illustration"
                    class="w-full max-w-sm dark:invert">
            </div>

            {{-- Kolom Kanan: Form --}}
            <div>
                @if (session('success'))
                    <div class="bg-green-100 text-green-800 px-4 py-3 rounded mb-6 text-sm">
                        <i class="fas fa-check-circle mr-1"></i>{{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">

                    @csrf

                    <div>
                        <label for="name" class="block mb-1 font-semibold text-gray-700 dark:text-gray-200">
                            <i class="fas fa-user mr-1"></i>Nama
                        </label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}"
                            class="w-full px-4 py-2 border rounded-lg bg-white dark:bg-gray-800 dark:text-white dark:border-gray-700 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block mb-1 font-semibold text-gray-700 dark:text-gray-200">
                            <i class="fas fa-envelope mr-1"></i>Email
                        </label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                            class="w-full px-4 py-2 border rounded-lg bg-white dark:bg-gray-800 dark:text-white dark:border-gray-700 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="message" class="block mb-1 font-semibold text-gray-700 dark:text-gray-200">
                            <i class="fas fa-comment-dots mr-1"></i>Pesan
                        </label>
                        <textarea id="message" name="message" rows="5"
                            class="w-full px-4 py-2 border rounded-lg bg-white dark:bg-gray-800 dark:text-white dark:border-gray-700 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">{{ old('message') }}</textarea>
                        @error('message')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit"
                        class="px-6 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 transition flex items-center">
                        <i class="fas fa-paper-plane mr-2"></i>Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
