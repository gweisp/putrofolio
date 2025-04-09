<nav class="bg-white shadow-md px-6 py-4 flex justify-between items-center md:pl-64">
    <div class="text-2xl font-bold text-indigo-600">
        <a href="/">MyPortfolio</a>
    </div>

    <div class="md:hidden">
        <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-gray-700 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    <div class="hidden md:flex items-center space-x-4">
        <a href="/projects" class="text-gray-700 hover:text-indigo-500">Projects</a>
        <a href="/contact" class="text-gray-700 hover:text-indigo-500">Contact</a>

        @auth
            @if (auth()->user()->role === 'admin')
                <a href="/admin/projects" class="text-red-500 font-semibold hover:underline">Admin Panel</a>
            @endif

            <span class="text-sm text-gray-600">👋 {{ auth()->user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <button type="submit" class="text-red-500 hover:underline">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="text-indigo-600 hover:underline">Login</a>
        @endauth
    </div>

    {{-- Mobile menu --}}
    <div x-show="mobileMenuOpen" class="absolute top-16 left-0 w-full bg-white shadow-md p-4 z-50 md:hidden">
        <a href="/projects" class="block py-2 text-gray-700 hover:text-indigo-500">Projects</a>
        <a href="/contact" class="block py-2 text-gray-700 hover:text-indigo-500">Contact</a>

        @auth
            @if (auth()->user()->role === 'admin')
                <a href="/admin/projects" class="block py-2 text-red-500 hover:underline">Admin Panel</a>
            @endif

            <form method="POST" action="{{ route('logout') }}" class="block py-2">
                @csrf
                <button type="submit" class="text-red-500 hover:underline">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="block py-2 text-indigo-600 hover:underline">Login</a>
        @endauth
    </div>
</nav>
