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
                return redirect();
            }
            elseif ($role->access_level == 2) {
                return redirect();
            }
            elseif ($role->access_level == 3) {
                return redirect();
            }
            elseif ($role->access_level == 4) {
                return redirect();
            }
            elseif ($role->access_level == 5) {
                return redirect();
            }
            elseif ($role->access_level == 6) {
                return redirect();
            }
        }
        else {
            echo "no";
        }
      }
}
