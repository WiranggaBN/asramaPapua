<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengumumanController extends Controller
{
    public function index() 
    {
        return view('capeg.informasi.pengumuman', [
            "title" => "Pengumuman",
            'pengumuman' => Pengumuman::latest()->get(),
            'user' => Auth::user()
        ]);
    }

    public function show(Pengumuman $pengumuman)
    {
        return view('capeg.informasi.pengumumn', [
            "title" => "Pengumuman",
            'pengumuman' => $pengumuman
        ]);
    }
}
