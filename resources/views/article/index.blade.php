<x-nav>
    <main class="flex-1 py-8">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                @foreach ($articles as $article)
                <div
                    class="p-4 bg-white dark:bg-gray-800 rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <div class="flex flex-col gap-4">
                        <div
                            class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg"
                            style="
                                background-image: url('{{ $article['image_url'] }}');
                            "></div>
                        <div class="flex flex-col gap-2">
                            <p class="text-gray-600 dark:text-gray-400 text-sm">
                                {{ $article['author'] }} &middot; {{ $article['date'] }}
                            </p>
                            <p
                                class="text-text-light dark:text-white text-lg font-bold leading-tight">
                                {{ $article['title'] }}
                            </p>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">
                                {{ $article['summary'] }}
                            </p>
                        </div>
                        <button
                            class="flex items-center justify-center rounded-lg h-8 px-4 bg-primary/20 text-primary text-sm font-medium w-fit">
                            <span>Read More</span>
                        </button>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </main>
</x-nav>