<x-adminnav>

    <body class="bg-light">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                        <!-- Header -->
                        <div class="card-header bg-white py-3 border-bottom d-flex justify-content-between align-items-center">
                            <h4 class="mb-0 fw-semibold text-primary">Edit Video</h4>
                            <a href="{{ route('admin.videos') }}" class="btn btn-sm btn-outline-secondary">
                                <i class="bi bi-arrow-left"></i> Back
                            </a>
                        </div>

                        <!-- Form Body -->
                        <div class="card-body p-4 bg-light">
                            <form
                                action="{{ route('admin.video.update', $video->id) }}"
                                method="POST"
                                id="videoForm"
                                class="needs-validation"
                                novalidate>
                                @csrf
                                @method('PUT')

                                <!-- Title -->
                                <div class="mb-3">
                                    <label for="title" class="form-label fw-semibold">Title</label>
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        id="title"
                                        name="title"
                                        placeholder="Enter video title"
                                        value="{{ old('title', $video->title) }}"
                                        required>
                                    <div class="invalid-feedback">Please enter a title.</div>
                                </div>

                                <!-- Category -->
                                <div class="mb-3">
                                    <label for="category" class="form-label fw-semibold">Category</label>
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        id="category"
                                        name="category"
                                        placeholder="Enter video category"
                                        value="{{ old('category', $video->category) }}"
                                        required>
                                    <div class="invalid-feedback">Please enter a category.</div>
                                </div>

                                <!-- Description -->
                                <div class="mb-3">
                                    <label for="description" class="form-label fw-semibold">Description</label>
                                    <textarea
                                        class="form-control"
                                        id="description"
                                        name="description"
                                        rows="4"
                                        placeholder="Enter video description"
                                        required>{{ old('description', $video->description) }}</textarea>
                                    <div class="invalid-feedback">Please enter a description.</div>
                                </div>

                                <!-- Video URL -->
                                <div class="mb-3">
                                    <label for="url" class="form-label fw-semibold">YouTube Embed URL</label>
                                    <input
                                        type="url"
                                        class="form-control form-control-lg"
                                        id="url"
                                        name="video_url"
                                        placeholder="https://www.youtube.com/embed/VIDEO_ID"
                                        value="{{ old('video_url', $video->video_url) }}"
                                        required>
                                    <div class="form-text text-muted">
                                        Example: <code>https://www.youtube.com/embed/VIDEO_ID</code>
                                    </div>
                                    <div class="invalid-feedback">Please enter a valid YouTube embed URL.</div>
                                </div>

                                <!-- Preview -->
                                <div class="mb-4">
                                    <label class="form-label fw-semibold">Preview</label>
                                    <div class="ratio ratio-16x9 bg-dark rounded overflow-hidden shadow-sm">
                                        <iframe
                                            id="preview"
                                            src="{{ $video->video_url }}"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>

                                <!-- Buttons -->
                                <div class="d-flex gap-3">
                                    <button type="submit" class="btn btn-primary px-4">
                                        <i class="bi bi-save"></i> Update Video
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary px-4"
                                        onclick="window.location.href='{{ route('admin.videos') }}'">
                                        <i class="bi bi-x-circle"></i> Cancel
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    </body>
</x-adminnav>