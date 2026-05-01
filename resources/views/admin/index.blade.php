@extends('layouts.app')

@section('content')

<a href="/admin/videos/create" class="bg-green-500 text-white px-4 py-2 rounded">Tambah Video</a>

<h2 class="text-xl font-bold mt-8 mb-4">Data Pemesanan</h2>

<div class="grid md:grid-cols-2 gap-6">

@foreach($orders as $order)
<div class="bg-white p-4 rounded shadow">

    <p class="font-bold text-lg">{{ $order->name }}</p>
    <p class="text-sm text-gray-500">{{ $order->email }}</p>
    <p class="text-sm">{{ $order->service }}</p>
    <p class="text-sm text-gray-400">{{ $order->date }}</p>

    <div class="mt-3 flex gap-3">
        <a href="/admin/orders/{{ $order->id }}" class="text-blue-500">Detail</a>

        <a href="/admin/orders/{{ $order->id }}/edit" class="text-yellow-500">Edit</a>

        <form action="/admin/orders/{{ $order->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="text-red-500">Hapus</button>
        </form>
    </div>

</div>
@endforeach

</div>

<div class="grid md:grid-cols-3 gap-6 mt-6">

@foreach($videos as $video)
<div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">

    <a href="{{ $video->video_url }}" target="_blank">
        <img src="{{ $video->thumbnail }}" class="w-full h-48 object-cover hover:scale-105 transition">
    </a>

    <div class="p-4">
        <h2 class="font-bold text-lg text-gray-800">{{ $video->title }}</h2>
        <p class="text-sm text-gray-500">{{ $video->description }}</p>

        <div class="mt-3 flex justify-between">
            <a href="/admin/videos/{{ $video->id }}/edit" class="text-blue-500 hover:underline">Edit</a>

            <form action="/admin/videos/{{ $video->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500">Hapus</button>
            </form>
        </div>
    </div>

</div>
@endforeach

</div>
@endsection