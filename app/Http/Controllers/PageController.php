<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function about()
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

        return view('about.index', ['config' => $config]);
    }
}
