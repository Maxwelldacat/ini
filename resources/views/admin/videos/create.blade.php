
@extends('admin.layouts.app')

@section('content')
<a href="/admin/videos" class="bg-gray-500 text-white px-4 py-2 rounded mb-4 inline-block">
    ← Kembali
</a>
<h1 class="text-2xl mb-4">Tambah Video</h1>



<div class="mb-4">
    <label class="block font-bold mb-2">
        Slot Video
    </label>

    <select name="position" class="w-full border p-2">
        <option value="1">Video 1</option>
        <option value="2">Video 2</option>
        <option value="3">Video 3</option>
        <option value="4">Video 4</option>
    </select>
</div>




@endsection