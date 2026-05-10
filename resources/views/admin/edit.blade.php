@extends('layouts.app')

@section('content')

<h1 class="text-2xl mb-4">Edit Video</h1>

<a href="/admin/videos" class="bg-gray-500 text-white px-4 py-2 rounded mb-4 inline-block">
    ← Kembali
</a>

<form action="/admin/orders/{{ $order->id }}" method="POST">
    @csrf
    @method('PUT')

<input type="text" name="title" value="{{ $video->title }}" class="border p-2 w-full mb-3">

<textarea name="description" class="border p-2 w-full mb-3">{{ $video->description }}</textarea>

<input type="text" name="thumbnail" value="{{ $video->file }}" class="border p-2 w-full mb-3">

<input type="text" name="video_url" value="{{ $video->video_url }}" class="border p-2 w-full mb-3">

<button class="bg-yellow-500 text-white px-4 py-2 rounded">Update</button>

</form>

@endsection