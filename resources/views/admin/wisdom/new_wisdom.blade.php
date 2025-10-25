<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Wisdom</title>
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
                        <a class="nav-link" href="/videos">Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/wisdom">Wisdom</a>
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
                        <h4 class="mb-0">Add New Wisdom</h4>
                    </div>
                    <div class="card-body p-4">
                        <form id="wisdomForm">
                            <div class="mb-3">
                                <label for="quote" class="form-label">Quote</label>
                                <textarea class="form-control" id="quote" rows="4" placeholder="Enter the wisdom quote..." required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="source" class="form-label">Source</label>
                                <input type="text" class="form-control" id="source" placeholder="e.g., Prophet Muhammad (PBUH)" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Preview</label>
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <blockquote class="blockquote mb-0">
                                            <p id="previewQuote" class="fst-italic">Your quote will appear here...</p>
                                            <footer class="blockquote-footer mt-2" id="previewSource">Source</footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">Add Wisdom</button>
                                <button type="button" class="btn btn-secondary" onclick="window.location.href='/wisdom'">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        const quoteInput = document.getElementById('quote');
        const sourceInput = document.getElementById('source');
        const previewQuote = document.getElementById('previewQuote');
        const previewSource = document.getElementById('previewSource');

        quoteInput.addEventListener('input', function() {
            previewQuote.textContent = this.value || 'Your quote will appear here...';
        });

        sourceInput.addEventListener('input', function() {
            previewSource.textContent = this.value || 'Source';
        });

        document.getElementById('wisdomForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const wisdomData = {
                quote: document.getElementById('quote').value,
                source: document.getElementById('source').value
            };

            console.log('Wisdom Data:', wisdomData);
            alert('Wisdom added successfully!\n\nIn production, this would save to your database.');

            // Redirect to wisdom list
            // window.location.href = '/wisdom';
        });
    </script>
</body>

</html>