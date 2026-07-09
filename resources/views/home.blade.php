@extends('layouts.app')


@section('title', 'Beranda')


@section('content')


<!-- HERO -->

<section class="bg-green-100 rounded-2xl p-10 mb-10">

    <div class="max-w-3xl">

        <h1 class="text-4xl font-bold text-green-800 mb-4">
            Belajar Tata Cara Sholat
            dengan Mudah
        </h1>


        <p class="text-gray-700 text-lg mb-6">
            Pelajari gerakan, bacaan, dan tata cara
            sholat secara lengkap untuk anak maupun dewasa.
        </p>


        <a href="{{ route('dewasa') }}"
           class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700">

            Mulai Belajar

        </a>


    </div>

</section>




<!-- KATEGORI -->

<section class="mb-10">


    <h2 class="text-2xl font-bold mb-5">
        Pilih Mode Belajar
    </h2>


    <div class="grid md:grid-cols-2 gap-6">


        @foreach($kategori as $item)


        <a href="{{ url('/'.$item->slug) }}"
           class="bg-white shadow rounded-xl p-6 hover:shadow-lg transition">


            <h3 class="text-xl font-bold text-green-700">

                {{ $item->nama }}

            </h3>


            <p class="text-gray-600 mt-2">

                Belajar sholat mode {{ $item->nama }}

            </p>


        </a>


        @endforeach


    </div>


</section>





<!-- GERAKAN -->

<section>


<h2 class="text-2xl font-bold mb-5">

    Gerakan Sholat Terbaru

</h2>



<div class="grid md:grid-cols-3 gap-6">


@foreach($gerakan as $item)



<div class="bg-white rounded-xl shadow overflow-hidden">


    @if($item->gambar)

    <img 
    src="{{ asset('storage/'.$item->gambar) }}"
    class="w-full h-48 object-cover">


    @endif



    <div class="p-5">


        <h3 class="font-bold text-lg">

            {{ $item->nama }}

        </h3>


        <p class="text-gray-600 text-sm mt-2">

            {{ Str::limit($item->deskripsi,100) }}

        </p>



        <a href="{{ route('gerakan.detail',$item->slug) }}"
           class="inline-block mt-4 text-green-600 font-semibold">


            Lihat Detail →

        </a>


    </div>


</div>


@endforeach


</div>


</section>



@endsection