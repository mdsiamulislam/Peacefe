<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Video</title>
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
                        <a class="nav-link" href="/articles">Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/videos">Videos</a>
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

</html>