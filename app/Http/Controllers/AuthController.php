<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function login_auth(Request $request)
    {
        dd($request->all());
    }

    public function register()
    {
        return view('auth.register');
    }
}
