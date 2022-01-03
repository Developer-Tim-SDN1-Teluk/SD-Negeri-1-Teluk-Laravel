<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index',[
            'tittle' => 'Login'
        ]);
    }

    public function login(Request $request)
    {
        // validasi data
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        
    }
}
