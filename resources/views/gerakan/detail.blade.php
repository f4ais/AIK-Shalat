@extends('layouts.app')

@section('content')

<h1 class="text-4xl font-bold mb-6">

{{ $gerakan->nama }}

</h1>

@if($gerakan->gambar)

<img
src="{{ asset('storage/'.$gerakan->gambar) }}"
class="rounded-xl shadow mb-8 w-full max-w-xl">

@endif

<p class="text-lg leading-8">

{{ $gerakan->deskripsi }}

</p>

@if($gerakan->bacaan)

<div class="bg-white shadow rounded-xl p-6 mt-8">

<h2 class="text-2xl font-bold mb-5">

Bacaan

</h2>

<p class="text-right text-3xl leading-loose">

{{ $gerakan->bacaan->arab }}

</p>

<p class="italic mt-5">

{{ $gerakan->bacaan->latin }}

</p>

<p class="mt-4">

{{ $gerakan->bacaan->arti }}

</p>

</div>

@endif

<div class="flex justify-between mt-10">

@if($previous)

<a
href="{{ route('gerakan.detail',$previous->slug) }}"
class="bg-gray-300 px-5 py-3 rounded">

← Sebelumnya

</a>

@else

<div></div>

@endif



@if($next)

<a
href="{{ route('gerakan.detail',$next->slug) }}"
class="bg-green-600 text-white px-5 py-3 rounded">

Selanjutnya →

</a>

@endif

</div>

@endsection