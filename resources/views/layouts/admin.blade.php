<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    @include('layouts.partials.head', ['title' => 'Admin Panel'])
</head>

<body class="min-h-screen bg-base-200 text-base-content">
    {{-- Sidebar + Content Container --}}
    <div class="flex min-h-screen pt-16">
        {{-- Sidebar --}}
        <aside class="w-64 bg-base-300 shadow-lg hidden md:block fixed inset-y-0 z-40">
            @include('layouts.admin-sidebar')
        </aside>

        {{-- Main Content --}}
        <div class="flex-1 md:ml-64 w-full">
            {{-- Top Navigation (mobile toggle / optional navbar) --}}
            @include('layouts.partials.navigation')

            {{-- Flash Message --}}
            @if (session('status'))
                <div
                    class="fixed top-16 left-1/2 transform -translate-x-1/2 bg-green-500 text-white px-6 py-2 rounded-md shadow z-50">
                    {{ session('status') }}
                </div>
            @endif

            {{-- Content --}}
            <main class="p-6">
                @yield('content')
            </main>
        </div>
    </div>
</body>
<!-- AOS Animation JS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</html>
