<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardPengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.pengumuman.index', [
            'pengumuman' => Pengumuman::all(),
            'user' => Auth::user()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pengumuman.create', [
            'user' => Auth::user()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->file('gambar')->store('gambar');

        $validatedData = $request->validate([            
            // 'slug' => 'required|unique:berita',
            'slug' => 'required',
            'judul' => 'required',
            'tanggal' => 'required',
            'gambar' => 'image|file|max:1024',
            'kutipan' => 'required',
            'isi' => 'required'
        ]);

        if($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('gambar'); 
        }

        // $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Pengumuman::create($validatedData);

        return redirect('backend/pengumuman')->with('success', 'Berhasil Menambahkan Pengumuman!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengumuman $pengumuman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengumuman $pengumuman)
    {
        $penghunis = Penghuni::latest()->get();    
        return view('backend.pengumuman.edit', [
            'pengumuman' => $pengumuman,         
            'user' => Auth::user(),            
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengumuman $pengumuman)
    {
        $rules = [
            'slug' => 'required',
            'judul' => 'required',
            'tanggal' => 'required',
            'gambar' => 'required',
            'kutipan' => 'required',
            'isi' => 'required'
        ];

        // if($request->slug != $post->slug) {
        //     $rules['slug'] = 'required|unique:posts';
        // }

        $validatedData = $request->validate($rules);

        // $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Pengumuman::where('id', $pengumuman->id)
            ->update($validatedData);   

        return redirect('/backend/pengumuman')->with('success', 'Berhasil Mengubah Pengumuman');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengumuman $pengumuman)
    {
        Pengumuman::destroy($pengumuman->id);
        return redirect('backend/pengumuman')->with('success', 'Berhasil Menghapus Pengumuman!');
    }
}
