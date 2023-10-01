<?php

namespace App\Http\Controllers;

use App\Models\Penghuni;
use App\Models\User;
use App\Models\Kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardPenghuniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.penghuni.index', [
            'penghuni' => Penghuni::all(),
            'kamars' => Kamar::all(),
            'user' => Auth::user()
        ]);        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.penghuni.create', [
            'user' => Auth::user(),
            'kamars' => Kamar::all(),
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
            'password' => '',
            'level' => '',
            'kamar_id' => 'required',
            'email' => 'required',
            'nomor_telepon' => 'required|min:12|max:14',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',                        
            'nik' => 'required|min:14|max:20',
            'telpon_ortu' => 'required',
            'pekerjaan_ayah' => 'required',
            'pekerjaan_ibu' => 'required',                        
            'alamat_ortu' => 'required'
        ]);

        Penghuni::create($validatedData);
        User::create($validatedData);

        return redirect('/penghuni')->with('success', 'Berhasil Menambahkan Penghuni!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penghuni $penghuni)
    {
        return view('backend.penghuni.show', [
            'penghuni' => $penghuni
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penghuni $penghuni)
    {
        // $penghuni = Penghuni::latest()->get();    
        return view('backend.penghuni.edit', [
            'penghuni' => $penghuni,    
            'kamars' => Kamar::all(),        
            'user' => Auth::user(),
            // 'penghuni' => $penghunis
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penghuni $penghuni)
    {
        $rules = [
            'name' => 'required',
            'username' => 'required',
            'password' => '',
            'level' => '',
            
            'email' => 'required',
            'nomor_telepon' => 'required|min:12|max:14',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',                        
            'nik' => 'required|min:14|max:20',
            'telpon_ortu' => 'required',
            'pekerjaan_ayah' => 'required',
            'pekerjaan_ibu' => 'required',                        
            'alamat_ortu' => 'required'
        ];

        // if($request->theme != $penghuni->theme) {
        //     $rules['penghuni'] = 'required|unique:penghuni';
        // }

        $validatedData = $request->validate($rules);

        Penghuni::where('id', $penghuni->id)
            ->update($validatedData);   
        // User::where('id', $penghuni->id)
        //     ->update($validatedData);   

        return redirect('/penghuni')->with('success', 'Berhasil Mengubah Penghuni!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penghuni $penghuni)
    {
        Penghuni::destroy($penghuni->id);
        return redirect('/penghuni')->with('success', 'Berhasil Menghapus Penghuni!');
    }
}
