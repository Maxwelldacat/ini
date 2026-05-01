@extends('layouts.app')

@section('content')

<h1>Detail Pemesanan</h1>

<p>Nama: {{ $order->name }}</p>
<p>Email: {{ $order->email }}</p>
<p>No HP: {{ $order->phone }}</p>
<p>Jasa: {{ $order->service }}</p>
<p>Tanggal: {{ $order->date }}</p>

<a href="/admin/orders">Kembali</a>

@endsection