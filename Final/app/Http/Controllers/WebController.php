<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function login_view(){
        return view('login');
    }

    public function register_view(){
        return view('register');
    }
}
