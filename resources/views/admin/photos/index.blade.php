<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::orderBy('position')->get();

        return view('admin.photos.index', compact('photos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required|image',
            'position' => 'required'
        ]);

        // CEK SLOT LAMA
        $oldPhoto = Photo::where('position', $request->position)->first();

        // HAPUS FOTO LAMA
        if ($oldPhoto) {

            Storage::delete('public/' . $oldPhoto->gambar);

            $oldPhoto->delete();
        }

        // UPLOAD FOTO BARU
        $path = $request->file('gambar')->store('photos', 'public');

        // SIMPAN FOTO BARU
        Photo::create([
            'judul' => $request->judul,
            'gambar' => $path,
            'position' => $request->position,
        ]);

        return back();
    }
}