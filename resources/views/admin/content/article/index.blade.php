<x-adminsidebar>
    <div class="p-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">Manage Articles</h2>
            <button class="flex items-center gap-2 bg-primary text-white px-4 py-2 rounded-lg hover:opacity-90"
                    onclick="window.location.href='{{ route('new_article') }}'">
                <span class="material-symbols-outlined">add</span>
                Add New Article
            </button>
        </div>

        <div class="overflow-x-auto shadow rounded-lg bg-white dark:bg-gray-800">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Image</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Title</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Author</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                    @foreach ($articles as $article)
                    <tr>
                        <td class="px-6 py-4">
                            <img src="{{ $article->image_url }}" class="rounded w-12 h-12 object-cover" alt="Article">
                        </td>
                        <td class="px-6 py-4">
                            <div class="font-semibold">{{ $article->title }}</div>
                            <div class="text-gray-500 text-sm">{{ $article->subtitle }}</div>
                        </td>
                        <td class="px-6 py-4">{{ $article->author }}</td>
                        <td class="px-6 py-4">{{ $article->created_at }}</td>
                        <td class="px-6 py-4 flex gap-2">
                            <button class="px-2 py-1 bg-blue-500 text-white rounded hover:bg-blue-600"
                                    onclick="location.href='{{ route('admin.article.editview', ['id' => $article->id]) }}';">
                                Edit
                            </button>
                            <button class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600"
                                    onclick="deleteArticle({{ $article->id }})">
                                Delete
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Delete Modal -->
        <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden" id="deleteModal">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 w-96">
                <h3 class="text-lg font-bold mb-4">Confirm Delete</h3>
                <p class="mb-4">Are you sure you want to delete this article? This action cannot be undone.</p>
                <div class="flex justify-end gap-2">
                    <button class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400" onclick="closeDeleteModal()">Cancel</button>
                    <button class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600" onclick="confirmDelete()">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        let articleToDelete = null;

        function deleteArticle(id) {
            articleToDelete = id;
            document.getElementById('deleteModal').classList.remove('hidden');
        }

        function closeDeleteModal() {
            document.getElementById('deleteModal').classList.add('hidden');
        }

        function confirmDelete() {
            alert('Article ID ' + articleToDelete + ' deleted successfully!');
            closeDeleteModal();
            // TODO: send delete request to server
        }
    </script>
</x-adminsidebar>
