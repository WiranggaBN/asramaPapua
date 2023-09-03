<?php

namespace App\Http\Controllers;

use App\Models\CalonPenghuni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CalonPendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pendaftaran.calonpendaftaran.index', [
            'calonPenghuni' => CalonPenghuni::all(),
            'user' => Auth::user()
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pendaftaran.calonpendaftaran.create', [
            'user' => Auth::user()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'nomor_telepon' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required'
        ]);

        CalonPenghuni::create($validatedData);

        return redirect('/calonpendaftaran')->with('success', 'Berhasil Menambahkan Data Diri!');
    }

    /**
     * Display the specified resource.
     */
    public function show(CalonPenghuni $calonPenghuni)
    {
        return view('pendaftaran.calonpendaftaran.show', [
            'calonPenghuni' => $calonPenghuni
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CalonPenghuni $calonPenghuni)
    {
        return view('pendaftaran.calonpendaftaran.edit', [
            'calonPenghuni' => $calonPenghuni
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CalonPenghuni $calonPenghuni)
    {
        $rules = [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'nomor_telepon' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required'
        ];

        // if($request->theme != $penghuni->theme) {
        //     $rules['penghuni'] = 'required|unique:penghuni';
        // }

        $validatedData = $request->validate($rules);

        CalonPenghuni::where('id', $calonPenghuni->id)
            ->update($validatedData);   

        return redirect('/calonpendaftaran')->with('success', 'Berhasil Mengubah Data Diri!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CalonPenghuni $calonPenghuni)
    {
        CalonPenghuni::destroy($calonPenghuni->id);
        return redirect('/calonpendaftaran')->with('success', 'Berhasil Menghapus Data Diri!');
    }
}
