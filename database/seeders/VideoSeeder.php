<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\video;
use Illuminate\Support\Facades\File;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path: 'database/json/videos.json');
        $listOfVideos = json_decode($json, true);

        foreach ($listOfVideos as $videoData) {
            Video::create(
                [
                    'title' => $videoData['title'],
                    'category' => $videoData['category'],
                    'description' => $videoData['description'],
                    'video_url' => $videoData['url'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
