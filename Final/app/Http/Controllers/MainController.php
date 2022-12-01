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

    // Register function - Pulls the info from the form and inserts it into the table.
    // TODO: Need to add verification on whether said user already exists in the future.
    public function register(Request $request){
        DB::table('users')->insert([
            'role_id' => $request->input('role'),
            'first_name' => $request->input('firstName'),
            'last_name' => $request->input('lastName'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => $request->input('password'),
            //? Why is it named input?
            'date_of_birth' => $request->input('input')
        ]);
    }
}
