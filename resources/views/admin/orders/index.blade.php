@extends('admin.layouts.app')

@section('title')
    <div class="grid md:grid-cols-2 gap-6 mb-10">
        <h2 class="text-xl font-bold bg-gray-800 text-white p-6 rounded-xl ">📦 Kelola Pesanan</h2>
    </div>
@endsection

@section('content')

<div class="w-full p-6 ">
    <h1 class="text-3xl font-bold mb-6">Daftar Pemesanan</h1>

    <div >
        <table class="min-w-[1400px] border ">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border px-6 py-4 text-left">No</th>
                    <th class="border px-6 py-4 text-left">Nama</th>
                    <th class="border px-6 py-4 text-left">Email</th>
                    <th class="border px-6 py-4 text-left">Jasa</th>
                    <th class="border px-6 py-4 text-left">Paket</th>
                    <th class="border px-6 py-4 text-left">Drone</th>
                    <th class="border px-6 py-4 text-left">Fast edit</th>
                    <th class="border px-6 py-4 text-left">Total harga</th>
                    <th class="border px-6 py-4 text-left">Tanggal Acara</th>
                    <th class="border px-6 py-4 text-left">catatan</th>
                    <th class="border px-6 py-4 text-left">Bukti</th>
                    <th class="border px-6 py-4 text-left">Update Status</th>
                    <th class="border px-6 py-4 text-left">Status</th>
                    <th class="border px-6 py-4 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td class="border px-6 py-5 align-top">{{ $loop->iteration }}</td>
                    <td class="border px-6 py-5 align-top">{{ $order->nama_client }}</td>
                    <td class="border px-6 py-5 align-top">{{ $order->email }}</td>
                    <td class="border px-6 py-5 align-top">{{ $order->jenis_jasa }}</td>
                    <td class="border px-6 py-5 align-top">{{ $order->paket }}</td>
                    <td class="border px-6 py-5 align-top">{{ $order->drone ? 'Ya' : 'Tidak' }}</td>
                    <td class="border px-6 py-5 align-top">{{ $order->fast_edit ? 'Ya' : 'Tidak' }}</td>
                    <td class="border px-6 py-5 align-top"> Rp {{ number_format($order->total_harga) }}</td>
                    <td class="border px-6 py-5 align-top">{{ $order->tanggal_acara }}</td>
                    <td class="border px-6 py-5 align-top">{{ $order->catatan }}</td>
                    <td class="border px-6 py-5 align-top">
                        @if($order->bukti_transfer)
                            <a href="{{ asset('storage/' . $order->bukti_transfer) }}" target="_blank" class="text-blue-500">
                                Lihat
                            </a>
                        @else
                            Belum Upload
                        @endif
                    </td>

                    <td class="border px-6 py-5 align-top">

                        <form action="/admin/orders/{{ $order->id }}" method="POST">

                            @csrf
                            @method('PUT')

                            <select name="status" class="border p-1">

                                <option value="menunggu">menunggu</option>
                                <option value="diproses">diproses</option>
                                <option value="selesai">selesai</option>

                            </select>

                            <button class="bg-[#196D7D] text-white px-2 py-1 rounded">
                                Update
                            </button>

                        </form>

                        <form action="/admin/orders/{{ $order->id }}" method="POST" class="mt-2">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-500 text-white px-2 py-1 rounded">
                                Hapus
                            </button>
                        </form>

                    </td>
        
                    <td class="border px-6 py-5 align-top">{{ $order->status }}</td>
                
                    <td class="border px-6 py-5 align-top">
                        <a href="/admin/orders/{{ $order->id }}/edit" class="text-blue-500">Edit</a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection