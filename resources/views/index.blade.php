<x-nav>

    <main class="flex-1">
        <section class="relative">
            <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8">
                <div class="flex min-h-[80vh] flex-col gap-6 bg-cover bg-center bg-no-repeat rounded-xl items-center justify-center p-8 text-center" style='background-image: linear-gradient(rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.6) 100%), url("{{ $config->home_page_hero_image }}");'>
                    <div class="flex flex-col gap-4 max-w-3xl">
                        <h1 class="text-white text-4xl md:text-6xl font-black leading-tight">
                            Do you know ??
                        </h1>
                        <p class="text-white/90 text-lg md:text-xl">
                            {{ $config->home_page_description }}
                        </p>
                    </div>
                    <button
                        type="button"
                        onclick="location.href='{{ $config->home_page_hero_button_url}}'"
                        class="px-6 h-12 rounded-lg bg-primary text-white text-base font-bold hover:bg-primary/90 transition-colors">
                        {{ $config->home_page_hero_button_text}}
                    </button>

                </div>
            </div>
        </section>

        <section class="py-16">
            <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center mb-10">{{ $config->home_page_section_1title}}</h2>

                <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4">
                    @foreach ($wisdoms as $wisdom)
                    <div class="flex flex-col gap-4 rounded-xl bg-white dark:bg-gray-800 p-6 shadow-lg border border-gray-200 dark:border-gray-700 h-full">
                        <div class="text-accent-gold text-4xl">"</div>
                        <p class="text-lg font-medium flex-1">{{ $wisdom->content }}</p>
                        <p class="text-primary text-base font-semibold">{{ $wisdom->author }}</p>
                    </div>
                    @endforeach
                </div>

            </div>
        </section>

        <section class="py-16 bg-gray-50 dark:bg-gray-900">
            <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center mb-10">{{ $config->home_page_section_2title}}</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($videos as $video)
                    <div class="flex flex-col gap-4 group">
                        <div class="relative aspect-video w-full rounded-xl overflow-hidden shadow-lg">
                            <div class="aspect-video">
                                <iframe
                                    class="w-full h-full rounded-lg"
                                    src="{{ $video->url }}"
                                    title="{{ $video->title }} — YouTube"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen
                                    loading="lazy">
                                </iframe>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold">{{ $video->title }}</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">{{ $video->description }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>

</x-nav>