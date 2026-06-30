<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //show register form
    public function register()
    {
        return view('auth.register', ['title' => 'Register']);
    }

    //show login form
    public function login()
    {
        return view('auth.login', ['title' => 'Login']);
    }
}
