<x-adminnav>

    <body class="bg-light">
        <div class="container my-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Manage Videos</h2>
                <button class="btn btn-primary" onclick="window.location.href='{{route('new_video')}}'">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                    </svg>
                    Add New Video
                </button>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-sm h-100">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/Ea1gVO53lDY?si=jt7RveIIxIDfFdWa" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Similarities between Jesus and Muhammad</h5>
                            <p class="card-text text-muted">Explore the common ground and shared values in their teachings.</p>
                        </div>
                        <div class="card-footer bg-white border-top">
                            <button class="btn btn-sm btn-outline-primary me-2" onclick="editVideo(1)">Edit</button>
                            <button class="btn btn-sm btn-outline-danger" onclick="deleteVideo(1)">Delete</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-sm h-100">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/3h4b8j9XG2A?si=example2" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Understanding the Five Pillars of Islam</h5>
                            <p class="card-text text-muted">A deep dive into the fundamental beliefs and practices of Islam.</p>
                        </div>
                        <div class="card-footer bg-white border-top">
                            <button class="btn btn-sm btn-outline-primary me-2" onclick="editVideo(2)">Edit</button>
                            <button class="btn btn-sm btn-outline-danger" onclick="deleteVideo(2)">Delete</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-sm h-100">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/5d6c7e8f9g0?si=example3" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">The Life of Prophet Muhammad</h5>
                            <p class="card-text text-muted">An exploration of the life and teachings of the Prophet Muhammad.</p>
                        </div>
                        <div class="card-footer bg-white border-top">
                            <button class="btn btn-sm btn-outline-primary me-2" onclick="editVideo(3)">Edit</button>
                            <button class="btn btn-sm btn-outline-danger" onclick="deleteVideo(3)">Delete</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Delete Confirmation Modal -->
            <div class="modal fade" id="deleteModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Confirm Delete</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete this video? This action cannot be undone.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-danger" id="confirmDelete">Delete</button>
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
            <script>
                let deleteModal;
                let videoToDelete;

                document.addEventListener('DOMContentLoaded', function() {
                    deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
                });

                function editVideo(id) {
                    alert('Edit video ID: ' + id + '\n\nIn production, this would redirect to the edit page.');
                    // window.location.href = '/edit-video/' + id;
                }

                function deleteVideo(id) {
                    videoToDelete = id;
                    deleteModal.show();
                }

                document.getElementById('confirmDelete').addEventListener('click', function() {
                    alert('Video ID ' + videoToDelete + ' deleted successfully!');
                    deleteModal.hide();
                    // In production, send delete request to server
                    // Then remove the card from page or reload
                });
            </script>
    </body>
</x-adminnav>