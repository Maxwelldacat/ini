<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" href="/favicon1.png">
    <title>Videografi</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex flex-col min-h-screen" >

<nav class="sticky top-0 z-50 bg-gradient-to-r from-gray-900 to-black text-white shadow">
    <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">

        <img src="/images/logo1.png" alt="logo" class="w-10 h-15">
        <div class="flex items-center gap-2">
            <link rel="icon" type="image/x-icon" href="favicon1.png">
            <h1 class="font-bold text-xl"> taravisual.id</h1>
            <p class="text-xs text-gray-200">Videography</p>
        </div>
    </div>
</nav>

<div class="max-w-xl mx-auto mt-20 bg-white p-8 rounded shadow text-center">
    
    <h1 class="text-2xl font-bold mb-4 text-green-600">
        🎉 Pemesanan Berhasil!
    </h1>

    <p class="mb-4">Terima kasih, pesanan kamu sudah kami terima.</p>

    <p class="text-lg font-semibold mb-2">
        Total Harga:
    </p>

    <p class="text-2xl font-bold text-blue-600 mb-6">
        Rp {{ number_format($order->total_harga, 0, ',', '.') }}
    </p>

    <div class="text-left mb-6">
        <p class="font-semibold mb-2">Silakan transfer ke:</p>
        <p>gopay 081333360727 a.n Batara Guru Al Amin</p>
        <p>shoopepay 082140644332 a.n Batara Guru Al Amin</p>
        <p>dana 081333360727 a.n Batara Guru Al Amin</p>
        <p>mandiri 1400023920037 a.n Batara Guru Al Amin</p>
        <p>bca 1931368112 Batara Guru Al Amim</p>

    </div>


    <h3 class="mt-6 font-bold">Upload Bukti Transfer</h3>

    <form action="/orders/{{ $order->id }}/upload" 
      method="POST"
      enctype="multipart/form-data">

        @csrf
        <div class="mt-4">
            <input type="file" name="bukti" class="mb-3">

            <div class="flex gap-3 justify-center">
                <button class="bg-[#196D7D] px-4 py-2 text-white rounded">
                    Upload Bukti
                </button>

                <a href="/" class="bg-blue-500 px-4 py-2 text-white rounded">
                    Kembali ke Home
                </a>

            </div>
        </div>
    </form>

</div>



</body>
</html>

