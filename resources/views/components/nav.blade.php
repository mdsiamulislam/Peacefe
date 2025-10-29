<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Peacefe - Discover Islam</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24
        }
    </style>
</head>

<body class="bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-100 font-sans">
    <div class="relative min-h-screen flex flex-col">

        <!-- Header -->
        <header class="sticky top-0 z-50 bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700">
            <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8">
                <div class="flex items-center justify-between py-4">
                    <!-- Logo -->
                    <div class="flex items-center gap-4">
                        <div class="text-green-600">
                            <svg fill="green" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" class="w-8 h-8">
                                <g transform="translate(48 0) scale(-1 1)">
                                    <path d="M4 4H17.3334V17.3334H30.6666V30.6666H44V44H4V4Z" fill="currentColor" />
                                </g>
                            </svg>
                        </div>
                        <h2 class="text-xl font-bold leading-tight">Peacefe</h2>
                    </div>

                    <!-- Desktop Nav -->
                    <nav class="hidden md:flex items-center gap-8">
                        <a class="hover:text-green-600 transition" href="/">Home</a>
                        <a class="hover:text-green-600 transition" href="/about">About Us</a>
                        <a class="hover:text-green-600 transition" href="/islam">Islam</a>
                        <a class="hover:text-green-600 transition" href="/video">Videos</a>
                        <a class="hover:text-green-600 transition" href="/article">Articles</a>
                        <a class="hover:text-green-600 transition" href="/others">Links</a>
                    </nav>

                    <!-- Hamburger -->
                    <div class="md:hidden">
                        <button id="hamburgerBtn" class="p-2 rounded-lg bg-gray-100 dark:bg-gray-800">
                            <span class="material-symbols-outlined">menu</span>
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <!-- Mobile Drawer -->
        <div id="mobileDrawer" class="fixed top-0 right-[-100%] w-64 h-full bg-white dark:bg-gray-900 shadow-lg z-50 transition-all duration-300">
            <div class="flex justify-between items-center px-4 py-4 border-b border-gray-200 dark:border-gray-700">
                <h2 class="font-bold text-lg">Menu</h2>
                <button id="closeDrawer" class="p-2 rounded-lg bg-gray-100 dark:bg-gray-800">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            <nav class="flex flex-col mt-4 px-4 gap-4">
                <a class="hover:text-green-600 transition" href="/">Home</a>
                <a class="hover:text-green-600 transition" href="/about">About Us</a>
                <a class="hover:text-green-600 transition" href="/islam">Islam</a>
                <a class="hover:text-green-600 transition" href="/video">Videos</a>
                <a class="hover:text-green-600 transition" href="/article">Articles</a>
                <a class="hover:text-green-600 transition" href="/others">Links</a>
            </nav>
        </div>

        <!-- Overlay -->
        <div id="drawerOverlay" class="fixed inset-0 bg-black bg-opacity-30 hidden z-40"></div>

        <!-- Main Content -->
        <main class="flex-grow p-4">
            {{ $slot }}
        </main>

    </div>
    <footer class="bg-gray-100 dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700">
        <div class="max-w-7xl mx-auto py-12 px-4 md:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:justify-between gap-8">
                <div>
                    <h3 class="font-bold text-lg mb-4">Contact Us</h3>
                    <p class="mb-2">info@peacefe.com</p>
                    <p>PCJW+99P, Manda sesh bridge, Dhaka</p>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-4">Follow Us</h3>
                    <div class="flex space-x-4 mb-4"> <a href="https://www.facebook.com/islamidawahinstitutebangladesh/" class="hover:text-primary">Facebook</a> </div>
                </div>
            </div>
            <div class="mt-12 pt-8 border-t border-gray-200 dark:border-gray-700 text-center">
                <p class="mb-2 italic text-sm">"Indeed, with hardship, there is ease." (Quran 94:6)</p>
                <p class="text-sm">© 2025 Peacefe. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        const hamburgerBtn = document.getElementById('hamburgerBtn');
        const mobileDrawer = document.getElementById('mobileDrawer');
        const closeDrawer = document.getElementById('closeDrawer');
        const drawerOverlay = document.getElementById('drawerOverlay');

        function openDrawer() {
            mobileDrawer.style.right = '0';
            drawerOverlay.classList.remove('hidden');
        }

        function closeDrawerFunc() {
            mobileDrawer.style.right = '-100%';
            drawerOverlay.classList.add('hidden');
        }

        hamburgerBtn.addEventListener('click', openDrawer);
        closeDrawer.addEventListener('click', closeDrawerFunc);
        drawerOverlay.addEventListener('click', closeDrawerFunc);
    </script>
</body>

</html>