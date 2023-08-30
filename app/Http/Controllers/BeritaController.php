<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    public function index() 
    {
        return view('frontend.informasi.berita', [
            "title" => "Berita",
            'berita' => Berita::all(),
            'user' => Auth::user()
        ]);
    }

    public function show(Berita $berita)
    {
        return view('frontend.informasi.berita', [
            "title" => "Berita",
            'brita' => $berita
        ]);
    }
}