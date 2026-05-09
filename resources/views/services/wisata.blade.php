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
            Dokumentasi Wisata
        </h1>

        <!-- DESKRIPSI -->
        <p class="text-center text-gray-600 mb-12">
            Kami menyediakan jasa dokumentasi event formal maupun non-formal
            seperti seminar, konser, gathering, dan kegiatan lainnya.
        </p>

        <!-- LIST PAKET -->
        <div class="grid md:grid-cols-2 gap-6">

            <!-- PAKET 1 -->
            <div class="bg-white rounded-xl shadow p-6   border-t-4 border-[#196D7D]">
                <h2 class="text-2xl font-bold mb-4">
                    1 Day Trip
                </h2>

                <p class="text-blue-600 font-semibold text-xl mb-4">
                    Rp 500.000
                </p>
                <p class="font-semibold mt-5 mb-3">include</p>
                <ul class="space-y-1 text-gray-700">
                    <li>• 2–3 Story Video</li>
                    <li>• 1 After Movie</li>
                    <li>• Link Google Drive Foto</li>
                </ul>
            </div>

            <!-- PAKET 2 -->
            <div class="bg-white rounded-xl shadow p-6   border-t-4 border-[#196D7D]">
                <h2 class="text-2xl font-bold mb-4">
                    2 Day Trip
                </h2>

                <p class="text-blue-600 font-semibold text-xl mb-4">
                    Rp 800.000
                </p>

                <p class="font-semibold mt-5 mb-3">include</p>
                <ul class="space-y-1 text-gray-700">
                    <li>• 2–3 Story Video</li>
                    <li>• 1 After Movie</li>
                    <li>• Link Google Drive Foto</li>
                </ul>
            </div>

            <!-- PAKET 3 -->
            <div class="bg-white rounded-xl shadow p-6   border-t-4 border-[#196D7D]">
                <h2 class="text-2xl font-bold mb-4">
                    3 Day Trip
                </h2>

                <p class="text-blue-600 font-semibold text-xl mb-4">
                    Rp 1.300.000
                </p>

                <p class="font-semibold mt-5 mb-3">include</p>
                <ul class="space-y-1 text-gray-700">
                    <li>• 3–5 Story Video</li>
                    <li>• 1 After Movie</li>
                    <li>• Link Google Drive Foto</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow p-6   border-t-4 border-[#196D7D]">
                <h2 class="text-2xl font-bold mb-4">
                    Bali Trip
                </h2>

                <p class="text-blue-600 font-semibold text-xl mb-4">
                    Rp 1.550.000
                </p>

                <p class="font-semibold mt-5 mb-3">include</p>
                <ul class="space-y-1 text-gray-700">
                    <li>• Free Request Story Video</li>
                    <li>• 1 After Movie</li>
                    <li>• Fast Upload / Langsung Tayang</li>
                    <li>• Link Google Drive Foto</li>
                </ul>
            </div>
        </div>

        <!-- BUTTON -->
        <div class="text-center mt-12">
            <a href="/pemesanan" class="bg-[#196D7D] text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                Pesan Sekarang
            </a>
        </div>


        <section class="max-w-4xl mx-auto mt-16">
            <div class="bg-white p-8 rounded-xl shadow">
                <h2 class="text-2xl font-bold mb-6 text-[#196D7D]">
                    Informasi Tambahan
                </h2>
                <div class="space-y-4 text-gray-700">
                    <p>
                        Device:
                        iPhone 13 / 14 Pro + Canon / Sony Camera
                    </p>
                    <p>
                        Fast Edit:
                        Tambah 150K
                    </p>
                    <p>
                        Drone:
                        Tambah 250K / hari
                    </p>
                </div>
            </div>
        </section>
    </div>

hover:bg-[#57AOB2]

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