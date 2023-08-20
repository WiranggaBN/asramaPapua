<?php

namespace App\Http\Controllers;

use App\Models\Orangtua;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardOrangtuaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.orangtua.index', [
            'orangtua' => Orangtua::all(),
            'user' => Auth::user()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.orangtua.create', [
            'user' => Auth::user()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'email' => 'required',
            'nomor_telepon' => 'required',
            'pekerjaan_ayah' => 'required',
            'pekerjaan_ibu' => 'required',            
            'alamat' => 'required',
            'tanggal_lahir_ayah' => 'required',
            'tanggal_lahir_ibu' => 'required'
        ]);

        Orangtua::create($validatedData);

        return redirect('/orangtua')->with('success', 'Berhasil Menambahkan Orangtua!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Orangtua $orangtua)
    {
        return view('backend.orangtua.show', [
            'orangtua' => $orangtua
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Orangtua $orangtua)
    {
        return view('backend.orangtua.edit', [
            'orangtua' => $orangtua
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Orangtua $orangtua)
    {
        $rules = [
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'email' => 'required',
            'nomor_telepon' => 'required',
            'pekerjaan_ayah' => 'required',
            'pekerjaan_ibu' => 'required',            
            'alamat' => 'required',
            'tanggal_lahir_ayah' => 'required',
            'tanggal_lahir_ibu' => 'required'
        ];

        // if($request->theme != $orangtua->theme) {
        //     $rules['orangtua'] = 'required|unique:orangtua';
        // }

        $validatedData = $request->validate($rules);

        Orangtua::where('id', $orangtua->id)
            ->update($validatedData);   

        return redirect('/orangtua')->with('success', 'Berhasil Mengubah Orangtua!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orangtua $orangtua)
    {
        Orangtua::destroy($orangtua->id);
        return redirect('/orangtua')->with('success', 'Berhasil Menghapus Orangtua!');
    }
}
