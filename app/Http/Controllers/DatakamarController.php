<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;
use App\Models\Penghuni;
use Illuminate\Support\Facades\Auth;

class DatakamarController extends Controller
{
    public function index(){        
        // return view('frontend.asrama.datakamar', [            
        //     "title" => "Data Kamar",
        //     'user' => Auth::user()
        // ]);        

        $user = Auth::user();
        $kamars = Kamar::all();    
        return view('frontend.asrama.datakamar', compact('kamars', 'user'), [
            "title" => "Data Kamar",
        ]);
    }
    
}
