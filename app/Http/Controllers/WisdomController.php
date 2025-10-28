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
