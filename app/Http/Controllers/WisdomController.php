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
        return view('index', ['wisdoms' => $wisdoms, 'videos' => $listOfVideos]);
    }
}
