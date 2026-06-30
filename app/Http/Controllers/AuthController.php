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
}
