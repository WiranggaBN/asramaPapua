<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absensi;
use Illuminate\Support\Facades\Auth;

class AbsensiController extends Controller
{
    public function index()
    {
        return view('frontend.asrama.absensi', [
            "title" => "Absensi",
            'user' => Auth::user()
        ]);
    }

    public function store(Request $request) 
    {
        // return request()->all();
    
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'nama_kamar' => 'required|max:255',
            'tanggal_keluar' => 'required',
            'tanggal_masuk' => 'required',
            // 'jam_keluar' => 'required',
            'jam_masuk' => 'required',
            'alasan' => 'required|min:3|max:255',
            'keterangan' => 'required|min:3|max:255',            
        ]);

        Absensi::create($validatedData);

        return redirect('/absensi')->with('success', 'Berhasil!!');
    }
}
