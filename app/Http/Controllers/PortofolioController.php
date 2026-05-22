<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Photo;

class PortofolioController extends Controller
{
    public function index()
    {
        $videos = Video::orderBy('position')->get();
        $photos = Photo::orderBy('position')->get();

        return view('admin.portofolio', compact('videos', 'photos'));
    }

    public function updateVideo(Request $request, $id)
    {
        $request->validate([
            'video' => 'required|mimes:mp4,mov,avi|max:50000'
        ]);

        $video = Video::findOrFail($id);

        // upload video baru
        $path = $request->file('video')->store('videos', 'public');

        // simpan ke database
        $video->file = $path;

        $video->save();

        return back();
    }

    public function updatePhoto(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'required|image|max:10000'
        ]);

        $photo = Photo::findOrFail($id);

        // upload gambar
        $path = $request->file('gambar')->store('photos', 'public');

        // simpan ke database
        $photo->gambar = $path;

        $photo->save();

        return back();
    }
}