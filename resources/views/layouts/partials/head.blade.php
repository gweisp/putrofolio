<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'My Portfolio') }}</title>

    {{-- Favicon (opsional) --}}
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    {{-- Google Fonts (optional) --}}
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;600;700&display=swap" rel="stylesheet" />

    {{-- Styles & Scripts --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/your-kit-code.js" crossorigin="anonymous"></script>

    {{-- Tambahan head dari halaman --}}
    @stack('head')

    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

</head>
