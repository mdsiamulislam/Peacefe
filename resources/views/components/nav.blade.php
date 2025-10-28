<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link rel="icon" type="image/svg+xml" href='data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="green"><g transform="translate(48 0) scale(-1 1)"><path d="M4 4H17.3334V17.3334H30.6666V30.6666H44V44H4V4Z"/></g></svg>' />
    <title>Peacefe - Discover Islam</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#4CAF50",
                        "background-light": "#FFFFFF",
                        "background-dark": "#112119",
                        "accent-gold": "#D4AF37",
                        "accent-blue": "#ADD8E6",
                        "text-light": "#333333",
                        "text-dark": "#F0F0F0"
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "0.75rem",
                        "xl": "1rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark font-display">
    <div class="relative flex min-h-screen w-full flex-col">
        <div class="layout-container flex h-full grow flex-col">
            <header class="sticky top-0 z-50 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-sm border-b border-gray-200 dark:border-gray-700">
                <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8">
                    <div class="flex items-center justify-between py-4">
                        <div class="flex items-center gap-4">
                            <div class="size-8 text-primary">
                                <svg fill="green" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                    <g transform="translate(48 0) scale(-1 1)">
                                        <path d="M4 4H17.3334V17.3334H30.6666V30.6666H44V44H4V4Z" fill="currentColor" />
                                    </g>
                                </svg>

                            </div>
                            <h2 class="text-xl font-bold leading-tight">Peacefe</h2>
                        </div>
                        <nav class="hidden md:flex items-center gap-8">
                            <a class="text-sm font-medium hover:text-primary transition-colors" href="/">Home</a>
                            <a class="text-sm font-medium hover:text-primary transition-colors" href="/about">About Us</a>
                            <a class="text-sm font-medium hover:text-primary transition-colors" href="/islam">Islam</a>
                            <a class="text-sm font-medium hover:text-primary transition-colors" href="/video">Videos</a>
                            <a class="text-sm font-medium hover:text-primary transition-colors" href="/article">Articles</a>
                            <a class="text-sm font-medium hover:text-primary transition-colors" href="/others">Links</a>
                        </nav>
                        <div class="flex items-center gap-2">
                            <button class="flex items-center gap-2 px-4 h-10 rounded-lg bg-gray-100 dark:bg-gray-800 text-sm font-bold hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                                <span>Language</span>
                                <span class="material-symbols-outlined text-base">expand_more</span>
                            </button>
                            <button class="md:hidden flex items-center justify-center size-10 rounded-lg bg-gray-100 dark:bg-gray-800">
                                <span class="material-symbols-outlined">menu</span>
                            </button>
                        </div>
                    </div>
                </div>
            </header>

            {{ $slot }}


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
                            <div class="flex space-x-4 mb-4">
                                <a href="https://www.facebook.com/islamidawahinstitutebangladesh/" class="hover:text-primary">Facebook</a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12 pt-8 border-t border-gray-200 dark:border-gray-700 text-center">
                        <p class="mb-2 italic text-sm">"Indeed, with hardship, there is ease." (Quran 94:6)</p>
                        <p class="text-sm">© 2025 Peacefe. All Rights Reserved.</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>