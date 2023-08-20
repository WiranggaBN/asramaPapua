<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengumumanController extends Controller
{
    public function index(){        
        return view('frontend.informasi.pengumuman', [            
            "title" => "Pengumuman",
            "pengumumen" => Pengumuman::latest()->get(),
            'user' => Auth::user()
        ]);
    }

    public function show(Pengumuman $pengumuman)
    {
        return view('frontend.informasi.pengumuman', [
            "title" => "Pengumuman",
            "pengumuman" => $pengumuman
        ]);
    }
}
