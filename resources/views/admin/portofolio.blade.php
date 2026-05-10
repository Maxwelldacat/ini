@extends('admin.layouts.app')

@section('content')

<div class="p-8">

    <h1 class="text-3xl font-bold mb-8">
        Kelola Portfolio
    </h1>

    <!-- VIDEO -->
    <h2 class="text-2xl font-bold mb-4">
        Video Portfolio
    </h2>

    <div class="grid grid-cols-2 gap-6 mb-10">

    @foreach($videos as $video)

    <div class="bg-white p-4 rounded shadow">

        <p class="font-bold mb-2">
            Slot Video {{ $video->position }}
        </p>

        <video controls class="w-full h-[300px] object-cover rounded-xl bg-black">
            <source src="{{ asset('storage/' . $video->file) }}">
        </video>

        <!-- FORM UPDATE VIDEO -->
        <form
            action="/admin/portofolio/video/{{ $video->id }}"
            method="POST"
            enctype="multipart/form-data"
        >
            @csrf
            @method('PUT')

            <input
                type="file"
                name="video"
                class="mb-3"
                required
            >

            <button type="submit" class="bg-[#196D7D] text-white px-6 py-3 rounded-lg font-semibold hover:bg-[#145663] transition">
                Update Video
            </button>

        </form>

    </div>

    @endforeach

    </div>

    <!-- FOTO -->
    <h2 class="text-2xl font-bold mb-4">
        Foto Portfolio
    </h2>

    <div class="grid grid-cols-3 gap-6">

    @foreach($photos as $photo)

    <div class="bg-white p-4 rounded shadow">

        <p class="font-bold mb-2">
            Slot Foto {{ $photo->position }}
        </p>

        <img
            src="{{ asset('storage/' . $photo->gambar) }}"
            class="w-full h-48 object-cover rounded mb-4"
        >

        <!-- FORM UPDATE FOTO -->
        <form
            action="/admin/portofolio/photo/{{ $photo->id }}"
            method="POST"
            enctype="multipart/form-data"
        >
            @csrf
            @method('PUT')

            <input
                type="file"
                name="gambar"
                class="mb-3"
                required
            >

            <button class="bg-[#196D7D] text-white px-6 py-3 rounded-lg font-semibold hover:bg-[#145663] transition">
                Update Foto
            </button>

        </form>

    </div>

    @endforeach

    </div>

</div>

@endsection