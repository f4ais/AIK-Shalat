<?php

namespace App\Http\Controllers;


use App\Models\Gerakan;
use App\Models\Kategori;


class GerakanController extends Controller
{

    public function index($mode)
    {

        $kategori = Kategori::where(
            'slug',
            $mode
        )->first();


        $gerakan = Gerakan::where(
            'kategori_id',
            $kategori->id
        )
        ->orderBy('urutan')
        ->get();


        return view(
            'gerakan.index',
            compact(
                'kategori',
                'gerakan'
            )
        );

    }



    public function show($slug)
    {
        $gerakan = Gerakan::with('bacaan')->where('slug',$slug)->firstOrFail();

        $previous = Gerakan::where('urutan','kategori_id',$gerakan->kategori_id)->Where('urutan', '<', $gerakan->urutan)->orderByDesc('urutan')->first();

        $next = Gerakan::where('urutan','>',$gerakan->urutan)->orderBy('urutan')->first();

        return view('gerakan.detail',compact('gerakan','previous','next'));
    }

}