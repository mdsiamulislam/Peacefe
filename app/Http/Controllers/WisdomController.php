<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WisdomController extends Controller
{
    public function showWisdom()
    {
        $listOfVideos = DB::table('herovideos')->get();
        $wisdoms = DB::table('wisdoms')->get();

        $defaultConfig = [
            'home_page_hero_image' => 'default_hero.jpg', // https://lh3.googleusercontent.com/aida-public/AB6AXuCVzxYOgPgWJ5fJ07IK546lTFwF3IXxPg4sdCY5JXgvQuhQXnWVhyihcOJApAZvaeZ1NicTBfpz32EmLylgUl4m-fiKedcuPp5ynD9YKi6-LFfkPxNbLdcl2n9sqPZdG0xx5yLswmR3L4aNFuJHhUHA-euKKQ8sLi7oula2LA9CIwxHfq85uAqM7D42tgYcU2c7tCRWhOkiG35XmaLlIPZphKWus8A7NLQbFtNn0lmyRvT9tG4fs-K1GYlPf-WVWmohNtkXGx_GJaG-
            'home_page_hero_button_url' => '#',
            'home_page_hero_button_text' => 'Defult Button Text',
            'home_page_title' => 'Demo Title Gose here',
            'home_page_description' => 'Demo Description Go here',
            'home_page_section_1title' => 'dgsg',
            'home_page_section_2title' => 'dgsg',
            'about_page_journey_title' => null,
            'about_page_journey_description' => null,
            'about_page_mission_title' => null,
            'about_page_mission_description' => null,
            'about_page_vision_title' => null,
            'about_page_vision_description' => null,
            'about_page_story_title' => null,
            'about_page_story_description' => null,
        ];

        $config = DB::table('configs')->first();

        if (!$config) {
            $config = (object) $defaultConfig; // cast array to object
        }

        return view('index', ['wisdoms' => $wisdoms, 'videos' => $listOfVideos, 'config' => $config]);
    }

    // Show individual wisdom method can be added here
    public function showWisdomDetail($id)
    {
        $wisdom = DB::table('wisdoms')->where('id', $id)->first();
        return view('admin.wisdom.new_wisdom', ['wisdom' => $wisdom]);
    }

    public function showWisdomForAdmin()
    {
        $wisdoms = DB::table('wisdoms')->get();
        return view('admin.wisdom.index', ['wisdoms' => $wisdoms,]);
    }
    public function createWisdom(Request $request)
    {
        $content = $request->input('content');
        $author = $request->input('author');

        DB::table('wisdoms')->insert([
            'content' => $content,
            'author' => $author,
        ]);

        return redirect()->route('admin.wisdoms');
    }

    public function deleteWisdom($id)
    {
        DB::table('wisdoms')->where('id', $id)->delete();
        return redirect()->route('admin.wisdoms');
    }

    public function updateWisdom(Request $request, $id)
    {
        $content = $request->input('content');
        $author = $request->input('author');

        DB::table('wisdoms')->where('id', $id)->update([
            'content' => $content,
            'author' => $author,
        ]);

        return redirect()->route('admin.wisdoms');
    }
}
