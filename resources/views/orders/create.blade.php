<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Form Pemesanan</h1>

    <form action="/pemesanan" method="POST" class="max-w-lg">
        @csrf
        
        <div class="mb-4">
            <label class="block font-bold mb-2">Nama Lengkap</label>
            <input type="text" name="nama_client" class="w-full border p-2" required>
        </div>

        <div class="mb-4">
            <label class="block font-bold mb-2">Email</label>
            <input type="email" name="email" class="w-full border p-2" required>
        </div>

        <div class="mb-4">
            <label class="block font-bold mb-2">No. HP</label>
            <input type="text" name="no_hp" class="w-full border p-2" required>
        </div>

        <div class="mb-4">
            <label class="block font-bold mb-2">Jenis Jasa</label>
            <select name="jenis_jasa" class="w-full border p-2" required>
                <option value="">Pilih Jasa</option>
                <option value="wedding">Wedding</option>
                <option value="prewedding">Prewedding</option>
                <option value="acara">Acara Lainnya</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-bold mb-2">Tanggal Pemesanan</label>
            <input type="date" name="tanggal_pemesanan" class="w-full border p-2" required>
        </div>

        <div class="mb-4">
            <label class="block font-bold mb-2">Catatan (Opsional)</label>
            <textarea name="catatan" class="w-full border p-2"></textarea>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded">Pesan Sekarang</button>
    </form>
</div>