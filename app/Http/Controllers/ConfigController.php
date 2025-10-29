<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConfigController extends Controller
{
    public function getConfigForHomePage()
    {
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
        return view('admin.config.home', ['config' => $config ?? (object) $defaultConfig]);
    }

    public function saveConfigForHomePage(Request $request)
{
    $config = DB::table('configs')->first();

    $data = [
        'home_page_hero_image' => $request->input('home_page_hero_image'),
        'home_page_hero_button_url' => $request->input('home_page_hero_button_url'),
        'home_page_hero_button_text' => $request->input('home_page_hero_button_text'),
        'home_page_title' => $request->input('home_page_title'),
        'home_page_description' => $request->input('home_page_description'),
        'home_page_section_1title' => $request->input('home_page_section_1title'),
        'home_page_section_2title' => $request->input('home_page_section_2title'),
        'updated_at' => now(),
    ];

    if ($config) {
        DB::table('configs')->update($data);
    } else {
        $data['created_at'] = now();
        DB::table('configs')->insert($data);
    }

    return redirect()->back()->with('success', 'Home Page Configuration saved.');
}


    public function saveConfigForAboutPage(Request $request)
{
    $config = DB::table('configs')->first();

    $data = [
        'about_page_journey_title' => $request->input('about_page_journey_title'),
        'about_page_journey_description' => $request->input('about_page_journey_description'),
        'about_page_mission_title' => $request->input('about_page_mission_title'),
        'about_page_mission_description' => $request->input('about_page_mission_description'),
        'about_page_vision_title' => $request->input('about_page_vision_title'),
        'about_page_vision_description' => $request->input('about_page_vision_description'),
        'about_page_story_title' => $request->input('about_page_story_title'),
        'about_page_story_description' => $request->input('about_page_story_description'),
        'updated_at' => now(),
    ];

    if ($config) {
        DB::table('configs')->update($data);
    } else {
        $data['created_at'] = now();
        DB::table('configs')->insert($data);
    }

    return redirect()->back()->with('success', 'About Page Configuration saved.');
}

}
