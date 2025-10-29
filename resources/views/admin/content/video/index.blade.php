<x-adminsidebar>
    <main class="flex-1 p-8 bg-gray-50 dark:bg-gray-900 min-h-screen">
        <div class="max-w-7xl mx-auto">

            <!-- Header -->
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100">Manage Videos</h2>
                <button class="bg-primary text-white px-4 py-2 rounded-lg hover:opacity-90"
                        data-bs-toggle="modal" data-bs-target="#addVideoModal">
                    <span class="material-symbols-outlined align-middle">add</span> Add New Video
                </button>
            </div>

            <!-- Video Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($videos as $video)
                    <div class="bg-white dark:bg-gray-800 shadow rounded-xl overflow-hidden hover:scale-105 transition-transform duration-200">
                        <div class="aspect-video">
                            <iframe src="{{ $video->video_url }}" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen class="w-full h-full"></iframe>
                        </div>
                        <div class="p-4">
                            <h5 class="text-lg font-semibold text-gray-900 dark:text-gray-100">{{ $video->title }}</h5>
                            <span class="inline-block bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 px-2 py-1 rounded text-sm mb-2">{{ $video->category }}</span>
                            <p class="text-gray-600 dark:text-gray-300 truncate">{{ $video->description }}</p>
                        </div>
                        <div class="flex justify-between items-center p-4 border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900">
                            <a href="{{ route('admin.video.edit', $video->id) }}"
                               class="px-3 py-1 text-sm border border-primary text-primary rounded hover:bg-primary hover:text-white transition">
                                Edit
                            </a>
                            <a href="{{ route('admin.video.delete', $video->id) }}"
                               onclick="return confirm('Are you sure you want to delete this video?')"
                               class="px-3 py-1 text-sm border border-red-500 text-red-500 rounded hover:bg-red-500 hover:text-white transition">
                                Delete
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Add Video Modal -->
        <div class="modal fade" id="addVideoModal" tabindex="-1" aria-labelledby="addVideoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-xl shadow-lg dark:bg-gray-800 border-0">
                    
                    <form action="{{ route('video.add') }}" method="POST" class="p-4 flex flex-col gap-4">
                        @csrf
                        <div class="flex flex-col">
                            <label class="font-medium mb-1" for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-input rounded-lg p-2 border border-gray-300" required>
                        </div>
                        <div class="flex flex-col">
                            <label class="font-medium mb-1" for="category">Category</label>
                            <input type="text" name="category" id="category" class="form-input rounded-lg p-2 border border-gray-300" required>
                        </div>
                        <div class="flex flex-col">
                            <label class="font-medium mb-1" for="description">Description</label>
                            <textarea name="description" id="description" rows="3" class="form-input rounded-lg p-2 border border-gray-300" required></textarea>
                        </div>
                        <div class="flex flex-col">
                            <label class="font-medium mb-1" for="video_url">Video URL</label>
                            <input type="url" name="video_url" id="video_url" placeholder="https://www.youtube.com/embed/..."
                                   class="form-input rounded-lg p-2 border border-gray-300" required>
                        </div>
                        <div class="flex justify-end gap-2 mt-4">
                            <button type="button" class="px-4 py-2 rounded-lg bg-gray-400 text-white hover:opacity-90" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="px-4 py-2 rounded-lg bg-primary text-white hover:opacity-90">Save Video</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    </main>
</x-adminsidebar>
