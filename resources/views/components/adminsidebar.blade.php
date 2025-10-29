<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Manage Translations - Peacefe Admin</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#C8A951",
                        "background-light": "#FFFFFF",
                        "background-dark": "#1a1a1a",
                        "sidebar-light": "#F0F5F1",
                        "sidebar-dark": "#222222",
                        "text-light": "#333333",
                        "text-dark": "#E0E0E0",
                        "subtext-light": "#666666",
                        "subtext-dark": "#AAAAAA",
                        "border-light": "#E0E0E0",
                        "border-dark": "#333333",
                        "success": "#22C55E",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "0.75rem",
                        "xl": "1rem",
                        "full": "9999px",
                    },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            font-size: 24px;
        }
    </style>
</head>

<body class="font-display bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark">
    <div class="relative flex min-h-screen w-full">
        <!-- SideNavBar -->
        <aside class="flex h-screen w-64 flex-col justify-between bg-sidebar-light dark:bg-sidebar-dark p-4 sticky top-0">
            <div class="flex flex-col gap-8">
                <div class="flex items-center gap-3 px-2">
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" data-alt="Peacefe logo, a stylized letter P in gold" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBp8h27nkoZreQqIaiIhOGPTXG8rRY1JYIe79eVlJvPVRu8FUGClti8OVi9DS91LDtBXZ_e7eqCYk_SzJhlCpq_JGD_xE7nNGYi4Xne7XQh1KEMK0mXzEmtqozKKz14vNU4bG8a0vpHX5m-mcWJezgWXahZYdcsObmIx9LJqdTFYsPWw_hqc7WMlD55QuKwa5XM2OAuAe0ZkHLZpqZkHWfwiDghuF_NlOmO88dRTeTcZLKglJxccmXt4JKI671PPY-n53uCLoShqVZG");'></div>
                    <div class="flex flex-col">
                        <h1 class="text-text-light dark:text-text-dark text-lg font-bold">Peacefe</h1>
                        <p class="text-subtext-light dark:text-subtext-dark text-sm">Admin Panel</p>
                    </div>
                </div>
                <nav class="flex flex-col gap-2">
                    <a class="flex items-center gap-3 px-3 py-2 rounded-lg text-subtext-light dark:text-subtext-dark hover:bg-primary/20 hover:text-text-light dark:hover:text-text-dark transition-colors" href="/admin/dashboard">
                        <span class="material-symbols-outlined">dashboard</span>
                        <p class="text-sm font-medium">Dashboard</p>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-2 rounded-lg text-subtext-light dark:text-subtext-dark hover:bg-primary/20 hover:text-text-light dark:hover:text-text-dark transition-colors" href="/admin/articles">
                        <span class="material-symbols-outlined">article</span>
                        <p class="text-sm font-medium">Manage Article</p>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-2 rounded-lg text-subtext-light dark:text-subtext-dark hover:bg-primary/20 hover:text-text-light dark:hover:text-text-dark transition-colors" href="/admin/videos">
                        <span class="material-symbols-outlined">smart_display</span>
                        <p class="text-sm font-medium">Manage Videos</p>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-2 rounded-lg text-subtext-light dark:text-subtext-dark hover:bg-primary/20 hover:text-text-light dark:hover:text-text-dark transition-colors" href="/admin/wisdoms">
                        <span class="material-symbols-outlined">format_quote</span>
                        <p class="text-sm font-medium">Manage Quotes</p>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-2 rounded-lg text-subtext-light dark:text-subtext-dark hover:bg-primary/20 hover:text-text-light dark:hover:text-text-dark transition-colors" href="#">
                        <span class="material-symbols-outlined">picture_as_pdf</span>
                        <p class="text-sm font-medium">Manage PDFs</p>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-2 rounded-lg text-subtext-light dark:text-subtext-dark hover:bg-primary/20 hover:text-text-light dark:hover:text-text-dark transition-colors" href="/admin/home/config">
                        <span class="material-symbols-outlined">tune</span>
                        <p class="text-sm font-medium">Settings</p>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-2 rounded-lg text-subtext-light dark:text-subtext-dark hover:bg-primary/20 hover:text-text-light dark:hover:text-text-dark transition-colors" href="/admin/links">
                        <span class="material-symbols-outlined">link</span>
                        <p class="text-sm font-medium">External Links</p>
                    </a>
                </nav>
            </div>
            <div class="flex flex-col gap-1">
                <a class="flex items-center gap-3 px-3 py-2 rounded-lg text-subtext-light dark:text-subtext-dark hover:bg-primary/20 hover:text-text-light dark:hover:text-text-dark transition-colors" href="#">
                    <span class="material-symbols-outlined">logout</span>
                    <p class="text-sm font-medium">Logout</p>
                </a>
            </div>
        </aside>
        <!-- Main Content -->

        <main class="flex-1 p-8">
            {{ $slot }}
        </main>

    </div>
</body>

</html>