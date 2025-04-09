<!DOCTYPE html>
<html lang="id" data-theme="light">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config('app.name', 'Laravel') }} - Auth</title>

    @vite('resources/css/app.css')
    <!-- Optional Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body class="min-h-screen bg-base-200 flex items-center justify-center font-sans">

    @include('layouts.partials.navigation')

    {{-- Auth Container --}}
    <main class="w-full px-4 sm:px-6 lg:px-8">
        @yield('content')
    </main>

</body>

</html>
