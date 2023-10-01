<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absensi;
use Illuminate\Support\Facades\Auth;

class CetakAbsensiBulanController extends Controller
{
    public function cetakTanggal()
    {
        return view('backend.absensi.cetakTanggal', [
            'absensi' => Absensi::all(),
            'user' => Auth::user()
        ]);
    }
}
