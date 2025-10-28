<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\wisdom;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File as FacadesFile;

class WisdomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Clear old data first
        DB::table('wisdoms')->truncate();

        $json = FacadesFile::get(path: 'database/json/wisdoms.json');
        $listOfWisdoms = json_decode($json, true);
        foreach ($listOfWisdoms as $wisdomData) {
            Wisdom::create([
                'content' => $wisdomData['content'],
                'author' => $wisdomData['author'],
            ]);
        }
    }
}
