<x-nav>
    <main class="flex-1 py-10">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8">
            <div class="flex flex-col gap-8">
                <div
                    class="flex flex-wrap items-center justify-center gap-3 p-3">
                    @foreach($categories as $category)
                    @if ($category === 'All')
                    <button
                        class="px-4 py-2 bg-primary text-white rounded-full text-sm font-medium">
                        {{ $category }}
                    </button>
                    @else
                    <button
                        class="flex h-10 items-center justify-center gap-2 rounded-full bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 px-4 hover:bg-gray-100 dark:hover:bg-gray-700">
                        <p class="text-sm font-medium">{{ $category }}</p>
                    </button>
                    @endif
                    @endforeach
                </div>

                <div
                    class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    @foreach($videos as $video)
                    <div
                        class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden group transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                        <div class="relative aspect-video">
                            <iframe class="w-full h-full"
                                src="{{ $video['url'] }}"
                                title="YouTube video player"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-lg leading-tight mb-2">
                                {{ $video['title'] }}
                            </h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                {{ $video['description'] }}
                            </p>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </main>
</x-nav>