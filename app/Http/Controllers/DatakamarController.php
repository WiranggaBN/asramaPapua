<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DatakamarController extends Controller
{
    public function index(){        
        return view('frontend.asrama.datakamar', [            
            "title" => "Data Kamar",
            'user' => Auth::user()
        ]);
    }
}
