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

    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        // Efek parallax sederhana
        document.addEventListener('scroll', () => {
            const elements = document.querySelectorAll('.parallax-element');
            elements.forEach(el => {
                const speed = 0.2;
                const offset = window.scrollY * speed;
                el.style.transform = `translateY(${offset}px)`;
            });
        });
    </script>

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

</body>



</html>
