<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;
use Illuminate\Support\Facades\Auth;

class PengumumnController extends Controller
{
    public function index() 
    {
        return view('frontend.informasi.pengumuman', [
            "title" => "Pengumuman",
            'pengumuman' => Pengumuman::latest()->get(),
            'user' => Auth::user()
        ]);
    }

    public function show(Pengumuman $pengumuman)
    {
        return view('frontend.informasi.pengumuman', [
            "title" => "Pengumuman",
            'pengumuman' => $pengumuman
        ]);
    }
}
