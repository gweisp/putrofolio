@extends('layouts.admin')

@section('content')
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-6">Pesan Masuk</h1>

        @if (session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif

        @if ($messages->count())
            <div class="overflow-x-auto bg-white rounded shadow">
                <table class="w-full table-auto text-sm text-left">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="p-3">Nama</th>
                            <th class="p-3">Email</th>
                            <th class="p-3">Waktu</th>
                            <th class="p-3 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($messages as $message)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="p-3">{{ $message->name }}</td>
                                <td class="p-3">{{ $message->email }}</td>
                                <td class="p-3 text-sm text-gray-600">{{ $message->created_at->diffForHumans() }}</td>
                                <td class="p-3 text-right space-x-2">
                                    <a href="{{ route('admin.messages.show', $message) }}"
                                        class="text-blue-600 hover:underline">Lihat</a>

                                    <form action="{{ route('admin.messages.destroy', $message) }}" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Yakin hapus pesan ini?')"
                                            class="text-red-600 hover:underline">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                {{ $messages->links() }}
            </div>
        @else
            <p class="text-gray-600">Belum ada pesan yang masuk.</p>
        @endif
    </div>
@endsection
