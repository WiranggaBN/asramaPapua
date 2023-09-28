<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absensi;
use App\Models\Kamar;
use Illuminate\Support\Facades\Auth;

class AbsensiController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $kamars = Kamar::latest()->get();    
        return view('frontend.asrama.absensi', compact('kamars', 'user'), [
            "title" => "Absensi",
        ]);
    }

    public function store(Request $request) 
    {
        // return request()->all();
    
        $validatedData = $request->validate([
            'name' => 'required',
            'kamar_id' => 'required',
            'tanggal_keluar' => 'required',
            
            'jam_keluar' => '',
            
            'alasan' => 'required',
            
        ]);

        Absensi::create($validatedData);

        return redirect('/asrama/absensi')->with('success', 'Berhasil!!');
    }
}
