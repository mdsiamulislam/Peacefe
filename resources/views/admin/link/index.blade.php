<x-adminsidebar>

    <main class="flex-1 flex flex-col p-8 gap-6">
        <!-- PageHeading -->
        <div class="flex flex-wrap justify-between items-start gap-4">
            <div class="flex flex-col gap-2">
                <h1 class="text-text-light dark:text-text-dark text-3xl font-bold tracking-tight">Manage Link Page</h1>
                <p class="text-subtext-light dark:text-subtext-dark text-base">You can add or remove your page from here</p>
            </div>
            <!-- Add New Button -->
            <button type="button" data-bs-toggle="modal" data-bs-target="#linkModal"
                class="flex items-center gap-2 min-w-[84px] cursor-pointer justify-center rounded-lg h-12 px-5 bg-primary text-text-light text-base font-bold hover:opacity-90">
                <span class="material-symbols-outlined text-xl">add</span>
                <span>Add new</span>
            </button>
        </div>

        <!-- Links Table -->
        <div class="w-full @container">
            <div class="flex overflow-hidden rounded-xl border border-border-light dark:border-border-dark bg-background-light dark:bg-sidebar-dark">
                <table class="w-full">
                    <thead class="border-b border-border-light dark:border-border-dark">
                        <tr class="bg-sidebar-light/50 dark:bg-background-dark/50">
                            <th class="px-4 py-3 text-left text-subtext-light dark:text-subtext-dark w-1/5 text-sm font-medium uppercase tracking-wider">External URL</th>
                            <th class="px-4 py-3 text-left text-subtext-light dark:text-subtext-dark w-1/4 text-sm font-medium uppercase tracking-wider">Title</th>
                            <th class="px-4 py-3 text-left text-subtext-light dark:text-subtext-dark w-1/4 text-sm font-medium uppercase tracking-wider">Description</th>
                            <th class="px-4 py-3 text-center text-subtext-light dark:text-subtext-dark w-[120px] text-sm font-medium uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($links as $link)
                        <tr class="border-t border-border-light dark:border-border-dark">
                            <td class="px-4 py-3 text-sm text-subtext-light dark:text-subtext-dark break-words">{{ $link->url }}</td>
                            <td class="px-4 py-3 text-sm text-text-light dark:text-text-dark">{{ $link->title }}</td>
                            <td class="px-4 py-3 text-sm text-text-light dark:text-text-dark">{{ $link->description }}</td>
                            <td class="px-4 py-3 text-center">
                                <button onclick="location.href='{{ route('admin.links.delete', $link->id) }}'" class="flex items-center gap-1 text-primary text-sm font-bold transition-opacity hover:opacity-80 mx-auto">
                                    <span class="material-symbols-outlined text-lg">delete</span>
                                    <span>Delete</span>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Add Link Modal -->
        <div class="modal fade" id="linkModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-xl border-0 shadow-sm">

                    <form action="{{ route('admin.links.create') }}" method="POST">
                        @csrf
                        <div class="modal-body p-6 flex flex-col gap-4">
                            <label class="flex flex-col">
                                <span class="font-semibold pb-1">External URL</span>
                                <input type="url" name="url" placeholder="https://example.com" class="form-input rounded-lg p-2 border border-border-light" required>
                            </label>
                            <label class="flex flex-col">
                                <span class="font-semibold pb-1">Title</span>
                                <input type="text" name="title" class="form-input rounded-lg p-2 border border-border-light" required>
                            </label>
                            <label class="flex flex-col">
                                <span class="font-semibold pb-1">Description</span>
                                <textarea name="description" rows="2" class="form-input rounded-lg p-2 border border-border-light" required></textarea>
                            </label>
                        </div>
                        <div class="modal-footer flex justify-end gap-2 p-4">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="flex items-center gap-2 justify-center min-w-[100px] h-10 px-4 rounded-lg bg-primary text-text-light font-bold hover:opacity-90">
                                <span class="material-symbols-outlined text-lg">save</span>
                                <span>Save Link</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

</x-adminsidebar>