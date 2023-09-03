<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CalonPenghuni;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Validated;

class RegisterPendaftaranController extends Controller
{
    public function index()
    {
        return view('register-pendaftaran.index', [
            'title' => 'Pendaftaran', 
            'active' => 'register',
        ]);
    }

    public function store(Request $request) 
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',            
            'password' => 'required|min:8|max:20',
            'password_confirmation' => 'required|same:password'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        // CalonPenghuni::create($validatedData);

        // $request->session()->flash('success', 'Berhasil mendaftar! Silahkan login');

        return redirect('/login-pendaftaran')->with('success', 'Berhasil mendaftar! Silahkan login');
    }
}
