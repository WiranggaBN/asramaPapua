<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TatatertibController extends Controller
{
    public function index(){        
        return view('frontend.tentang.tatatertib', [            
            "title" => "Tata Tertib",
            'user' => Auth::user()
        ]);
    }
}
