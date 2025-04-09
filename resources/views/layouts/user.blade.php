<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    @include('layouts.partials.head', ['title' => 'My Portfolio'])
</head>

<body class="bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-white leading-relaxed">
    {{-- Navbar --}}
    @include('layouts.partials.navigation')

    {{-- Flash Message --}}
    @if (session('status'))
        <div
            class="fixed top-16 left-1/2 transform -translate-x-1/2 bg-green-500 text-white px-6 py-2 rounded-md shadow z-50">
            {{ session('status') }}
        </div>
    @endif

    {{-- Main Content --}}
    <main class="min-h-screen pt-16 px-4 sm:px-6 lg:px-8">
        @yield('content')
    </main>

    {{-- Optional Footer --}}
    <footer class="mt-16 text-center text-sm text-gray-500 dark:text-gray-400 py-6">
        &copy; {{ date('Y') }} MyPortfolio. All rights reserved.
    </footer>
</body>
<!-- AOS Animation JS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</html>
