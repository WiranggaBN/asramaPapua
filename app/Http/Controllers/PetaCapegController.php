<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetaCapegController extends Controller
{
    public function index(){        
        return view('capeg.informasi.peta', [            
            "title" => "Peta Lokasi",
            'user' => Auth::user()
        ]);
    }
}
