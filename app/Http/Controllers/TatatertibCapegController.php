<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TatatertibCapegController extends Controller
{
    public function index(){        
        return view('capeg.tentang.tatatertib', [            
            "title" => "Tata Tertib",
            'user' => Auth::user()
        ]);
    }
}
