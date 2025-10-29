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

    public function getVideoDetails($id)
    {
        $video = DB::table('videos')->where('id', $id)->first();
        return view('admin.content.video.new_video', ['video' => $video]);
    }

    public function getAllVideosForAdmin()
    {
        $listOfVideos = DB::table('videos')->get();
        return view('admin.content.video.index', ['videos' => $listOfVideos]);
    }

    public function addVideo(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required|string',
            'video_url' => 'required|url',
        ]);

        DB::table('videos')->insert([
            'title' => $validatedData['title'],
            'category' => $validatedData['category'],
            'description' => $validatedData['description'],
            'video_url' => $validatedData['video_url'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.videos')->with('success', 'Video added successfully!');
    }
    public function deleteVideo($id)
    {
        DB::table('videos')->where('id', $id)->delete();
        return redirect()->route('admin.videos')->with('success', 'Video deleted successfully!');
    }
    public function updateVideo(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required|string',
            'video_url' => 'required|url',
        ]);

        DB::table('videos')->where('id', $id)->update([
            'title' => $validatedData['title'],
            'category' => $validatedData['category'],
            'description' => $validatedData['description'],
            'video_url' => $validatedData['video_url'],
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.videos')->with('success', 'Video updated successfully!');
    }
}
