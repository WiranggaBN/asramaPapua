<?php

namespace App\Http\Controllers;

use App\Models\CalonPenghuni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardCapegController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.calon.index', [
            'calonPenghuni' => CalonPenghuni::all(),
            'user' => Auth::user()
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.calon.create', [
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
            'email' => 'required',
            'nomor_telepon' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required'
        ]);

        CalonPenghuni::create($validatedData);

        return redirect('/calon')->with('success', 'Berhasil Menambahkan Calon Penghuni!');
    }

    /**
     * Display the specified resource.
     */
    public function show(CalonPenghuni $calonPenghuni)
    {
        return view('backend.calon.show', [
            'calonPenghuni' => $calonPenghuni
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CalonPenghuni $calonPenghuni)
    {
        return view('backend.calon.edit', [
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

        return redirect('/calon')->with('success', 'Berhasil Mengubah Calon Penghuni!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CalonPenghuni $calonPenghuni)
    {
        CalonPenghuni::destroy($calonPenghuni->id);
        return redirect('/calon')->with('success', 'Berhasil Menghapus Calon Penghuni!');
    }
}
