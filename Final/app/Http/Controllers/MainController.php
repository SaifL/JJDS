<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    // function that grabs the role of the user to send them to the proper home page
    // also verifies the user
    
    public function role_login(){
        $user = DB::table('users')->where('email', 'email@email.com')->first();
        var_dump($user->email);
      }
}
