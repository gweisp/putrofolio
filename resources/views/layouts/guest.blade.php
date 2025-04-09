<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    @include('layouts.partials.head', ['title' => 'Guest Page'])
</head>

<body class="min-h-screen bg-base-100">
    {{-- Navbar --}}
    @include('layouts.partials.navigation')

    {{-- Main Content --}}
    <main class="min-h-screen pt-16 px-4 sm:px-6 lg:px-8">
        @yield('content')
    </main>
</body>
<!-- AOS Animation JS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</html>
