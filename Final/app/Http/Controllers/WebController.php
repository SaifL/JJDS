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

    public function patient_view(){
        return view('patienthome');
    }

    public function doctor_view(){
        return view('doctorhome');
    }


    // function that grabs the role of the user to send them to the proper home page
    // also verifies the user
    //! VERY MUCH NOT DONE
    //? Is anime good?
    public function role_login(){
      $email = request()->input('email');
      $user = Users::where('email', $email)->get();
      $password = request()->input('password');
      if ($password == $user->password){
        // if () {
        //     # code...
        // }
        echo $user;
      }
      else{
        return view('login');
      }
    }
}
