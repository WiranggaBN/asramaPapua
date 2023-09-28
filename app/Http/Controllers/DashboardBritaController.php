<?php

namespace App\Http\Controllers;

use App\Models\Brita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardBritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.berita.index', [
            'berita' => Brita::all(),
            'user' => Auth::user()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.berita.create', [
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

        Brita::create($validatedData);

        return redirect('backend/berita')->with('success', 'Berhasil Menambahkan Berita!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brita $brita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brita $brita)
    {
        return view('backend.berita.edit', [
            'brita' => $brita,         
            'user' => Auth::user(),            
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brita $brita)
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

        Brita::where('id', $brita->id)
            ->update($validatedData);   

        return redirect('/backend/berita')->with('success', 'Berhasil Mengubah Berita');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brita $brita)
    {
        Brita::destroy($brita->id);
        return redirect('backend/berita')->with('success', 'Berhasil Menghapus Berita!');
    }
}
