@extends('layouts.user')

@section('title', 'Dashboard')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Dashboard</h1>
    <p>Selamat datang, {{ auth()->user()->name }} 👋</p>
@endsection
