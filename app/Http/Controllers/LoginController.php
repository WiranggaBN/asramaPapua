<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        if($user = Auth::user()) {
            if ($user->level == '1') {
                return redirect()->intended('/penghuni');
            }elseif($user->level =='2'){
                return redirect()->intended('bernda');
            }
            // return redirect()->intended('home');
        }

        return view('login.view_login');
    }

    public function proses(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ],
        [
            'username.required' => 'Nama Pengguna tidak boleh kosong',
            'password.required' => 'Sandi tidak boleh kosong'
        ]
    );

    $kredensial = $request->only('username', 'password');

    if(Auth::attempt($kredensial)){
        $request->session()->regenerate();
        $user = Auth::user();
        if ($user->level == '1') {
            return redirect()->intended('/penghuni');
        }elseif($user->level =='2'){
            return redirect()->intended('bernda');
        }

        // if($user){
        //     return redirect()->intended('home');
        // }

        return redirect()->intended('/');
    }

        return back()->withErrors([
            'username' => 'Maaf Nama Pengguna atau sandi salah'
        ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
 
        return redirect('/');
    }
}