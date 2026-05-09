@extends('admin.layouts.app')

@section('title', 'Kelola Video')

@section('content')

<a href="/admin" class="text-blue-500 mb-4 inline-block">← Kembali</a>
<p><a href="/admin/videos/create" class="text-blue-500 mb-4 inline-block">create</a></p>


@foreach($videos as $video)
    <div class="bg-white p-3 shadow mb-2">
        {{ $video->judul ?? 'Video' }}
    </div>
@endforeach

@endsection