<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function store()
    {
        // ka nabil ini validasi datanya untuk registrasi, aku komen dulu soalnya
        // kalo ga dikomen jadi error karna dimodel blom diatur

        // $request->validate([
        //     'fullname' => 'required|max:255',
        //     'username' => ['required', 'min:3', 'max:255', 'unique:users'],
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:5|max:255'
        // ]);

        // dd('registrasi berhasil');
        // $request->session()->flash('succes', 'Registrasi berhasil !! silahkan login');
        return redirect('/halamanutama');
    }
}
