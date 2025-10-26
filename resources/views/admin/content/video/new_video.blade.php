<x-adminnav>

    <body class="bg-light">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-sm">
                        <div class="card-header bg-white py-3">
                            <h4 class="mb-0">Add New Video</h4>
                        </div>
                        <div class="card-body p-4">
                            <form id="videoForm">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" placeholder="Enter video title" required>
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" rows="3" placeholder="Enter video description" required></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="url" class="form-label">YouTube Embed URL</label>
                                    <input type="url" class="form-control" id="url" placeholder="https://www.youtube.com/embed/VIDEO_ID" required>
                                    <div class="form-text">Enter the YouTube embed URL (e.g., https://www.youtube.com/embed/VIDEO_ID)</div>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Preview</label>
                                    <div class="ratio ratio-16x9 bg-secondary">
                                        <iframe id="preview" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>

                                <div class="d-flex gap-2">
                                    <button type="submit" class="btn btn-primary">Add Video</button>
                                    <button type="button" class="btn btn-secondary" onclick="window.location.href='/videos'">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
        <script>
            const urlInput = document.getElementById('url');
            const preview = document.getElementById('preview');

            urlInput.addEventListener('input', function() {
                preview.src = this.value;
            });

            document.getElementById('videoForm').addEventListener('submit', function(e) {
                e.preventDefault();

                const videoData = {
                    title: document.getElementById('title').value,
                    description: document.getElementById('description').value,
                    url: document.getElementById('url').value
                };

                console.log('Video Data:', videoData);
                alert('Video added successfully!\n\nIn production, this would save to your database.');

                // Redirect to videos list
                // window.location.href = '/videos';
            });
        </script>
    </body>
</x-adminnav>