<aside class="hidden md:block w-64 h-screen bg-gray-800 text-white fixed top-0 left-0 pt-20 px-6 shadow-md z-40">
    <h2 class="text-xl font-bold mb-6">Admin Panel</h2>

    <nav class="space-y-3">
        <a href="{{ url('/admin/projects') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Manage Projects</a>
        <a href="{{ url('/admin/skills') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Manage Skills</a>
        <a href="{{ url('/admin/contacts') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Messages</a>
    </nav>
</aside>
