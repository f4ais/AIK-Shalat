<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kategori;

class ModeController extends Controller
{
    public function dewasa()
    {
        $kategori = Kategori::where('slug','dewasa')->first();

        return view('mode',compact('kategori'));
    }

    public function anak()
    {
        $kategori = Kategori::where('slug','anak')->first();

        return view('mode',compact('kategori'));
    }
}