<x-nav>
    <main class="flex-1 py-10">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8">
            <div class="flex flex-col gap-8">

                <!-- Categories -->
                <div class="flex flex-wrap items-center justify-center gap-3 p-3">
                    <button
                        class="category-btn px-4 py-2 bg-primary text-white rounded-full text-sm font-medium"
                        data-category="All">
                        All
                    </button>
                    @foreach($categories as $category)
                    @if ($category !== 'All')
                    <button
                        class="category-btn flex h-10 items-center justify-center gap-2 rounded-full bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 px-4 hover:bg-gray-100 dark:hover:bg-gray-700"
                        data-category="{{ $category }}">
                        <p class="text-sm font-medium">{{ $category }}</p>
                    </button>
                    @endif
                    @endforeach
                </div>

                <!-- Videos Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-2 gap-6" id="video-grid">
                    @foreach($videos as $video)
                    <div class="video-item bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden group transition-all duration-300 hover:shadow-xl hover:-translate-y-1" data-category="{{ $video->category }}">
                        <div class="relative aspect-video">
                            <iframe class="w-full h-full"
                                src="{{ $video->video_url }}"
                                title="YouTube video player"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-lg leading-tight mb-2">{{ $video->title }}</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">{{ $video->description }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </main>

    <!-- Filter Script -->
    <script>
        const buttons = document.querySelectorAll('.category-btn');
        const videos = document.querySelectorAll('.video-item');

        buttons.forEach(btn => {
            btn.addEventListener('click', () => {
                const category = btn.dataset.category;

                // Remove active from all buttons
                buttons.forEach(b => b.classList.remove('bg-primary', 'text-white'));
                buttons.forEach(b => b.classList.add('bg-white', 'dark:bg-gray-800', 'text-gray-800', 'dark:text-white'));

                // Add active to clicked button
                btn.classList.add('bg-primary', 'text-white');
                btn.classList.remove('bg-white', 'dark:bg-gray-800', 'text-gray-800', 'dark:text-white');

                // Show/Hide videos
                videos.forEach(video => {
                    if (category === 'All' || video.dataset.category === category) {
                        video.style.display = '';
                    } else {
                        video.style.display = 'none';
                    }
                });
            });
        });
    </script>
</x-nav>