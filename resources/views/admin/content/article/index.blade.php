<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Articles</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/articles">Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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
                            <tr>
                                <td>
                                    <img src="https://images.unsplash.com/photo-1512632578888-169bbbc64f33?w=100&h=100&fit=crop"
                                        class="rounded"
                                        width="60"
                                        height="60"
                                        alt="Article">
                                </td>
                                <td>
                                    <div class="fw-semibold">The Role of Women in Islam</div>
                                    <small class="text-muted">An examination of the status and rights...</small>
                                </td>
                                <td>Admin</td>
                                <td>2023-11-05</td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary me-1" onclick="editArticle(1)">
                                        Edit
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger" onclick="deleteArticle(1)">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="https://images.unsplash.com/photo-1591604466107-ec97de577aff?w=100&h=100&fit=crop"
                                        class="rounded"
                                        width="60"
                                        height="60"
                                        alt="Article">
                                </td>
                                <td>
                                    <div class="fw-semibold">Understanding Prayer in Islam</div>
                                    <small class="text-muted">A comprehensive guide to daily prayers...</small>
                                </td>
                                <td>Admin</td>
                                <td>2023-11-03</td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary me-1" onclick="editArticle(2)">
                                        Edit
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger" onclick="deleteArticle(2)">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="https://images.unsplash.com/photo-1542816417-0983c9c9ad53?w=100&h=100&fit=crop"
                                        class="rounded"
                                        width="60"
                                        height="60"
                                        alt="Article">
                                </td>
                                <td>
                                    <div class="fw-semibold">The Importance of Charity</div>
                                    <small class="text-muted">Exploring the concept of Zakat and Sadaqah...</small>
                                </td>
                                <td>Admin</td>
                                <td>2023-11-01</td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary me-1" onclick="editArticle(3)">
                                        Edit
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger" onclick="deleteArticle(3)">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <nav class="mt-4">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
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

        function editArticle(id) {
            alert('Edit article ID: ' + id + '\n\nIn production, this would redirect to the edit page.');
            // window.location.href = '/edit-article/' + id;
        }

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

</html>