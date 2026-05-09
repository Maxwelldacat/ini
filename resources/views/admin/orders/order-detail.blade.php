@extends('layouts.app')

@section('content')

<a href="/admin/videos" class="bg-gray-500 text-white px-4 py-2 rounded mb-4 inline-block">
    ← Kembali
</a>

<h1>Detail Pemesanan</h1>

<p>Nama: {{ $order->nama_client }}</p>
<p>Email: {{ $order->email }}</p>
<p>No HP: {{ $order->no_hp }}</p>
<p>Jasa: {{ $order->jenis_jasa }}</p>
<p>Tanggal: {{ $order->tanggal_pemesanan }}</p>

<!--<a href="/admin/orders">Kembali</a>-->

@endsection