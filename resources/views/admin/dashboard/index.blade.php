<x-adminnav>

    <main class="container">
        <div class="container-fluid py-5">
            <h3 class="mb-4 fw-bold">Admin Dashboard</h3>

            <div class="row g-4">
                <!-- Articles -->
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-body text-center py-4">
                            <div class="mb-3">
                                <i class="bi bi-journal-text fs-1 text-primary"></i>
                            </div>
                            <h5 class="fw-semibold mb-3">Manage Articles</h5>
                            <a href="{{ url('/admin/articles') }}" class="btn btn-primary w-100">Go to Articles</a>
                        </div>
                    </div>
                </div>

                <!-- Videos -->
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-body text-center py-4">
                            <div class="mb-3">
                                <i class="bi bi-play-circle fs-1 text-success"></i>
                            </div>
                            <h5 class="fw-semibold mb-3">Manage Videos</h5>
                            <a href="{{ url('/admin/videos') }}" class="btn btn-success w-100">Go to Videos</a>
                        </div>
                    </div>
                </div>

                <!-- Wisdom -->
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-body text-center py-4">
                            <div class="mb-3">
                                <i class="bi bi-lightbulb fs-1 text-info"></i>
                            </div>
                            <h5 class="fw-semibold mb-3">Manage Wisdom</h5>
                            <a href="{{ url('/admin/wisdoms') }}" class="btn btn-info text-white w-100">Go to Wisdom</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <body class="bg-light">

        <!-- TOAST: place at top of body -->
        <div class="position-fixed top-0 end-0 p-3" style="z-index: 1055">
            @if(session('success'))
            <div class="toast align-items-center text-bg-success border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
            @endif

            @if(session('error'))
            <div class="toast align-items-center text-bg-danger border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('error') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
            @endif
        </div>

        <div class="container">
            <!-- your existing admin form/content -->
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var toastElList = [].slice.call(document.querySelectorAll('.toast'))
                toastElList.map(function(toastEl) {
                    var toast = new bootstrap.Toast(toastEl, {
                        delay: 3000
                    })
                    toast.show()
                })
            })
        </script>

    </body>

</x-adminnav>