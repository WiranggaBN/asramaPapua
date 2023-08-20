<?php

namespace App\Http\Controllers;

use App\Models\DataKamar;
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
            'kamar' => DataKamar::all(),
            'user' => Auth::user()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.kamar.create', [
            'user' => Auth::user()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DataKamar $dataKamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataKamar $dataKamar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataKamar $dataKamar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataKamar $dataKamar)
    {
        //
    }
}
