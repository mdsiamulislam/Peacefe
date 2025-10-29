<x-adminsidebar>
    <main class="flex-1 p-8 bg-gray-50 dark:bg-gray-900 min-h-screen">
        <div class="max-w-5xl mx-auto">
            <!-- Header -->
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-primary">Manage Wisdom</h2>
                <a href="{{ route('new_wisdom') }}" class="flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-lg hover:opacity-90 transition">
                    <span class="material-symbols-outlined">add</span> Add New Wisdom
                </a>
            </div>

            <!-- Wisdom Cards -->
            <div class="grid md:grid-cols-2 gap-6">
                @foreach($wisdoms as $wisdom)
                <div class="bg-white dark:bg-gray-800 shadow-sm rounded-xl overflow-hidden border border-gray-200 dark:border-gray-700">
                    <div class="p-4">
                        <blockquote class="text-gray-700 dark:text-gray-200 italic text-lg">
                            "{{ $wisdom->content }}"
                        </blockquote>
                        <footer class="mt-2 text-sm text-gray-500 dark:text-gray-400">— {{ $wisdom->author }}</footer>
                    </div>
                    <div class="flex justify-end gap-2 p-3 border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900">
                        <a href="{{ route('admin.wisdom.edit', ['id' => $wisdom->id]) }}" class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded hover:bg-gray-100 dark:hover:bg-gray-700 transition font-medium">
                            Edit
                        </a>
                        <a href="{{ route('admin.wisdom.delete', ['id' => $wisdom->id]) }}" onclick="return confirm('Are you sure you want to delete this wisdom?');" class="px-3 py-1 border border-red-500 text-red-600 rounded hover:bg-red-50 dark:hover:bg-red-700 transition font-medium">
                            Delete
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    </main>
</x-adminsidebar>
