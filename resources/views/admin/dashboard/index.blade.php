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

</x-adminnav>