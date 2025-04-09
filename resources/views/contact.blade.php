@extends('layouts.user')

@section('content')
    <section class="min-h-screen bg-base-100 pt-24 px-6">
        <div class="max-w-4xl mx-auto bg-white dark:bg-base-200 shadow-md rounded-lg p-8">
            <h2 class="text-3xl font-bold text-center mb-8 text-primary">Hubungi Saya</h2>
            <form action="#" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label class="block mb-2 font-semibold">Nama</label>
                    <input type="text" name="name" class="input input-bordered w-full" required>
                </div>
                <div>
                    <label class="block mb-2 font-semibold">Email</label>
                    <input type="email" name="email" class="input input-bordered w-full" required>
                </div>
                <div>
                    <label class="block mb-2 font-semibold">Pesan</label>
                    <textarea name="message" rows="5" class="textarea textarea-bordered w-full" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-full">Kirim Pesan</button>
            </form>
        </div>
    </section>
@endsection
