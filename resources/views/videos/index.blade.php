@extends('layouts.app')

@section('content')

<div class="grid md:grid-cols-3 gap-6 mt-6">
    <a href="/pemesanan" class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-3 rounded-lg shadow">
        pesan jasa
    </a>
@foreach($videos as $video)
<div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">

    <a href="{{ $video->video_url }}" target="_blank">
        <img src="{{ $video->thumbnail }}" class="w-full h-48 object-cover hover:scale-105 transition">
    </a>

    <div class="p-4">
        <h2 class="font-bold text-lg text-gray-800">{{ $video->title }}</h2>
        <p class="text-sm text-gray-500">{{ $video->description }}</p>
    </div>



</div>
@endforeach

</div>

@endsection