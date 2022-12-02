<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    // function that grabs the role of the user to send them to the proper home page
    // also verifies the user
    
    public function role_login(Request $request){
        //grabs the whole user's row from the database
        $user = DB::table('users')->where('email', $request->input('email'))->first();
        if ($user->password == $request->input('password')) {
            // grabs role info using the role id from the user
            $role = DB::table('roles')->where('role_id', $user->role_id)->first();
            $_SESSION['user'] = $user->user_id;
            if ($role->access_level == 1) {
                return redirect('/ahome');
            }
            elseif ($role->access_level == 2) {
                return redirect('/shome');
            }
            elseif ($role->access_level == 3) {
                return redirect('/dhome');
            }
            elseif ($role->access_level == 4) {
                return redirect('/chome');
            }
            elseif ($role->access_level == 5) {
                return redirect('/phome');
            }
            elseif ($role->access_level == 6) {
                return redirect('fhome');
            }
        }
        else {
            echo "no";
        }
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
