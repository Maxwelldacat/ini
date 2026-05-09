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
            <h1 class="font-bold text-xl"> taravisual.id</h1>
            <p class="text-xs text-gray-200">Documentation</p>
        </div>


        <div class="flex gap-6 mx-auto">
            <a href="/" class="hover:text-gray-200 transition">Home</a>
            <a href="/#tentang" class="hover:text-gray-200 transition">About</a>
            <a href="/#jasa" class="hover:text-gray-200 transition">Jasa</a>
            <a href="/pemesanan" class="hover:text-gray-200 transition">Order</a>
            <a href="/#contact" class="hover:text-gray-200 transition">Contact</a>
        </div>

    </div>
</nav>

<main class="flex-grow p-6">
    @yield('content')
</main>




<footer class="bg-[#0B1320] text-white p-8 mt-10">
    <div class="grid md:grid-cols-3 gap-6">

        <div>
            <h2 class="font-bold mb-2">Videografi</h2>
            <p>Jasa videografi profesional untuk berbagai kebutuhan.</p>
        </div>

        <div>
            <h2 class="font-bold mb-2">Kontak</h2>
            <p>WhatsApp: 081333360727</p>
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
