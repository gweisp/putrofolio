<h2 class="text-lg font-bold mb-4">Admin Panel</h2>
<nav class="flex flex-col space-y-2">
    <a href="{{ route('admin.projects') }}"
        class="text-gray-700 hover:text-blue-500 {{ request()->routeIs('admin.projects') ? 'font-semibold' : '' }}">
        📁 Projects
    </a>
    {{-- Tambahkan menu lain jika ada --}}
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="text-red-500 mt-4 text-left hover:text-red-700">🚪 Logout</button>
    </form>
</nav>
