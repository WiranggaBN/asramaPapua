<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class BerandaCapegController extends Controller
{
    public function index(){        
        return view('capeg.beranda.beranda', [            
            "title" => "Beranda",
            'user' => Auth::user()
        ]);
    }
}
