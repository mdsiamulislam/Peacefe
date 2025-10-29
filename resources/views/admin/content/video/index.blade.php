<x-adminnav>

    <body class="bg-light">
        <div class="container my-5">
            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold text-primary">Manage Videos</h2>
                <button class="btn btn-primary d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#addVideoModal">
                    <i class="bi bi-plus-lg"></i> Add New Video
                </button>
            </div>

            <!-- Video Grid -->
            <div class="row g-4">
                @foreach ($videos as $video)
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-sm h-100 border-0 rounded-4 overflow-hidden hover-shadow">
                        <div class="ratio ratio-16x9">
                            <iframe src="{{ $video->video_url }}" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $video->title }}</h5>
                            <span class="badge bg-secondary mb-2">{{ $video->category }}</span>
                            <p class="card-text text-muted" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                {{ $video->description }}
                            </p>

                        </div>
                        <div class="card-footer bg-white border-top d-flex justify-content-between">
                            <a href="{{ route('admin.video.edit', $video->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                            <a href="{{ route('admin.video.delete', $video->id) }}" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Add Video Modal -->
        <div class="modal fade" id="addVideoModal" tabindex="-1" aria-labelledby="addVideoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-0 shadow-sm rounded-4">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="addVideoModalLabel">Add New Video</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('video.add') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="title" class="form-label fw-semibold">Title</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label fw-semibold">Category</label>
                                <input type="text" class="form-control" id="category" name="category" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label fw-semibold">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="video_url" class="form-label fw-semibold">Video URL</label>
                                <input type="url" class="form-control" id="video_url" name="video_url" placeholder="https://www.youtube.com/embed/..." required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save Video</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

        <style>
            /* hover effect for cards */
            .hover-shadow:hover {
                transform: translateY(-4px);
                transition: 0.3s;
                box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2);
            }
        </style>
    </body>
</x-adminnav>