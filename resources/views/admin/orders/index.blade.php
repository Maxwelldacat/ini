<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Daftar Pemesanan</h1>

    <table class="w-full border">
        <thead class="bg-gray-200">
            <tr>
                <th class="border p-2">No</th>
                <th class="border p-2">Nama</th>
                <th class="border p-2">Email</th>
                <th class="border p-2">Jasa</th>
                <th class="border p-2">Tanggal</th>
                <th class="border p-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td class="border p-2">{{ $loop->iteration }}</td>
                <td class="border p-2">{{ $order->nama_client }}</td>
                <td class="border p-2">{{ $order->email }}</td>
                <td class="border p-2">{{ $order->jenis_jasa }}</td>
                <td class="border p-2">{{ $order->tanggal_pemesanan }}</td>
                <td class="border p-2">
                    <a href="/admin/orders/{{ $order->id }}/edit" class="text-blue-500">Edit</a>
                    <form action="/admin/orders/{{ $order->id }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="text-red-500" onclick="return confirm('Hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>