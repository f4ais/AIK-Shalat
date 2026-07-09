@extends('layouts.app')


@section('title', 'Mode Belajar')



@section('content')


<section class="mb-10">


    <div class="bg-green-100 rounded-2xl p-8">


        <h1 class="text-3xl font-bold text-green-800">

            Belajar Sholat 
            {{ ucfirst($kategori->nama) }}

        </h1>


        <p class="text-gray-700 mt-3">

            Pelajari tata cara sholat secara bertahap
            dengan panduan gerakan dan bacaan.

        </p>


    </div>


</section>





<section>


<h2 class="text-2xl font-bold mb-6">

    Daftar Gerakan Sholat

</h2>



<div class="grid md:grid-cols-3 gap-6">



@forelse($kategori->gerakan as $item)



<div class="bg-white rounded-xl shadow overflow-hidden">


    @if($item->gambar)

    <img 
    src="{{ asset('storage/'.$item->gambar) }}"
    class="w-full h-48 object-cover">

    @endif



    <div class="p-5">


        <h3 class="text-lg font-bold">

            {{ $item->nama }}

        </h3>


        <p class="text-gray-600 mt-2 text-sm">

            {{ Str::limit($item->deskripsi,100) }}

        </p>



        <a href="{{ route('gerakan.detail',$item->slug) }}"
           class="inline-block mt-4 text-green-600 font-semibold">

            Pelajari →

        </a>


    </div>


</div>



@empty


<p class="text-gray-500">

    Belum ada gerakan tersedia.

</p>


@endforelse



</div>


</section>


@endsection