<x-adminnav>

    <body class="bg-light">
        <div class="container my-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold">Manage Wisdom</h2>
                <a href="{{ route('new_wisdom') }}" class="btn btn-primary d-flex align-items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                    </svg>
                    Add New Wisdom
                </a>
            </div>

            <div class="row g-4">
                @foreach($wisdoms as $wisdom)
                <div class="col-md-6">
                    <div class="card shadow-sm h-100 border-0 rounded-4">
                        <div class="card-body">
                            <blockquote class="blockquote mb-4">
                                <p class="fst-italic fs-5">{{ $wisdom->content }}</p>
                                <footer class="blockquote-footer text-muted">{{ $wisdom->author }}</footer>
                            </blockquote>
                        </div>
                        <div class="card-footer bg-white border-top d-flex justify-content-end gap-2">
                            <a href="{{ route('admin.wisdom.edit', ['id' => $wisdom->id]) }}" class="btn btn-sm btn-outline-primary fw-semibold">
                                Edit
                            </a>
                            <a href="{{ route('admin.wisdom.delete', ['id' => $wisdom->id]) }}" class="btn btn-sm btn-outline-danger fw-semibold"
                                onclick="return confirm('Are you sure you want to delete this wisdom?');">
                                Delete
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    </body>
</x-adminnav>