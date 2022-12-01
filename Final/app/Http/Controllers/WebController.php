<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class WebController extends Controller
{

    public function home_view(){
        return view('home');
    }


    public function login_view(){
        return view('login');
    }

    public function register_view(){
        return view('register');
    }

    public function family_home(){
      return view('familyhome');

    public function patient_view(){
        return view('patienthome');
    }

    public function doctor_view(){
        return view('doctorhome');
    }


}
