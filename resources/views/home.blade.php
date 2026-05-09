@extends('layouts.app')

@section('content')

<section id="beranda" class="text-center py-20 bg-gray-200 relative h-[70vh] overflow-hidden w-screen left-1/2 right-1/2 -ml-[50vw] -mr-[50vw]">

    <!-- VIDEO BACKGROUND -->
    <video autoplay muted loop playsinline
        class="absolute top-0 left-0 w-full h-full object-cover">

        <source src="{{ asset('videos/hero.mp4') }}" type="video/mp4">

    </video>

    <!-- OVERLAY -->
    <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative z-10  text-center mt-10">
        <h1 class="text-5xl font-bold text-white mb-4">
            Jasa Dokumentasi Profesional
        </h1>

        <p class="text-white mb-6">
            Abadikan momen terbaikmu dengan kualitas sinematik
        </p>

        <a href="/videos" class="bg-[#196D7D] hover:bg-gray-500 text-white px-6 py-3 rounded-lg shadow ">
            Lihat Portfolio
        </a>
    </div>
</section>


<section id="tentang" class="py-16 bg-gray-100">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-2xl font-bold mb-4">Tentang Kami</h2>
        <p class="text-gray-600">
            Kami merupakan salah satu tim videografi & fotografi yang berpengalaman, kami bergerak dalam bidang dokumentasi, 
            seperti dokumentasii wisata, event, wedding. Kami berisikan 3 anggota yang bisa disesuaikan dengan domisili anda, 
            seperti solo jogja, malang surabaya sekitarnya, dan madura. Jadi tunggu apalagii, 
            mari hubungi kami untuk menciptakan momen yg berkesan & tak terlupakan!
        </p>
    </div>
</section>



<section id="jasa" class="py-16 bg-gray-200">
    <div class="max-w-6xl mx-auto text-center">
        <h2 class="text-2xl font-bold mb-10 text-center ">Jasa Kami</h2>
        <div class="grid md:grid-cols-2 gap-8 justify-center">

            <a href="/services/event"
            class="bg-white rounded-xl shadow p-10 text-center block hover:scale-105 duration-300">

                <h2 class="text-3xl font-bold mb-4">
                    Event
                </h2>

                <p class="text-gray-600">
                    Dokumentasi acara formal dan non-formal seperti seminar,
                    konser, gathering, dan kegiatan lainnya.
                </p>

            </a>


            <a href="/services/wisata"
            class="bg-white rounded-xl shadow p-10 text-center block hover:scale-105 duration-300">

                <h2 class="text-3xl font-bold mb-4">
                    Wisata
                </h2>

                <p class="text-gray-600">
                    Dokumentasi perjalanan dan trip wisata dengan konsep cinematic untuk mengabadikan momen terbaik.
                </p>

            </a>

        </div>
    </div>
</section>



<section id="contact" class="py-16 bg-gray-100">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-2xl font-bold mb-4">Kontak</h2>
        <p class="text-gray-600">Hubungi kami untuk informasi lebih lanjut</p>

        <div class="mt-4">
            <p>WhatsApp: 081333360727</p>
            <p>Email: bataraagurualamin@gmail.com</p>
        </div>
    </div>
</section>


@endsection