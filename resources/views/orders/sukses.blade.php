<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Berhasil</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#06152d] min-h-screen flex items-center justify-center p-6">

    <div class="bg-white w-full max-w-2xl rounded-3xl shadow-2xl p-8">

        {{-- HEADER --}}
        <div class="text-center">

            <div class="text-5xl mb-4">
                🎉
            </div>

            <h1 class="text-4xl font-bold text-green-600">
                Pemesanan Berhasil!
            </h1>

            <p class="text-gray-600 mt-4 text-lg">
                Terima kasih, pesanan kamu sudah kami terima.
            </p>

        </div>

        {{-- TOTAL --}}
        <div class="bg-blue-50 rounded-2xl p-6 mt-8 text-center border border-blue-100">

            <p class="text-gray-500 text-lg">
                Total Pembayaran
            </p>

            <h2 class="text-5xl font-bold text-blue-600 mt-2">
                Rp {{ number_format($order->total_harga, 0, ',', '.') }}
            </h2>

        </div>

        {{-- PEMBAYARAN --}}
        <div class="mt-10">

            <h3 class="text-2xl font-bold text-center mb-6">
                💳 Metode Pembayaran
            </h3>

            <div class="grid md:grid-cols-2 gap-4">

                <div class="bg-gray-100 rounded-xl p-4">
                    <p class="font-bold text-lg">Gopay</p>
                    <p class="text-gray-700 mt-1">
                        081333360727
                    </p>
                    <p class="text-sm text-gray-500">
                        a.n Batara Guru Al Amin
                    </p>
                </div>

                <div class="bg-gray-100 rounded-xl p-4">
                    <p class="font-bold text-lg">ShopeePay</p>
                    <p class="text-gray-700 mt-1">
                        082140644332
                    </p>
                    <p class="text-sm text-gray-500">
                        a.n Batara Guru Al Amin
                    </p>
                </div>

                <div class="bg-gray-100 rounded-xl p-4">
                    <p class="font-bold text-lg">DANA</p>
                    <p class="text-gray-700 mt-1">
                        081333360727
                    </p>
                    <p class="text-sm text-gray-500">
                        a.n Batara Guru Al Amin
                    </p>
                </div>

                <div class="bg-gray-100 rounded-xl p-4">
                    <p class="font-bold text-lg">Mandiri</p>
                    <p class="text-gray-700 mt-1">
                        1400023920037
                    </p>
                    <p class="text-sm text-gray-500">
                        a.n Batara Guru Al Amin
                    </p>
                </div>

                <div class="bg-gray-100 rounded-xl p-4 md:col-span-2">
                    <p class="font-bold text-lg">BCA</p>
                    <p class="text-gray-700 mt-1">
                        1931368112
                    </p>
                    <p class="text-sm text-gray-500">
                        a.n Batara Guru Al Amin
                    </p>
                </div>

            </div>

        </div>

        {{-- UPLOAD --}}
        <div class="mt-10 bg-gray-50 rounded-2xl p-6 border">

            <h3 class="text-2xl font-bold text-center mb-4">
                📤 Upload Bukti Transfer
            </h3>

            <p class="text-center text-gray-500 mb-6">
                Upload bukti pembayaran dalam format JPG, PNG, atau PDF.
            </p>

            <form action="/orders/{{ $order->id }}/upload" method="POST" enctype="multipart/form-data">

                @csrf

                <input
                    type="file"
                    name="bukti_transfer"
                    class="w-full border rounded-lg p-3"
                    required
                >

                <div class="flex justify-center gap-4 mt-6 flex-wrap">

                    <button
                        type="submit"
                        class="bg-teal-700 hover:bg-teal-800 text-white px-6 py-3 rounded-xl font-semibold transition"
                    >
                        Upload Bukti
                    </button>

                    <a
                        href="/"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl font-semibold transition"
                    >
                        Kembali ke Home
                    </a>

                </div>

            </form>

        </div>

    </div>

</body>
</html>