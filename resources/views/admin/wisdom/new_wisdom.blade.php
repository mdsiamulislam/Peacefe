<x-adminnav>

    <body class="bg-light">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-sm">
                        <div class="card-header bg-white py-3">
                            <h4 class="mb-0">Add New Wisdom</h4>
                        </div>
                        <div class="card-body p-4">
                            <form
                                action="{{ route('admin.wisdom.create') }}"
                                method="POST"
                                id="wisdomForm">
                                @csrf
                                <div class="mb-3">
                                    <label for="quote" class="form-label">Quote</label>
                                    <textarea class="form-control" id="quote" name="content" rows="4" placeholder="Enter the wisdom quote..." required></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="source" class="form-label">Source</label>
                                    <input type="text" class="form-control" id="source" name="author" placeholder="e.g., Prophet Muhammad (PBUH)" required>
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
        </script>
    </body>
</x-adminnav>