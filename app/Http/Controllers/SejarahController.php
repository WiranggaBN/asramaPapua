<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SejarahController extends Controller
{
    public function index(){        
        return view('frontend.tentang.sejarah', [            
            "title" => "Sejarah",
            'user' => Auth::user()
        ]);
    }
}
