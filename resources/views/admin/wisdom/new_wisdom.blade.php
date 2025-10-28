<x-adminnav>

    <body class="bg-light">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-sm">
                        <div class="card-header bg-white py-3">
                            <h4 class="mb-0">{{ isset($wisdom) ? 'Edit Wisdom' : 'Add New Wisdom' }}</h4>
                        </div>
                        <div class="card-body p-4">
                            <form method="POST"
                                action="{{ isset($wisdom) ? route('admin.wisdom.update', ['id' => $wisdom->id]) : route('admin.wisdom.create') }}"
                                id="wisdomForm">
                                @csrf
                                @if(isset($wisdom))
                                @method('PUT')
                                @endif

                                <div class="mb-3">
                                    <label for="quote" class="form-label">Quote</label>
                                    <textarea class="form-control" id="quote" name="content" rows="4" placeholder="Enter the wisdom quote..." required>{{ old('content', $wisdom->content ?? '') }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="source" class="form-label">Source</label>
                                    <input type="text" class="form-control" id="source" name="author" placeholder="e.g., Prophet Muhammad (PBUH)" value="{{ old('author', $wisdom->author ?? '') }}" required>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Preview</label>
                                    <div class="card bg-light">
                                        <div class="card-body">
                                            <blockquote class="blockquote mb-0">
                                                <p id="previewQuote" class="fst-italic">{{ old('content', $wisdom->content ?? 'Your quote will appear here...') }}</p>
                                                <footer class="blockquote-footer mt-2" id="previewSource">{{ old('author', $wisdom->author ?? 'Source') }}</footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex gap-2">
                                    <button type="submit" class="btn btn-primary">{{ isset($wisdom) ? 'Update Wisdom' : 'Add Wisdom' }}</button>
                                    <a href="{{ route('admin.wisdoms') }}" class="btn btn-secondary">Cancel</a>
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