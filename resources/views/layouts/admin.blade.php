<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Panel - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body x-data="{ openSidebar: false }" class="flex bg-gray-100 min-h-screen">
    @include('layouts.partials.navigation')
    {{-- Mobile Sidebar (overlay) --}}
    <div class="md:hidden fixed inset-0 z-40 bg-black bg-opacity-50" x-show="openSidebar" @click="openSidebar = false">
    </div>

    {{-- Sidebar --}}
    <aside
        class="fixed z-50 top-0 left-0 w-64 h-full bg-white shadow-lg p-4 transform md:relative md:translate-x-0 transition-transform duration-300 ease-in-out"
        :class="{ '-translate-x-full': !openSidebar }">
        @include('layouts.admin-sidebar')
    </aside>

    {{-- Main Content --}}
    <div class="flex-1 p-6 w-full">
        {{-- Hamburger Button --}}
        <button class="md:hidden mb-4 text-gray-700" @click="openSidebar = !openSidebar">
            ☰ Menu
        </button>

        @yield('content')
    </div>

</body>


</html>
