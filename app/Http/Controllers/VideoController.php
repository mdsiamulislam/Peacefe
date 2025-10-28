<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    public function getAllVideos()
    {
        $listOfVideos = DB::table('videos')->get();
        $listOfCategories = DB::table('videos')->select('category')->distinct()->get()->pluck('category');

        return view('video.index', ['categories' => $listOfCategories, 'videos' => $listOfVideos]);
    }
}
