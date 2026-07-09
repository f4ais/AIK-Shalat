@extends('layouts.app')


@section('title', $gerakan->nama)



@section('content')


<div class="max-w-4xl mx-auto">


    <!-- Judul -->

    <div class="bg-green-100 rounded-xl p-6 mb-8">

        <h1 class="text-3xl font-bold text-green-800">
            {{ $gerakan->nama }}
        </h1>

        <p class="text-gray-700 mt-2">
            Panduan gerakan sholat secara lengkap.
        </p>

    </div>




    <!-- GAMBAR -->


    <div class="bg-white rounded-xl shadow p-6 mb-8">


        <h2 class="text-xl font-bold mb-4">
            Gerakan
        </h2>


        @if($gerakan->gambar)

            <img
            src="{{ asset('storage/'.$gerakan->gambar) }}"
            class="rounded-xl w-full max-h-96 object-cover">


        @else

            <p class="text-gray-500">
                Gambar belum tersedia.
            </p>

        @endif


    </div>





    <!-- DESKRIPSI -->


    <div class="bg-white rounded-xl shadow p-6 mb-8">


        <h2 class="text-xl font-bold mb-4">
            Cara Melakukan
        </h2>


        <p class="text-gray-700 leading-relaxed">

            {{ $gerakan->deskripsi }}

        </p>


    </div>





    <!-- VIDEO -->


    <div class="bg-white rounded-xl shadow p-6 mb-8">


        <h2 class="text-xl font-bold mb-4">
            Video Tutorial
        </h2>



        @if($gerakan->video)


        <video controls class="w-full rounded-xl">

            <source 
            src="{{ asset('storage/'.$gerakan->video) }}"
            type="video/mp4">

        </video>


        @else


        <p class="text-gray-500">
            Video belum tersedia.
        </p>


        @endif


    </div>






    <!-- BACAAN -->


    <div class="bg-white rounded-xl shadow p-6 mb-8">


        <h2 class="text-xl font-bold mb-5">
            Bacaan
        </h2>



        @if($gerakan->bacaan)


            <div class="space-y-4">


                <p class="text-right text-2xl leading-loose">

                    {{ $gerakan->bacaan->arab }}

                </p>



                <p class="italic text-gray-700">

                    {{ $gerakan->bacaan->latin }}

                </p>



                <p>

                    {{ $gerakan->bacaan->terjemahan }}

                </p>




                @if($gerakan->bacaan->audio)


                <audio controls class="w-full">

                    <source
                    src="{{ asset('storage/'.$gerakan->bacaan->audio) }}"
                    type="audio/mpeg">

                </audio>


                @endif


            </div>


        @else


            <p class="text-gray-500">
                Bacaan belum tersedia.
            </p>


        @endif



    </div>





    <!-- NAVIGASI -->


    <div class="flex justify-between mb-10">


        @if($previous)

        <a href="{{ route('gerakan.detail',$previous->slug) }}"
           class="bg-gray-200 px-5 py-3 rounded-lg">

            ← Sebelumnya

        </a>

        @else

        <div></div>

        @endif





        @if($next)

        <a href="{{ route('gerakan.detail',$next->slug) }}"
           class="bg-green-600 text-white px-5 py-3 rounded-lg">

            Selanjutnya →

        </a>

        @endif


    </div>


</div>



@endsection