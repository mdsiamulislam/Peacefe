<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('home_page_hero_image')->nullable();
            $table->text('home_page_hero_button_url')->nullable();
            $table->text('home_page_hero_button_text')->nullable();
            $table->text('home_page_title')->nullable();
            $table->text('home_page_description')->nullable();
            $table->text('home_page_section_1title')->nullable();
            $table->text('home_page_section_2title')->nullable();

            $table->text('about_page_journey_title')->nullable();
            $table->text('about_page_journey_description')->nullable();
            $table->text('about_page_mission_title')->nullable();
            $table->text('about_page_mission_description')->nullable();
            $table->text('about_page_vision_title')->nullable();
            $table->text('about_page_vision_description')->nullable();
            $table->text('about_page_story_title')->nullable();
            $table->text('about_page_story_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configs');
    }
};
