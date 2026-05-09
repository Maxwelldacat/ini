@extends('admin.layouts.app')

@section('content')

<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Edit Pemesanan</h1>
    <a href="/admin/orders" class="bg-gray-500 text-white px-4 py-2 rounded mb-4 inline-block">
        ← Kembali
    </a>

    <form action="/admin/orders/{{ $order->id }}" method="POST" class="max-w-lg">
        @csrf @method('PUT')
        
        <div class="mb-4">
            <label class="block font-bold mb-2">Nama</label>
            <input type="text" name="nama_client" value="{{ $order->nama_client }}" class="w-full border p-2">
        </div>

        <div class="mb-4">
            <label class="block font-bold mb-2">Email</label>
            <input type="email" name="email" value="{{ $order->email }}" class="w-full border p-2">
        </div>

        <div class="mb-4">
            <label class="block font-bold mb-2">No. HP</label>
            <input type="text" name="no_hp" value="{{ $order->no_hp }}" class="w-full border p-2">
        </div>

        <div class="mb-4">
            <label class="block font-bold mb-2">Jenis Jasa</label>
            <input type="text" name="jenis_jasa" value="{{ $order->jenis_jasa }}" class="w-full border p-2">
        </div>

        <div class="mb-4">
            <label class="block font-bold mb-2">Tanggal</label>
            <input type="date" name="tanggal_acara" value="{{ $order->tanggal_acara }}" class="w-full border p-2">
        </div>

        <div class="mb-4">
            <label class="block font-bold mb-2">Catatan</label>
            <textarea name="catatan" class="w-full border p-2">{{ $order->catatan }}</textarea>
        </div>

        <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded">Update</button>
    </form>
</div>

@endsection