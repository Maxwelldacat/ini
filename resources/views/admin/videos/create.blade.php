
@extends('admin.layouts.app')

@section('content')
<a href="/admin/videos" class="bg-gray-500 text-white px-4 py-2 rounded mb-4 inline-block">
    ← Kembali
</a>
<h1 class="text-2xl mb-4">Tambah Video</h1>




<form action="/admin/videos" method="POST" class="bg-white p-4 shadow rounded"" method="POST" class="bg-white p-4 shadow rounded">
@csrf

<input type="text" name="title" placeholder="Judul" class="border p-2 w-full mb-3">
<textarea name="description" placeholder="Deskripsi" class="border p-2 w-full mb-3"></textarea>
<input type="text" name="thumbnail" placeholder="Link Thumbnail" class="border p-2 w-full mb-3">
<input type="text" name="video_url" placeholder="Link Video (YouTube)" class="border p-2 w-full mb-3">
<button class="bg-green-500 text-white px-4 py-2 rounded">Simpan</button>

</form>

@endsection