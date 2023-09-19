<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Penghuni;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardKamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.kamar.index', [
            'kamar' => Kamar::all(),
            'user' => Auth::user()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        $penghunis = Penghuni::latest()->get();    
        return view('backend.kamar.create', compact('penghunis', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nomor_kamar' => 'required',
            'namakamar' => 'required',
            'kapasitas_kamar' => 'required',
            'aset_kamar' => 'required',
            'penghuni_id' => 'required',
            'status_kamar' => 'required',
        ]);

        Kamar::create($validatedData);

        return redirect('/kamar')->with('success', 'Berhasil Menambahkan Data Kamar!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kamar $kamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kamar $kamar)
    {
        $penghunis = Penghuni::latest()->get();    
        return view('backend.kamar.edit', [
            'kamar' => $kamar,            
            'user' => Auth::user(),
            'penghuni' => $penghunis
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kamar $kamar)
    {
        $rules = [
            'nomor_kamar' => 'required',
            'namakamar' => 'required',
            'kapasitas_kamar' => 'required',
            'aset_kamar' => 'required',
            'penghuni_id' => 'required',
            'status_kamar' => 'required',
        ];

        // if($request->theme != $penghuni->theme) {
        //     $rules['penghuni'] = 'required|unique:penghuni';
        // }

        $validatedData = $request->validate($rules);

        Kamar::where('id', $kamar->id)
            ->update($validatedData);   

        return redirect('/kamar')->with('success', 'Berhasil Mengubah Data Kamar!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kamar $kamar)
    {
        Kamar::destroy($kamar->id);
        return redirect('/kamar')->with('success', 'Berhasil Menghapus Data Kamar!');
    }
}
