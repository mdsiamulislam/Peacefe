<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class HeroVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Clear old data first
        DB::table('herovideos')->truncate();

        $json = File::get(path: 'database/json/hero_video.json');
        $listOfHeroVideos = json_decode($json, true);

        foreach ($listOfHeroVideos as $videoData) {
            DB::table('herovideos')->insert([
                'title' => $videoData['title'],
                'description' => $videoData['description'],
                'url' => $videoData['url'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
