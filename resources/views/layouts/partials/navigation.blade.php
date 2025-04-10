<style>
    .nav-link {
        @apply text-gray-700 dark:text-gray-200 hover:text-blue-600 transition font-medium;
    }
</style>
<nav class="navbar bg-base-100 fixed top-0 z-50 shadow-md">

    <div class="container mx-auto flex justify-between items-center px-4">
        <div class="flex items-center gap-2">
            <a href="{{ url('/') }}" class="text-xl font-bold text-primary">Putroofolio</a>
        </div>

        <div class="hidden md:flex space-x-4 items-center">
            <a href="{{ url('/') }}" class="nav-link">Home</a>
            <a href="{{ route('about') }}" class="nav-link">About</a>
            <a href="{{ route('skills') }}" class="nav-link">Skills</a>
            <a href="{{ route('projects.index') }}" class="nav-link">Projects</a>
            <a href="{{ route('contact') }}" class="nav-link">Contact</a>

            @auth
                <a href="{{ route('profile.edit') }}" class="nav-link">Profile</a>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @if (auth()->user()->is_admin)
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-sm btn-primary">
                            Dashboard Admin
                        </a>
                    @endif

                    @csrf
                    <button type="submit" class="text-red-600 hover:underline">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="btn btn-sm btn-primary">Login</a>
            @endauth
        </div>

        <!-- Theme Toggle + Mobile Toggle -->
        <div class="flex items-center gap-2">
            <!-- Dark Mode Toggle -->
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

            <!-- Mobile Menu -->
            <div class="dropdown md:hidden">
                <label tabindex="0" class="btn btn-ghost">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </label>
                <ul tabindex="0"
                    class="menu menu-l dropdown-content mt-3 z-[1] p-2 shadow bg-base-200 rounded-box w-52 right-0">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('skills') }}">Skills</a></li>
                    <li><a href="{{ route('projects.index') }}">Projects</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>

                    @auth
                        @if (auth()->user()->is_admin)
                            <li><a href="{{ route('admin.projects') }}">Admin</a></li>
                        @endif
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
    </div>

</nav>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const sections = document.querySelectorAll("section[id]");
        const navLinks = document.querySelectorAll(".nav-link");

        window.addEventListener("scroll", () => {
            let current = "";

            sections.forEach((section) => {
                const sectionTop = section.offsetTop - 100;
                if (pageYOffset >= sectionTop) {
                    current = section.getAttribute("id");
                }
            });

            navLinks.forEach((link) => {
                link.classList.remove("active");
                if (link.getAttribute("href") === `#${current}`) {
                    link.classList.add("active");
                }
            });
        });

        // Smooth scroll
        document.querySelectorAll('.scroll-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    });
</script>
