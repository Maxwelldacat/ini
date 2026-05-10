@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-900 text-white px-6 py-10">

    <a href="/" class="text-blue-400 hover:underline mb-6 inline-block">
        ← Kembali
    </a>

    <h1 class="text-3xl font-bold text-center mb-10 text-blue-400">
        Portofolio Kami
    </h1>

    <div class="flex justify-center mb-10 ">


    </div>

    <h2 class="text-3xl font-bold mb-6">
        Video Portfolio
    </h2>

    <div class="grid md:grid-cols-2 gap-6">

        @foreach($videos as $video)

            <video controls class="w-full h-[300px] object-cover rounded-xl bg-black">

                <source src="{{ asset('storage/' . $video->file) }}" type="video/mp4">

            </video>

        @endforeach

    </div>


    <h2 class="text-3xl font-bold mt-16 mb-6">
        Foto Portfolio
    </h2>

    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">

        @foreach($photos as $photo)

            <img
                src="{{ asset('storage/' . $photo->gambar) }}"
                class="w-full h-64 object-cover rounded-xl shadow-lg"
            >

        @endforeach

    </div>

    <div class="text-center max-w-2xl mx-auto mb-10">
        <p class="text-gray-300">
            Berikut adalah salah satu hasil karya terbaik kami. 
            <!--Kami telah menangani berbagai proyek videografi seperti wedding, event, dan promosi bisnis.-->
        </p>
    </div>



    <div class="flex justify-center gap-4">
        <a href="/pemesanan"
           class="bg-blue-400 text-gray-900 px-6 py-3 rounded-lg font-semibold hover:bg-blue-500 transition">
            Pesan Jasa
        </a>

        <a href="https://www.instagram.com/taravisual.id/" target="_blank"
           class="bg-gray-700 px-6 py-3 rounded-lg hover:bg-gray-600 transition">
            Lihat Semua Portofolio
        </a>

    </div>

</div>

@endsection