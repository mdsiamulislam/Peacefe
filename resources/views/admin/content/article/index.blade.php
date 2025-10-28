<x-adminnav>

    <body class="bg-light">
        <div class="container my-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Manage Articles</h2>
                <button class="btn btn-primary" onclick="window.location.href='{{ route('new_article') }}'">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                    </svg>
                    Add New Article
                </button>
            </div>

            <div class="card shadow-sm">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="articlesTable">
                                @foreach ($articles as $article)
                                <tr>
                                    <td>
                                        <img src="{{ $article->image_url }}"
                                            class="rounded"
                                            width="60"
                                            height="60"
                                            alt="Article">
                                    </td>
                                    <td>
                                        <div class="fw-semibold">{{ $article->title }}</div>
                                        <small class="text-muted">{{ $article->subtitle }}</small>
                                    </td>
                                    <td>{{ $article->author }}</td>
                                    <td>{{ $article->created_at }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary me-1" onclick="location.href='{{ route('admin.article.editview', ['id' => $article->id]) }}';">
                                            Edit
                                        </button>
                                        <button
                                            class="btn btn-sm btn-outline-danger"
                                            onclick="location.href='{{ route('admin.article.delete', ['id' => $article->id]) }}';">
                                            Delete
                                        </button>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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
                        Are you sure you want to delete this article? This action cannot be undone.
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
            let articleToDelete;

            document.addEventListener('DOMContentLoaded', function() {
                deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
            });

            function deleteArticle(id) {
                articleToDelete = id;
                deleteModal.show();
            }

            document.getElementById('confirmDelete').addEventListener('click', function() {
                alert('Article ID ' + articleToDelete + ' deleted successfully!');
                deleteModal.hide();
                // In production, send delete request to server
                // Then remove the row from table or reload the page
            });
        </script>
    </body>
</x-adminnav>