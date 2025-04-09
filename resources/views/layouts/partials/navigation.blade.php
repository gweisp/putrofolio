<nav class="navbar bg-base-100 shadow-md fixed top-0 w-full z-50">
    <div class="container mx-auto flex items-center justify-between px-4 py-2">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="text-2xl font-bold text-primary">MyPortfolio</a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center space-x-2">
            <a href="{{ url('/') }}" class="btn btn-ghost text-base">Home</a>
            <a href="{{ route('projects.index') }}" class="btn btn-ghost text-base">Projects</a>
            <a href="{{ route('skills') }}" class="btn btn-ghost text-base">Skills</a>
            <a href="{{ route('about') }}" class="btn btn-ghost text-base">About</a>
            <a href="{{ route('contact') }}" class="btn btn-ghost text-base">Contact</a>

            @auth
                <a href="{{ route('profile.edit') }}" class="btn btn-ghost text-base">Profile</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-ghost text-base text-error">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary btn-sm">Login</a>
            @endauth

            <!-- Theme toggle -->
            <label class="swap swap-rotate">
                <input type="checkbox" class="theme-controller" value="dark" />
                <svg class="swap-on fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M5.64 17.66A9 9 0 0012 21a9 9 0 100-18 9 9 0 00-6.36 15.66z" />
                </svg>
                <svg class="swap-off fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M12 3v1m0 16v1m8.66-8.66h1M3.34 12H2.34m15.02 6.36l.7.7M5.64 5.64l-.7-.7m0 12.72l.7.7M18.36 5.64l-.7-.7M12 5a7 7 0 110 14 7 7 0 010-14z" />
                </svg>
            </label>
        </div>

        <!-- Mobile Menu Toggle -->
        <div class="md:hidden dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </label>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ route('projects.index') }}">Projects</a></li>
                <li><a href="{{ route('skills') }}">Skills</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>

                @auth
                    <li><a href="{{ route('profile.edit') }}">Profile</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </li>
                @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
