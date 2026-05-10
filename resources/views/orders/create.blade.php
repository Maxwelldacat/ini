@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-[#F5F7FA] text-black">
    <div class="bg-gray-200 p-8 rounded-xl shadow-lg w-full max-w-xl">
        <h1 class="text-3xl font-bold mb-6">Form Pemesanan</h1>

        <a href="/" class="bg-gray-500 text-white px-4 py-2 rounded mb-4 inline-block">
            ← Kembali
        </a>

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
                <select id="jenis_jasa"   name="jenis_jasa" class="w-full border p-2" required>
                    <option value="">Pilih Jasa</option>
                    <option value="event">Event</option>
                    <option value="wisata">Wisata</option>
                </select>
            </div>

            <!-- Paket -->
            <div class="mb-4">
                <label class="block font-bold mb-2">Paket</label>
                <select id="paket"   name="paket" class="w-full border p-2" required>
                    <option value="">Pilih Paket</option>

                </select>
            </div>

            <!-- Tambahan -->
            <div id="tambahan" class="mb-4 hidden">

                <label class="block font-bold mb-2">Tambahan</label>

                <div class="bg-gray-100 p-4 rounded space-y-2">

                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="drone" value="1">
                        <span>Tambah Drone (+250k)</span>
                    </label>

                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="fast_edit" value="1">
                        <span>Langsung Tayang (+150k)</span>
                    </label>

                </div>

            </div>


            <div class="mb-4">
                <label class="block font-bold mb-2">Tanggal Acara</label>
                <input type="date" name="tanggal_acara" class="w-full border p-2" min="{{ date('Y-m-d') }}" required>
            </div>

            <div class="mb-4">
                <label class="block font-bold mb-2">Catatan (Opsional)</label>
                <textarea name="catatan" class="w-full border p-2"></textarea>
            </div>

            <button type="submit" onclick="this.disabled=true; this.form.submit();" class="bg-[#196D7D] text-white px-6 py-2 rounded hover:bg-[#145866]">
                Pesan Sekarang
            </button>
        </form>

    </div>
</div>

@endsection


<script>

    // Tunggu halaman selesai dimuat
    document.addEventListener('DOMContentLoaded', function () {

        // Ambil element select
        const jenisJasa = document.getElementById('jenis_jasa');
        const paket = document.getElementById('paket');

        // Bagian tambahan
        const tambahan = document.getElementById('tambahan');

        // Ketika jenis jasa dipilih
        jenisJasa.addEventListener('change', function () {

            // ================= EVENT =================
            if (this.value == 'event') {

                // Isi pilihan paket event
                paket.innerHTML = `
                    <option value="">Pilih Paket</option>

                    <option value="event_basic">
                        Event Basic - 250K
                    </option>

                    <option value="event_standart">
                        Event Standart - 500K
                    </option>

                    <option value="event_premium">
                        Event Premium - 650K
                    </option>
                `;

                // Sembunyikan tambahan
                tambahan.style.display = 'none';
            }

            // ================= WISATA =================
            else if (this.value == 'wisata') {

                // Isi pilihan paket wisata
                paket.innerHTML = `
                    <option value="">Pilih Paket</option>

                    <option value="1_day">
                        1 Day Trip - 500K
                    </option>

                    <option value="2_day">
                        2 Day Trip - 800K
                    </option>

                    <option value="3_day">
                        3 Day Trip - 1300K
                    </option>

                    <option value="bali">
                        Bali Trip - 1550K
                    </option>
                `;

                // Tampilkan tambahan
                tambahan.style.display = 'block';
            }

            // Kalau belum pilih jasa
            else {

                paket.innerHTML = `
                    <option value="">Pilih Paket</option>
                `;

                tambahan.style.display = 'none';
            }

        });

    });

</script>