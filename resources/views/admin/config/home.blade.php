<x-adminsidebar>

    <main class="flex-1 flex flex-col p-8 gap-6"> <!-- PageHeading -->
        <div class="flex flex-wrap justify-between items-start gap-4">
            <div class="flex flex-col gap-2">
                <h1 class="text-text-light dark:text-text-dark text-3xl font-bold tracking-tight">Home Page Configuration</h1>
                <p class="text-subtext-light dark:text-subtext-dark text-base"> Manage useful resources and quick links displayed on the home page. </p>
            </div>
        </div> 
        
        <!-- Add Link Modal -->
        <div class="modal fade" id="linkModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-xl border-0 shadow-sm">
                    <form action="{{ route('admin.home.config.save') }}" method="POST">
                        @csrf
                        <div class="modal-body p-6 flex flex-col gap-4">
                            <label class="flex flex-col">
                                <span class="font-semibold pb-1">Hero Image</span>
                                <input
                                    type="url"
                                    name="home_page_hero_image"
                                    placeholder="https://example.com/image.jpg"
                                    class="form-input rounded-lg p-2 border border-border-light"
                                    value="{{ old('home_page_hero_image', $config->home_page_hero_image ?? '') }}"
                                    required>
                            </label>

                            <label class="flex flex-col">
                                <span class="font-semibold pb-1">Hero Button URL</span>
                                <input
                                    type="url"
                                    name="home_page_hero_button_url"
                                    class="form-input rounded-lg p-2 border border-border-light"
                                    value="{{ old('home_page_hero_button_url', $config->home_page_hero_button_url ?? '') }}"
                                    required>
                            </label>

                            <label class="flex flex-col">
                                <span class="font-semibold pb-1">Hero Button Text</span>
                                <input
                                    type="text"
                                    name="home_page_hero_button_text"
                                    class="form-input rounded-lg p-2 border border-border-light"
                                    value="{{ old('home_page_hero_button_text', $config->home_page_hero_button_text ?? '') }}"
                                    required>
                            </label>

                            <label class="flex flex-col">
                                <span class="font-semibold pb-1">Title</span>
                                <input
                                    type="text"
                                    name="home_page_title"
                                    class="form-input rounded-lg p-2 border border-border-light"
                                    value="{{ old('home_page_title', $config->home_page_title ?? '') }}"
                                    required>
                            </label>

                            <label class="flex flex-col">
                                <span class="font-semibold pb-1">Description</span>
                                <textarea
                                    name="home_page_description"
                                    rows="2"
                                    class="form-input rounded-lg p-2 border border-border-light"
                                    required>{{ old('home_page_description', $config->home_page_description ?? '') }}</textarea>
                            </label>

                            <label class="flex flex-col">
                                <span class="font-semibold pb-1">Section 1 Title</span>
                                <input
                                    type="text"
                                    name="home_page_section_1title"
                                    class="form-input rounded-lg p-2 border border-border-light"
                                    value="{{ old('home_page_section_1title', $config->home_page_section_1title ?? '') }}">
                            </label>

                            <label class="flex flex-col">
                                <span class="font-semibold pb-1">Section 2 Title</span>
                                <input
                                    type="text"
                                    name="home_page_section_2title"
                                    class="form-input rounded-lg p-2 border border-border-light"
                                    value="{{ old('home_page_section_2title', $config->home_page_section_2title ?? '') }}">
                            </label>
                        </div>

                        <div class="modal-footer flex justify-end gap-2 p-4">
                            <button
                                type="submit"
                                class="flex items-center gap-2 justify-center min-w-[100px] h-10 px-4 rounded-lg bg-primary text-text-light font-bold hover:opacity-90">
                                <span class="material-symbols-outlined text-lg">save</span>
                                <span>Save Configuration</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
        <!-- About Page Configuration -->
<main class="flex-1 flex flex-col p-8 gap-6">
    <div class="flex flex-wrap justify-between items-start gap-4">
        <div class="flex flex-col gap-2">
            <h1 class="text-text-light dark:text-text-dark text-3xl font-bold tracking-tight">About Page Configuration</h1>
            <p class="text-subtext-light dark:text-subtext-dark text-base">
                Manage the content displayed on the About page. Team section is not configurable here.
            </p>
        </div>
    </div>

    <!-- Add About Section Modal -->
    <div class="modal fade" id="aboutModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-xl border-0 shadow-sm">

                <form action="{{ route('admin.about.config.save') }}" method="POST">
                    @csrf
                    <div class="modal-body p-6 flex flex-col gap-4">

                        <label class="flex flex-col">
                            <span class="font-semibold pb-1">Journey Title</span>
                            <input type="text" name="about_page_journey_title"
                                class="form-input rounded-lg p-2 border border-border-light"
                                value="{{ old('about_page_journey_title', $config->about_page_journey_title ?? '') }}" required>
                        </label>

                        <label class="flex flex-col">
                            <span class="font-semibold pb-1">Journey Description</span>
                            <textarea name="about_page_journey_description" rows="3"
                                class="form-input rounded-lg p-2 border border-border-light"
                                required>{{ old('about_page_journey_description', $config->about_page_journey_description ?? '') }}</textarea>
                        </label>

                        <label class="flex flex-col">
                            <span class="font-semibold pb-1">Mission Title</span>
                            <input type="text" name="about_page_mission_title"
                                class="form-input rounded-lg p-2 border border-border-light"
                                value="{{ old('about_page_mission_title', $config->about_page_mission_title ?? '') }}" required>
                        </label>

                        <label class="flex flex-col">
                            <span class="font-semibold pb-1">Mission Description</span>
                            <textarea name="about_page_mission_description" rows="2"
                                class="form-input rounded-lg p-2 border border-border-light"
                                required>{{ old('about_page_mission_description', $config->about_page_mission_description ?? '') }}</textarea>
                        </label>

                        <label class="flex flex-col">
                            <span class="font-semibold pb-1">Vision Title</span>
                            <input type="text" name="about_page_vision_title"
                                class="form-input rounded-lg p-2 border border-border-light"
                                value="{{ old('about_page_vision_title', $config->about_page_vision_title ?? '') }}" required>
                        </label>

                        <label class="flex flex-col">
                            <span class="font-semibold pb-1">Vision Description</span>
                            <textarea name="about_page_vision_description" rows="2"
                                class="form-input rounded-lg p-2 border border-border-light"
                                required>{{ old('about_page_vision_description', $config->about_page_vision_description ?? '') }}</textarea>
                        </label>

                        <label class="flex flex-col">
                            <span class="font-semibold pb-1">Story Title</span>
                            <input type="text" name="about_page_story_title"
                                class="form-input rounded-lg p-2 border border-border-light"
                                value="{{ old('about_page_story_title', $config->about_page_story_title ?? '') }}" required>
                        </label>

                        <label class="flex flex-col">
                            <span class="font-semibold pb-1">Story Description</span>
                            <textarea name="about_page_story_description" rows="4"
                                class="form-input rounded-lg p-2 border border-border-light"
                                required>{{ old('about_page_story_description', $config->about_page_story_description ?? '') }}</textarea>
                        </label>

                    </div>

                    <div class="modal-footer flex justify-end gap-2 p-4">
                        <button type="submit"
                            class="flex items-center gap-2 justify-center min-w-[120px] h-10 px-4 rounded-lg bg-primary text-text-light font-bold hover:opacity-90">
                            <span class="material-symbols-outlined text-lg">save</span>
                            <span>Save Configuration</span>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</main>



    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

</x-adminsidebar>