<x-adminsidebar>
    <div class="p-6 max-w-4xl mx-auto">
        <div class="bg-white dark:bg-gray-800 shadow rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                <h4 class="text-xl font-semibold">{{ isset($article) ? 'Edit Article' : 'Add New Article' }}</h4>
            </div>
            <div class="p-6">
                <form
                    method="POST"
                    action="{{ isset($article) ? route('admin.article.update', ['id' => $article->id]) : route('admin.article.create') }}"
                    id="articleForm"
                    class="flex flex-col gap-4"
                >
                    @csrf
                    @if(isset($article))
                        @method('PUT')
                    @endif

                    <div class="flex flex-col">
                        <label for="title" class="font-medium mb-1">Title</label>
                        <input type="text" id="title" name="title" placeholder="Enter article title" value="{{ old('title', $article->title ?? '') }}"
                               class="form-input rounded-lg border border-gray-300 p-2" required>
                    </div>

                    <div class="flex flex-col">
                        <label for="author" class="font-medium mb-1">Author</label>
                        <input type="text" id="author" name="author" placeholder="Enter author name" value="{{ old('author', $article->author ?? 'Admin') }}"
                               class="form-input rounded-lg border border-gray-300 p-2" required>
                    </div>

                    @if(isset($article))
                        <input type="hidden" name="created_at" value="{{ $article->created_at }}">
                    @endif

                    <div class="flex flex-col">
                        <label for="subtitle" class="font-medium mb-1">Summary</label>
                        <textarea id="subtitle" name="subtitle" rows="3" placeholder="Enter article summary"
                                  class="form-input rounded-lg border border-gray-300 p-2" required>{{ old('subtitle', $article->subtitle ?? '') }}</textarea>
                    </div>

                    <div class="flex flex-col">
                        <label for="image_url" class="font-medium mb-1">Image URL</label>
                        <input type="url" id="image_url" name="image_url" placeholder="https://example.com/image.jpg"
                               value="{{ old('image_url', $article->image_url ?? '') }}"
                               class="form-input rounded-lg border border-gray-300 p-2" required>
                    </div>

                    <div class="flex flex-col">
                        <label for="content" class="font-medium mb-1">Content</label>
                        <textarea id="content" name="content" rows="10" placeholder="Write your article content here..."
                                  class="form-input rounded-lg border border-gray-300 p-2" required>{{ old('content', $article->content ?? '') }}</textarea>
                    </div>

                    <div class="flex gap-2 mt-4">
                        <button type="submit" class="bg-primary text-white px-4 py-2 rounded hover:opacity-90">
                            {{ isset($article) ? 'Update Article' : 'Publish Article' }}
                        </button>
                        <button type="button" class="bg-gray-400 text-white px-4 py-2 rounded hover:opacity-90"
                                onclick="window.location.href='{{ route('admin.articles') }}'">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-adminsidebar>
