<x-adminsidebar>
    <main class="flex-1 p-8 bg-gray-50 dark:bg-gray-900 min-h-screen">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white dark:bg-gray-800 shadow-sm rounded-xl overflow-hidden">
                <!-- Header -->
                <div class="flex justify-between items-center p-4 border-b border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900">
                    <h4 class="text-xl font-semibold text-primary">Edit Video</h4>
                    <a href="{{ route('admin.videos') }}" class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                        <span class="material-symbols-outlined align-middle">arrow_back</span> Back
                    </a>
                </div>

                <!-- Form Body -->
                <div class="p-6">
                    <form action="{{ route('admin.video.update', $video->id) }}" method="POST" class="flex flex-col gap-4" novalidate>
                        @csrf
                        @method('PUT')

                        <!-- Title -->
                        <div class="flex flex-col">
                            <label for="title" class="font-medium mb-1">Title</label>
                            <input type="text" id="title" name="title" value="{{ old('title', $video->title) }}" class="form-input rounded-lg p-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100" placeholder="Enter video title" required>
                        </div>

                        <!-- Category -->
                        <div class="flex flex-col">
                            <label for="category" class="font-medium mb-1">Category</label>
                            <input type="text" id="category" name="category" value="{{ old('category', $video->category) }}" class="form-input rounded-lg p-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100" placeholder="Enter video category" required>
                        </div>

                        <!-- Description -->
                        <div class="flex flex-col">
                            <label for="description" class="font-medium mb-1">Description</label>
                            <textarea id="description" name="description" rows="4" class="form-input rounded-lg p-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100" placeholder="Enter video description" required>{{ old('description', $video->description) }}</textarea>
                        </div>

                        <!-- Video URL -->
                        <div class="flex flex-col">
                            <label for="video_url" class="font-medium mb-1">YouTube Embed URL</label>
                            <input type="url" id="video_url" name="video_url" value="{{ old('video_url', $video->video_url) }}" class="form-input rounded-lg p-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100" placeholder="https://www.youtube.com/embed/VIDEO_ID" required>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Example: <code>https://www.youtube.com/embed/VIDEO_ID</code></p>
                        </div>

                        <!-- Preview -->
                        <div class="flex flex-col">
                            <label class="font-medium mb-1">Preview</label>
                            <div class="aspect-video rounded-lg overflow-hidden shadow-sm bg-black">
                                <iframe src="{{ $video->video_url }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="w-full h-full"></iframe>
                            </div>
                        </div>

                        <!-- Buttons -->
                        <div class="flex gap-3 mt-4">
                            <button type="submit" class="px-4 py-2 bg-primary text-white rounded-lg hover:opacity-90 flex items-center gap-2">
                                <span class="material-symbols-outlined">save</span> Update Video
                            </button>
                            <button type="button" onclick="window.location.href='{{ route('admin.videos') }}'" class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 flex items-center gap-2">
                                <span class="material-symbols-outlined">close</span> Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    </main>
</x-adminsidebar>
