@extends('layouts.user')

@section('content')
    <h2 class="text-3xl font-bold mb-6 text-center">Project Portofolio</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @for ($i = 1; $i <= 6; $i++)
            <div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-4">
                <img src="https://via.placeholder.com/400x200?text=Project+{{ $i }}"
                    alt="Project {{ $i }}" class="rounded-xl mb-4">
                <h3 class="text-xl font-semibold">Project {{ $i }}</h3>
                <p class="text-gray-600 text-sm mt-2">Deskripsi singkat mengenai project {{ $i }} yang pernah
                    dikerjakan.</p>
                <a href="#" class="text-blue-600 text-sm mt-3 inline-block hover:underline">Lihat Detail →</a>
            </div>
        @endfor
    </div>
@endsection
