<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    // function that grabs the role of the user to send them to the proper home page
    // also verifies the user
    //! ELSE STATEMENT NEEDS TO BE CHANGED
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

      public function patient_id(Request $request){
        $tables = DB::table('users')
        ->join('patientinfo', 'users.user_id', '=','patientinfo.user_id')
        ->where('users.user_id','=',$request->input('user_id'))
        ->get();
        $patients = DB::table('users')->where('role_id', 5)->get();
        $infos = DB::table('patientinfo')->get();
        return view('patients')
            ->with('infos', $infos)
            ->with('patients', $patients)
            ->with('tables', $tables);
      }

      public function patient_name(Request $request){
        $tables = DB::table('users')
        ->join('patientinfo', 'users.user_id', '=','patientinfo.user_id')
        ->where('users.last_name','=',$request->input('last_name'))
        ->get();
        $patients = DB::table('users')->where('role_id', 5)->get();
        $infos = DB::table('patientinfo')->get();
        return view('patients')
            ->with('infos', $infos)
            ->with('patients', $patients)
            ->with('tables', $tables);
      }

      public function patient_relation(Request $request){
        $tables = DB::table('users')
        ->join('patientinfo', 'users.user_id', '=','patientinfo.user_id')
        ->where('patientinfo.rel_emergency','=',$request->input('rel_emergency'))
        ->get();
        $patients = DB::table('users')->where('role_id', 5)->get();
        $infos = DB::table('patientinfo')->get();
        return view('patients')
            ->with('infos', $infos)
            ->with('patients', $patients)
            ->with('tables', $tables);
      }

      public function patient_contact(Request $request){
        $tables = DB::table('users')
        ->join('patientinfo', 'users.user_id', '=','patientinfo.user_id')
        ->where('patientinfo.emergency_contact','=',$request->input('contact'))
        ->get();
        $patients = DB::table('users')->where('role_id', 5)->get();
        $infos = DB::table('patientinfo')->get();
        return view('patients')
            ->with('infos', $infos)
            ->with('patients', $patients)
            ->with('tables', $tables);
      }

      public function patient_admission(Request $request){
        $tables = DB::table('users')
        ->join('patientinfo', 'users.user_id', '=','patientinfo.user_id')
        ->where('patientinfo.admission_date','=',$request->input('admission_date'))
        ->get();
        $patients = DB::table('users')->where('role_id', 5)->get();
        $infos = DB::table('patientinfo')->get();
        return view('patients')
            ->with('infos', $infos)
            ->with('patients', $patients)
            ->with('tables', $tables);
      }


      public function search_id(Request $request){
        $employees = DB::table('users')
            ->whereBetween('role_id', [1,4])->get();
        $roles = DB::table('roles')
            ->whereBetween('access_level', [1,4])->get();
        $salaries = DB::table('salaries')->get();
        $tables = DB::table('users')
            ->join('roles', 'users.role_id', '=','roles.role_id')
            ->join('salaries', 'users.user_id','=','salaries.user_id')
            ->select('users.user_id','users.first_name','users.last_name','roles.role','salaries.salary')
            ->where('users.user_id', '=', $request->input('user_id'))
            ->get();
        return view('employee')
            ->with('tables', $tables)
            ->with('employees', $employees)
            ->with('roles', $roles)
            ->with('salaries', $salaries);
      }

      public function search_name(Request $request){
        $employees = DB::table('users')
            ->whereBetween('role_id', [1,4])->get();
        $roles = DB::table('roles')
            ->whereBetween('access_level', [1,4])->get();
        $salaries = DB::table('salaries')->get();
        $tables = DB::table('users')
            ->join('roles', 'users.role_id', '=','roles.role_id')
            ->join('salaries', 'users.user_id','=','salaries.user_id')
            ->select('users.user_id','users.first_name','users.last_name','roles.role','salaries.salary')
            ->where('users.last_name', '=', $request->input('last_name'))
            ->get();
        return view('employee')
            ->with('tables', $tables)
            ->with('employees', $employees)
            ->with('roles', $roles)
            ->with('salaries', $salaries);
      }

      public function search_role(Request $request){
        $employees = DB::table('users')
            ->whereBetween('role_id', [1,4])->get();
        $roles = DB::table('roles')
            ->whereBetween('access_level', [1,4])->get();
        $salaries = DB::table('salaries')->get();
        $tables = DB::table('users')
            ->join('roles', 'users.role_id', '=','roles.role_id')
            ->join('salaries', 'users.user_id','=','salaries.user_id')
            ->select('users.user_id','users.first_name','users.last_name','roles.role','salaries.salary')
            ->where('users.role_id', '=', $request->input('role_id'))
            ->get();
        return view('employee')
            ->with('tables', $tables)
            ->with('employees', $employees)
            ->with('roles', $roles)
            ->with('salaries', $salaries);
      }

      public function search_salary(Request $request){
        $employees = DB::table('users')
            ->whereBetween('role_id', [1,4])->get();
        $roles = DB::table('roles')
            ->whereBetween('access_level', [1,4])->get();
        $salaries = DB::table('salaries')->get();
        $tables = DB::table('users')
            ->join('roles', 'users.role_id', '=','roles.role_id')
            ->join('salaries', 'users.user_id','=','salaries.user_id')
            ->select('users.user_id','users.first_name','users.last_name','roles.role','salaries.salary')
            ->where('salaries.salary', '=', $request->input('salary'))
            ->get();
        return view('employee')
            ->with('tables', $tables)
            ->with('employees', $employees)
            ->with('roles', $roles)
            ->with('salaries', $salaries);
      }

      public function change_salary(Request $request){
        $salary = DB::table('salaries')->where('user_id', $request->input('user_id'))->get();
        $salaryCount = $salary->count();
        if ($salaryCount == 0) {
            DB::table('salaries')->insert(
                ['user_id' => $request->input('user_id'), 'salary' => $request->input('salary')]
            );
        }
        else {
            DB::table('salaries')
                ->where('user_id', $request->input('user_id'))
                ->update(['salary' => $request->input('salary')]);
        }
        return redirect('/employee');
      }

      // Adds new role with access level to the DB
      public function make_role(Request $request){
        DB::table('roles')->insert([
            'role' => $request->input('role'),
            'access_level' => $request->input('access_level')
        ]);
        return redirect('/role');
      }


      public function make_new_roster(Request $request){
        DB::table('roster')->insert([
            'date' => $request->input('Date'),
            'supervisor' => $request->input('Supervisor'),
            'doctor' => $request->input('Doctor'),
            'caregiver1' => $request->input('Caregiver1'),
            'caregiver2' => $request->input('Caregiver2'),
            'caregiver3' => $request->input('Caregiver3'),
            'caregiver4' => $request->input('Caregiver4')
        ]);
        return redirect('makeroster');
      }


      public function display_roster(Request $request){
        $info = DB::table('roster')->where('roster_id', $request->input('roster_id'))->first();
        $rosters = DB::table('roster')->get();
        $supervisor = $info->supervisor;
        $doctor = $info->doctor;
        $caregiver1 = $info->caregiver1;
        $caregiver2 = $info->caregiver2;
        $caregiver3 = $info->caregiver3;
        $caregiver4 = $info->caregiver4;
        return view('roster')
            ->with('supervisor', $supervisor)
            ->with('doctor', $doctor)
            ->with('caregiver1', $caregiver1)
            ->with('caregiver2', $caregiver2)
            ->with('caregiver3', $caregiver3)
            ->with('caregiver4', $caregiver4)
            ->with('rosters', $rosters);
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
            return redirect('/login');
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
    }

    // Approval function checks the status of the radio buttons when the ok button is pressed
    //and either pushes the changes then deletes or just deletes. However, if none are pressed than it just redirects to the page.
    public function approval(Request $request) {
        $check = $request->input('choice');
        $number = rand(1, 4);

        

        if($check == 1){
            $approval = DB::table('approvals')->where('app_id', $request->input('appId'))->first();
            DB::table('users')->insert([
                'role_id' => $approval->role_id,
                'first_name' => $approval->first_name,
                'last_name' => $approval->last_name,
                'email' => $approval->email,
                'phone' => $approval->phone,
                'password' => $approval->password,
                'date_of_birth' => $approval->date_of_birth
            ]);

            $newuser = DB::table('users')->latest('user_id')->first();
            DB::table('patientinfo')->insert([
                'user_id' => $newuser->user_id,
                'group_no' => $number,
                'family_code' => $approval->family_code,
                'emergency_contact' => $approval->emergency_contact,
                'rel_emergency' => $approval->rel_emergency,
                'admission_date' => date("Y-m-d")
            ]);

            DB::table('approvals')->where('app_id', $request->input('appId'))->delete();
        }
        else if($check == 2) {
            $approval = DB::table('approvals')->where('app_id', $request->input('appId'))->first();
            DB::table('approvals')->where('app_id', $request->input('appId'))->delete();
        }

        return redirect('/approval');
    }


    public function fhomedepot(Request $request) {
        
    }
}
