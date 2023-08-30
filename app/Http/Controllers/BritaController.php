<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brita;
use Illuminate\Support\Facades\Auth;

class BritaController extends Controller
{
    public function index() 
    {
        return view('frontend.informasi.brita', [
            "title" => "Berita",
            "berita" => Brita::latest()->get(),
            'user' => Auth::user()
        ]);
    }

    public function show(Brita $brita)
    {
        return view('frontend.informasi.brita', [
            "title" => "Berita",
            "brita" => $brita
        ]);
    }
}
