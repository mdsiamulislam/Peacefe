<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LinkController extends Controller
{
    public function getLinks()
    {
        $links = DB::table('links')->orderBy('created_at', 'desc')->get();
        return view('links.index', ['links' => $links]);
    }

    public function index()
    {
        $links = DB::table('links')->orderBy('created_at', 'desc')->get();
        return view('admin.link.index', ['links' => $links]);
    }

    public function createExternalLink(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'url' => 'required|url|max:255',
        ]);

        DB::table('links')->insert([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'url' => $request->input('url'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.links')->with('success', 'Link added successfully!');
    }

    public function deleteLink($id)
    {
        DB::table('links')->where('id', $id)->delete();
        return redirect()->route('admin.links')->with('success', 'Link deleted successfully!');
    }
}
