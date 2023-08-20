<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\Auth;

class BerandaController extends Controller
{
    public function index(){        
        return view('frontend.beranda.beranda', [            
            "title" => "Beranda",
            'user' => Auth::user()
        ]);
    }
}
