<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetaController extends Controller
{
    public function index(){        
        return view('frontend.informasi.peta', [            
            "title" => "Peta Lokasi",
            'user' => Auth::user()
        ]);
    }
}
