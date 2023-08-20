<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SejarahCapegController extends Controller
{
    public function index(){        
        return view('capeg.tentang.sejarah', [            
            "title" => "Sejarah",
            'user' => Auth::user()
        ]);
    }
}
