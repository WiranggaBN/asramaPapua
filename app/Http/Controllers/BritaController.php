<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brita;
use Illuminate\Support\Facades\Auth;

class BritaController extends Controller
{
    public function index() 
    {
        return view('capeg.informasi.brita', [
            "title" => "Berita",
            "brita" => Brita::latest()->get(),
            'user' => Auth::user()
        ]);
    }

    public function show(Brita $brita)
    {
        return view('capeg.informasi.berita', [
            "title" => "Berita",
            "brita" => $brita
        ]);
    }
}
