@extends('layouts.app')

@section('content')

<h1 class="text-3xl font-bold mb-8">

{{ $kategori->nama }}

</h1>

<div class="grid md:grid-cols-3 gap-6">

@foreach($gerakan as $item)

<div class="bg-white rounded-xl shadow overflow-hidden">

    @if($item->gambar)

        <img
            src="{{ asset('storage/'.$item->gambar) }}"
            class="w-full h-48 object-cover">

    @endif

    <div class="p-5">

        <h2 class="font-bold text-xl">

            {{ $item->nama }}

        </h2>

        <p class="text-gray-600 mt-2">

            {{ Str::limit($item->deskripsi,80) }}

        </p>

        <a
        href="{{ route('gerakan.detail',$item->slug) }}"
        class="inline-block mt-4 bg-green-600 text-white px-4 py-2 rounded">

            Pelajari

        </a>

    </div>

</div>

@endforeach

</div>

@endsection