<x-adminnav>

    <body class="bg-light">
        <div class="container my-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Manage Wisdom</h2>
                <button class="btn btn-primary" onclick="window.location='{{ route('new_wisdom') }}'">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                    </svg>
                    Add New Wisdom
                </button>
            </div>

            <div class="row g-4">
                @foreach($wisdoms as $wisdom)
                <div class="col-md-6">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <blockquote class="blockquote mb-3">
                                <p class="fst-italic">{{ $wisdom->content }}</p>
                                <footer class="blockquote-footer">{{ $wisdom->author }}</footer>
                            </blockquote>
                        </div>
                        <div class="card-footer bg-white border-top d-flex justify-content-end gap-2">
                            <button class="btn btn-sm btn-outline-primary">Edit</button>
                            <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $wisdom->id }}">Delete</button>
                        </div>
                    </div>
                </div>

                <!-- Delete Confirmation Modal for each wisdom -->
                <div class="modal fade" id="deleteModal{{ $wisdom->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $wisdom->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel{{ $wisdom->id }}">Confirm Delete</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete this wisdom? This action cannot be undone.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <a href="{{ route('admin.wisdom.delete', ['id' => $wisdom->id]) }}" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    </body>
</x-adminnav>