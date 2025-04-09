@extends('layouts.user')

@section('content')
    <div class="max-w-3xl mx-auto px-4 py-10">
        <h1 class="text-2xl font-bold mb-6">Tambah Project Baru</h1>

        @include('projects._form', [
            'route' => route('projects.store'),
            'method' => 'POST',
        ])
    </div>
    <form method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data">
        @include('projects._form')
    </form>@extends('layouts.user')

@section('content')
    <div class="max-w-3xl mx-auto px-4 py-10">
        <h1 class="text-2xl font-bold mb-6">Tambah Project Baru</h1>

        <form method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data">
            @include('projects._form')
        </form>
    </div>
@endsection

@endsection
