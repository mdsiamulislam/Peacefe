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
                <div class="col-md-6">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <blockquote class="blockquote mb-3">
                                <p class="fst-italic">"The best among you are those who have the best manners and character."</p>
                                <footer class="blockquote-footer">Prophet (PBUH)</footer>
                            </blockquote>
                        </div>
                        <div class="card-footer bg-white border-top">
                            <button class="btn btn-sm btn-outline-primary me-2" onclick="editWisdom(1)">Edit</button>
                            <button class="btn btn-sm btn-outline-danger" onclick="deleteWisdom(1)">Delete</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <blockquote class="blockquote mb-3">
                                <p class="fst-italic">"Seek knowledge from the cradle to the grave."</p>
                                <footer class="blockquote-footer">Muhammad (PBUH)</footer>
                            </blockquote>
                        </div>
                        <div class="card-footer bg-white border-top">
                            <button class="btn btn-sm btn-outline-primary me-2" onclick="editWisdom(2)">Edit</button>
                            <button class="btn btn-sm btn-outline-danger" onclick="deleteWisdom(2)">Delete</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <blockquote class="blockquote mb-3">
                                <p class="fst-italic">"The ink of the scholar is more sacred than the blood of the martyr."</p>
                                <footer class="blockquote-footer">(PBUH)</footer>
                            </blockquote>
                        </div>
                        <div class="card-footer bg-white border-top">
                            <button class="btn btn-sm btn-outline-primary me-2" onclick="editWisdom(3)">Edit</button>
                            <button class="btn btn-sm btn-outline-danger" onclick="deleteWisdom(3)">Delete</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <blockquote class="blockquote mb-3">
                                <p class="fst-italic">"Kindness is a mark of faith, and whoever is not kind has no faith."</p>
                                <footer class="blockquote-footer">Prophet Muhammad (PBUH)</footer>
                            </blockquote>
                        </div>
                        <div class="card-footer bg-white border-top">
                            <button class="btn btn-sm btn-outline-primary me-2" onclick="editWisdom(4)">Edit</button>
                            <button class="btn btn-sm btn-outline-danger" onclick="deleteWisdom(4)">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
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
                        Are you sure you want to delete this wisdom? This action cannot be undone.
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
            let wisdomToDelete;

            document.addEventListener('DOMContentLoaded', function() {
                deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
            });

            function editWisdom(id) {
                alert('Edit wisdom ID: ' + id + '\n\nIn production, this would redirect to the edit page.');
                // window.location.href = '/edit-wisdom/' + id;
            }

            function deleteWisdom(id) {
                wisdomToDelete = id;
                deleteModal.show();
            }

            document.getElementById('confirmDelete').addEventListener('click', function() {
                alert('Wisdom ID ' + wisdomToDelete + ' deleted successfully!');
                deleteModal.hide();
                // In production, send delete request to server
                // Then remove the card from page or reload
            });
        </script>
    </body>
</x-adminnav>