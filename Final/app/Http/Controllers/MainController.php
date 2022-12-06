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
                return redirect('/fhome');
            }
        }
        else {
            echo "no";
        }
      }


      //! Doesnt work rn
      //Shows additional patient info after the user id is entered
      public function additional_info(Request $request){
        $patient = DB::table('users')->where('user_id', $request->input('patient_id'))->first();
        $info = DB::table('patientinfo')->where('user_id', $request->input('patient_id'))->first();
        $first_name = $patient->first_name;
        $last_name = $patient->last_name;
        $group = $info->group_no;
        $admission_date = $info->admission_date;
        return view('addinfo')
            ->with('first_name', $first_name)
            ->with('last_name', $last_name)
            ->with('group', $group)
            ->with('admission_date', $admission_date);
      }

      // Adds new role with access level to the DB
      public function make_role(Request $request){
        DB::table('roles')->insert([
            'role' => $request->input('role'),
            'access_level' => $request->input('access_level')
        ]);
      }


    // Register function - Pulls the info from the form and inserts it into the table.
    public function register(Request $request){
        $email = DB::table('users')->where('email', $request->input('email'))->get();
        $role = $request->input('role');
        // This part of the function checks if the email already exists and stops the 
        // process before an error would occur
        if(count($email) > 0){
            $em_response = 'This email is not correct';
            $roles = DB::table('roles')->get();
            return view('register', ['em_response' => $em_response], ['roles' => $roles]);
        }
        
        // This part of the function checks whether the person is a patient or not
        if($role == 5){
            DB::table('approvals')->insert([
                'role_id' => $request->input('role'),
                'first_name' => $request->input('firstName'),
                'last_name' => $request->input('lastName'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'password' => $request->input('password'),
                'date_of_birth' => $request->input('DOB'),
                'family_code' => $request->input('familyCode'),
                'emergency_contact' => $request->input('emergencyContact'),
                'rel_emergency' => $request->input('relEmergency')
            ]);
        }
        else {
            DB::table('users')->insert([
                'role_id' => $request->input('role'),
                'first_name' => $request->input('firstName'),
                'last_name' => $request->input('lastName'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'password' => $request->input('password'),
                'date_of_birth' => $request->input('DOB')
            ]);
            return redirect(('/login'));
        }
        return redirect(('/register'));
    }
}
