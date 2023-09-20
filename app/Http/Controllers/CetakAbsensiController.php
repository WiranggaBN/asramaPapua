<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absensi;

class CetakAbsensiController extends Controller
{
    public function cetak()
    {
        return view('backend.absensi.cetak', [
            'absensi' => Absensi::all() 
        ]);
    }
}
