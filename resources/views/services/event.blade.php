<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" href="/favicon1.png">
    <title>Dokumentasi</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex flex-col min-h-screen" >

    <nav class="sticky top-0 z-50 bg-gradient-to-r bg-[#0B1320] text-white shadow">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">

            <img src="/images/logo1.png" alt="logo" class="w-10 h-15">
            <div class="flex items-center gap-2">
                <link rel="icon" type="image/x-icon" href="favicon1.png">
            </div>

        </div>
    </nav>

    <div class="relative z-10 px-10 pt-6">
        <a href="/"
        class="inline-block bg-[#196D7D] text-white px-4 py-2 rounded-lg hover:bg-[#145663]">
            ← Kembali
        </a>
    </div>

    <!-- CONTAINER -->
    <div class="max-w-5xl mx-auto py-12 px-6">

        <!-- JUDUL -->
        <h1 class="text-4xl font-bold text-center mb-4">
            Dokumentasi Event
        </h1>

        <!-- DESKRIPSI -->
        <p class="text-center text-gray-600 mb-12">
            Kami menyediakan jasa dokumentasi event formal maupun non-formal
            seperti seminar, konser, gathering, dan kegiatan lainnya.
        </p>

        <!-- LIST PAKET -->
        <div class="grid md:grid-cols-3 gap-6">

            <!-- PAKET 1 -->
            <div class="bg-white rounded-xl shadow p-6   border-t-4 border-[#196D7D]">
                <h2 class="text-2xl font-bold mb-4">
                    Basic
                </h2>
                <p>/hari</p>

                <p class="text-blue-600 font-semibold text-xl mb-4">
                    Rp 250k
                </p>

                <ul class="space-y-2 text-gray-700">
                    <li>• Device iPhone</li>
                    <li>• Foto Dokumentasi</li>
                    <li>• Recap Video</li>
                </ul>
            </div>

            <!-- PAKET 2 -->
            <div class="bg-white rounded-xl shadow p-6   border-t-4 border-[#196D7D]">
                <h2 class="text-2xl font-bold mb-4">
                    Standard
                </h2>

                <p class="text-blue-600 font-semibold text-xl mb-4">
                    Rp 500k
                </p>

                <ul class="space-y-2 text-gray-700">
                    <li>• Device iPhone</li>
                    <li>• Kamera</li>
                    <li>• Foto Dokumentasi</li>
                    <li>• Recap Video</li>
                    <li>• After Movie</li>
                </ul>
            </div>

            <!-- PAKET 3 -->
            <div class="bg-white rounded-xl shadow p-6   border-t-4 border-[#196D7D]">
                <h2 class="text-2xl font-bold mb-4">
                    Premium
                </h2>

                <p class="text-blue-600 font-semibold text-xl mb-4">
                    Rp 650k
                </p>

                <ul class="space-y-2 text-gray-700">
                    <li>• Device iPhone</li>
                    <li>• Kamera</li>
                    <li>• Drone</li>
                    <li>• Foto Dokumentasi</li>
                    <li>• Recap Video</li>
                    <li>• After Movie</li>
                </ul>
            </div>

        </div>

        <!-- BUTTON -->
        <div class="text-center mt-12">
            <a href="/pemesanan"
               class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                Pesan Sekarang
            </a>
        </div>

    </div>


    <footer class="bg-[#0B1320] text-white p-8 mt-10">
        <div class="grid md:grid-cols-3 gap-6">

            <div>
                <h2 class="font-bold mb-2">Videografi</h2>
                <p>Jasa videografi profesional untuk berbagai kebutuhan.</p>
            </div>

            <div>
                <h2 class="font-bold mb-2">Kontak</h2>
                <p>WhatsApp: 08xxxx</p>
                <p>Email: bataraagurualamin@gmail.com</p>
            </div>

            <div>
                <h2 class="font-bold mb-2">Lokasi</h2>
                <p>Malang, Indonesia</p>
            </div>

        </div>

        <div class="text-center mt-6 text-sm text-gray-400">
            © 2026 Videografi
        </div>
    </footer>


</body>
</html>