@extends('layouts.app')

@section('content')

<h1 class="text-4xl font-bold mb-3">

Belajar Tata Cara Sholat

</h1>

<p class="text-gray-600 mb-10">

Pilih kategori pembelajaran.

</p>

<div class="grid md:grid-cols-2 gap-6">

    <a href="{{ route('gerakan.index','dewasa') }}"
        class="bg-blue-500 text-white rounded-xl p-8 shadow hover:scale-105 duration-300">

        <h2 class="text-2xl font-bold">

            Mode Dewasa

        </h2>

        <p>

            Panduan lengkap sholat.

        </p>

    </a>


    <a href="{{ route('gerakan.index','anak') }}"
        class="bg-pink-500 text-white rounded-xl p-8 shadow hover:scale-105 duration-300">

        <h2 class="text-2xl font-bold">

            Mode Anak

        </h2>

        <p>

            Belajar sholat dengan mudah.

        </p>

    </a>

</div>

@endsection