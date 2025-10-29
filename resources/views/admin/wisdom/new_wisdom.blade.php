<x-adminsidebar>
    <main class="flex-1 p-8 bg-gray-50 dark:bg-gray-900 min-h-screen">
        <div class="max-w-3xl mx-auto">
            <!-- Card -->
            <div class="bg-white dark:bg-gray-800 shadow-sm rounded-2xl overflow-hidden">
                <!-- Header -->
                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 flex justify-between items-center">
                    <h4 class="text-xl font-semibold text-primary">
                        {{ isset($wisdom) ? 'Edit Wisdom' : 'Add New Wisdom' }}
                    </h4>
                    <a href="{{ route('admin.wisdoms') }}" class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded hover:bg-gray-100 dark:hover:bg-gray-700 transition font-medium text-sm">
                        Back
                    </a>
                </div>

                <!-- Form -->
                <div class="px-6 py-6">
                    <form method="POST"
                        action="{{ isset($wisdom) ? route('admin.wisdom.update', ['id' => $wisdom->id]) : route('admin.wisdom.create') }}"
                        id="wisdomForm" class="space-y-4">
                        @csrf
                        @if(isset($wisdom))
                        @method('PUT')
                        @endif

                        <div>
                            <label for="quote" class="block font-medium text-gray-700 dark:text-gray-200 mb-1">Quote</label>
                            <textarea id="quote" name="content" rows="4"
                                class="w-full px-4 py-2 border rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200 focus:ring-2 focus:ring-primary focus:outline-none"
                                placeholder="Enter the wisdom quote..." required>{{ old('content', $wisdom->content ?? '') }}</textarea>
                        </div>

                        <div>
                            <label for="source" class="block font-medium text-gray-700 dark:text-gray-200 mb-1">Source</label>
                            <input type="text" id="source" name="author"
                                class="w-full px-4 py-2 border rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200 focus:ring-2 focus:ring-primary focus:outline-none"
                                placeholder="e.g., Prophet Muhammad (PBUH)" value="{{ old('author', $wisdom->author ?? '') }}" required>
                        </div>

                        <!-- Preview -->
                        <div>
                            <label class="block font-medium text-gray-700 dark:text-gray-200 mb-2">Preview</label>
                            <div class="bg-gray-100 dark:bg-gray-700 rounded-xl p-4">
                                <blockquote class="italic text-gray-800 dark:text-gray-200 mb-1" id="previewQuote">
                                    {{ old('content', $wisdom->content ?? 'Your quote will appear here...') }}
                                </blockquote>
                                <footer class="text-sm text-gray-500 dark:text-gray-400" id="previewSource">
                                    {{ old('author', $wisdom->author ?? 'Source') }}
                                </footer>
                            </div>
                        </div>

                        <!-- Buttons -->
                        <div class="flex gap-3">
                            <button type="submit" class="px-6 py-2 bg-primary text-white rounded-lg hover:opacity-90 transition font-medium">
                                {{ isset($wisdom) ? 'Update Wisdom' : 'Add Wisdom' }}
                            </button>
                            <a href="{{ route('admin.wisdoms') }}" class="px-6 py-2 border rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition font-medium">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Live Preview Script -->
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
    </main>
</x-adminsidebar>
