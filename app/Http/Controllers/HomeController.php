<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Gerakan;

class HomeController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();

        $gerakan = Gerakan::with('kategori')->orderBy('urutan')->limit(6)->get();

        return view('home', compact('kategori','gerakan'));
    }
}