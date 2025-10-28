<x-nav>

    <div class="min-h-screen bg-gray-100 py-10">
        <article class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Back Button -->
            <div class="mb-6">
                <a href="{{ url('/article') }}"
                    class="inline-flex items-center space-x-2 text-gray-700 hover:text-primary transition-all duration-200">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    <span class="font-medium">Back to Blog</span>
                </a>
            </div>


            <!-- Article Header -->
            <header class="mb-8">
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4 leading-tight">
                    {{ $article->title }}
                </h1>

                @if($article->subtitle)
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    {{ $article->subtitle }}
                </p>
                @endif

                <div class="flex items-center text-gray-500 text-sm space-x-4">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span>{{ $article->author }}</span>
                    </div>
                    <span class="text-gray-300">•</span>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <time datetime="{{ $article->created_at }}">
                            {{ optional($article->created_at)->format('M d, Y') }}
                        </time>
                    </div>
                </div>
            </header>

            <!-- Featured Image -->
            @if($article->image_url)
            <div class="mb-8 rounded-lg overflow-hidden shadow-md">
                <img src="{{ $article->image_url }}" alt="{{ $article->title }}"
                    class="w-full h-auto object-cover">
            </div>
            @endif

            <!-- Article Content -->
            <div class="bg-white rounded-xl shadow-md p-8 md:p-10">
                <div class="prose prose-gray max-w-none text-gray-800">
                    {!! nl2br(e($article->content)) !!}
                </div>
            </div>
            <!-- Article Footer -->
            <footer class="mt-12 pt-8 border-t border-gray-200">
                <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4">


                    <div class="text-sm text-gray-500">
                        Last updated: {{ optional($article->updated_at)->format('M d, Y') }}
                    </div>
                </div>
            </footer>
        </article>
    </div>

</x-nav>