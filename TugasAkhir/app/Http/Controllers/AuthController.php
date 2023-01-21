<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('page.register');
    }

    public function welcome(Request $request)
    {
        $namaDepan = $request['fname'];
        $namaBelakang = $request['lname'];

        return view('page.welcome', ['namaDepan' => $namaDepan, 'namaBelakang' => $namaBelakang]);
    }
}
