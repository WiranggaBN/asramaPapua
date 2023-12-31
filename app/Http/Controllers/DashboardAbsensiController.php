<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardAbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {                
        $user = Auth::user();

        $absensi = Absensi::latest()->when(request()->q, function($absensi) {
            $absensi = $absensi->where('tanggal_keluar', 'like', '%'. request()->q . '%');
        })->paginate(10);

        return view('backend.absensi.index', compact('absensi', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        $kamars = Kamar::latest()->get();    
        return view('backend.absensi.create', compact('kamars', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'kamar_id' => 'required',
            'tanggal_keluar' => 'required',
            'tanggal_masuk' => 'required',
            'jam_keluar' => 'required',
            'jam_masuk' => 'required',
            'alasan' => 'required',
            'keterangan' => 'required',
            'validasi' => 'required',
        ]);

        Absensi::create($validatedData);

        return redirect('/absensi')->with('success', 'Berhasil Menambahkan Absensi!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Absensi $absensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Absensi $absensi)
    {
        $kamars = Kamar::latest()->get();    
        return view('backend.absensi.edit', [
            'absensi' => $absensi,            
            'user' => Auth::user(),
            'kamars' => $kamars
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Absensi $absensi)
    {
        $rules = [
            
            'tanggal_masuk' => 'required',
            
            'jam_masuk' => 'required',
            
            'keterangan' => 'required',
            'validasi' => 'required',
        ];

        // if($request->theme != $penghuni->theme) {
        //     $rules['penghuni'] = 'required|unique:penghuni';
        // }

        $validatedData = $request->validate($rules);

        Absensi::where('id', $absensi->id)
            ->update($validatedData);   

        return redirect('/absensi')->with('success', 'Berhasil Mengubah Absensi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Absensi $absensi)
    {
        Absensi::destroy($absensi->id);
        return redirect('/absensi')->with('success', 'Berhasil Menghapus Absensi!');
    }
}
