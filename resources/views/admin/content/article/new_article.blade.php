<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Article</title>
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
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-white py-3">
                        <h4 class="mb-0">Add New Article</h4>
                    </div>
                    <div class="card-body p-4">
                        <form id="articleForm">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" placeholder="Enter article title" required>
                            </div>

                            <div class="mb-3">
                                <label for="author" class="form-label">Author</label>
                                <input type="text" class="form-control" id="author" placeholder="Enter author name" value="Admin" required>
                            </div>

                            <div class="mb-3">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" class="form-control" id="date" required>
                            </div>

                            <div class="mb-3">
                                <label for="summary" class="form-label">Summary</label>
                                <textarea class="form-control" id="summary" rows="3" placeholder="Enter article summary" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="image_url" class="form-label">Image URL</label>
                                <input type="url" class="form-control" id="image_url" placeholder="https://example.com/image.jpg" required>
                            </div>

                            <div class="mb-3">
                                <label for="content" class="form-label">Content</label>
                                <textarea class="form-control" id="content" rows="10" placeholder="Write your article content here..." required></textarea>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">Publish Article</button>
                                <button type="button" class="btn btn-secondary" onclick="window.location.href='/articles'">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        // Set today's date as default
        document.getElementById('date').valueAsDate = new Date();

        document.getElementById('articleForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const articleData = {
                title: document.getElementById('title').value,
                author: document.getElementById('author').value,
                date: document.getElementById('date').value,
                summary: document.getElementById('summary').value,
                image_url: document.getElementById('image_url').value,
                content: document.getElementById('content').value
            };

            console.log('Article Data:', articleData);
            alert('Article published successfully!\n\nIn production, this would save to your database.');

            // Redirect to articles list
            // window.location.href = '/articles';
        });
    </script>
</body>

</html>