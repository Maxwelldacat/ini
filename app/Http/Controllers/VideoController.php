<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Photo;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::orderBy('position')->take(4)->get();

        $photos = Photo::orderBy('position')->take(6)->get();

        return view('portofolio.index', compact('videos', 'photos'));
    }

    public function adminIndex()
    {
        $videos = Video::latest()->get();
        $orders = Order::latest()->get();
        return view('admin.videos.index', compact('videos'));
    }

    public function create()
    {
        return view('admin.videos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'video' => 'required|mimes:mp4,mov,avi',
            'position' => 'required'
        ]);

        // CEK APAKAH SLOT SUDAH ADA VIDEO
        $oldVideo = Video::where('position', $request->position)->first();

        // KALAU ADA → HAPUS VIDEO LAMA
        if ($oldVideo) {

            Storage::delete('public/' . $oldVideo->video);

            $oldVideo->delete();
        }

        // UPLOAD VIDEO BARU
        $path = $request->file('video')->store('videos', 'public');

        // SIMPAN VIDEO BARU
        Video::create([
            'judul' => $request->judul,
            'video' => $path,
            'position' => $request->position,
        ]);

        return redirect('/admin/videos');
    }

    public function edit($id)
    {
        $video = Video::findOrFail($id);
        return view('admin.edit', compact('video'));
    }

    public function update(Request $request, Video $video)
    {
        $video->update($request->all());
        return redirect()->route('portofolio.index');
    }

    public function destroy($id)
    {
        $video = Video::findOrFail($id);
        $video->delete();

        return redirect('/admin/videos');
    }
}
