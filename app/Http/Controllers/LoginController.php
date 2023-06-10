<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('/Login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'email' => $request -> email,
            'password' => $request -> password
        ];

        if(Auth::attempt($data)){
            return redirect('admin/pasien')->with('success','Selamat Datang, Admin!');;
        }else{
            return redirect('/login')->with('error','Email atau password salah!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success','Anda berhasil keluar!');
    }
}
