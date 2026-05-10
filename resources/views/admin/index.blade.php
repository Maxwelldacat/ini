@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')

<h3 class="text-lg font-bold mb-4">Statistik</h3>

    <div class="grid md:grid-cols-3 gap-6 mb-10">
        <div class="bg-[#196D7D] text-white p-6 rounded-xl shadow">
            <p class="text-white">Total Pesanan</p>
            <h2 class="text-2xl font-bold">{{ $totalOrders ?? 0 }}</h2>
        </div>

        <div class="bg-[#2198b6] text-white p-6 rounded-xl shadow">
            <p class="text-white">Total Video</p>
            <h2 class="text-2xl font-bold">{{ $totalVideos ?? 0 }}</h2>
        </div>

        <div class="bg-[#57A0B2] text-white p-6 rounded-xl shadow">
            <p class="text-white">Pesanan Hari Ini</p>
            <h2 class="text-2xl font-bold">{{ $todayOrders ?? 0 }}</h2>
        </div>
    </div>

    <h2 class="text-2xl font-bold text-gray-800 mb-4">Pesanan Terbaru</h2>

    <div class="grid md:grid-cols-2 gap-6">

    @foreach($latestOrders as $order)
    <div class="bg-white rounded-xl shadow p-4">

        <p class="font-bold text-lg">{{ $order->nama_client }}</p>
        <p class="text-sm text-gray-500">{{ $order->email }}</p>
          <div class="mt-3 text-sm">
            <p class="text-sm text-gray-500">{{ $order->jenis_jasa }}</p>
            <p class="text-sm text-gray-500">{{ $order->tanggal_pemesanan }}</p>
        </div>
    </div>


    @endforeach

    </div>

@endsection