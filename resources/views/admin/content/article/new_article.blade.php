<x-adminnav>

    <body class="bg-light">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-sm">
                        <div class="card-header bg-white py-3">
                            <h4 class="mb-0">{{ isset($article) ? 'Edit Article' : 'Add New Article' }}</h4>
                        </div>
                        <div class="card-body p-4">
                            <form
                                method="POST"
                                action="{{ isset($article) ? route('admin.article.update', ['id' => $article->id]) : route('admin.article.create') }}"
                                id="articleForm">
                                @csrf
                                @if(isset($article))
                                @method('PUT')
                                @endif

                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter article title" value="{{ old('title', $article->title ?? '') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="author" class="form-label">Author</label>
                                    <input type="text" class="form-control" id="author" name="author" placeholder="Enter author name" value="{{ old('author', $article->author ?? 'Admin') }}" required>
                                </div>

                                <!-- created_at hidden, auto handled in controller -->
                                @if(isset($article))
                                <input type="hidden" name="created_at" value="{{ $article->created_at }}">
                                @endif

                                <div class="mb-3">
                                    <label for="subtitle" class="form-label">Summary</label>
                                    <textarea class="form-control" id="subtitle" name="subtitle" rows="3" placeholder="Enter article summary" required>{{ old('subtitle', $article->subtitle ?? '') }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="image_url" class="form-label">Image URL</label>
                                    <input type="url" class="form-control" id="image_url" name="image_url" placeholder="https://example.com/image.jpg" value="{{ old('image_url', $article->image_url ?? '') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="content" class="form-label">Content</label>
                                    <textarea class="form-control" id="content" name="content" rows="10" placeholder="Write your article content here..." required>{{ old('content', $article->content ?? '') }}</textarea>
                                </div>

                                <div class="d-flex gap-2">
                                    <button type="submit" class="btn btn-primary">{{ isset($article) ? 'Update Article' : 'Publish Article' }}</button>
                                    <button type="button" class="btn btn-secondary" onclick="window.location.href='/articles'">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    </body>
</x-adminnav>