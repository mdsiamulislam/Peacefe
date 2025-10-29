<x-nav>
    <div class="min-h-screen bg-gray-50 py-12 px-6">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl font-bold text-gray-900 mb-8 text-center">
                Useful Resources & Quick Links
            </h1>

            <div class="grid md:grid-cols-2 gap-6">
                @foreach ($links as $link)
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-md transition-shadow border border-gray-100">
                    <h2 class="text-lg font-semibold text-gray-800 mb-1">{{ $link->title }}</h2>
                    <p class="text-sm text-gray-500 mb-4">{{ $link->description }}</p>
                    <a href="{{ $link->url }}" target="_blank"
                        class="inline-flex items-center justify-center rounded-lg bg-primary/10 text-primary hover:bg-primary hover:text-white px-4 py-2 text-sm font-medium transition-all">
                        Visit Site
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 3h7m0 0v7m0-7L10 14" />
                        </svg>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-nav>