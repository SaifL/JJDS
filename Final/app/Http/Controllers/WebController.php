<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{

    public function home_view(){
        return view('home');
    }


    public function login_view(){
        $er_msg = '';
        return view('login', ['er_msg' => $er_msg]);
    }

    public function register_view(){
        $roles = DB::table('roles')->get();
        $em_response = '';
        return view('register', ['roles' => $roles], ['em_response' => $em_response]);
    }

    public function family_home(){
        $doctor = "";
        $caregiver = "";
        $check = 0;
        $morningMed = 0;
        $afternoonMed = 0;
        $nightMed = 0;
        $breakfast = 0;
        $lunch = 0;
        $dinner = 0;
        return view('familyhome')
      ->with('doctor', $doctor)
      ->with('caregiver', $caregiver)
      ->with('check', $check)
      ->with('morningmed', $morningMed)
      ->with('afternoonmed', $afternoonMed)
      ->with('nightmed', $nightMed)
      ->with('breakfast', $breakfast)
      ->with('lunch', $lunch)
      ->with('dinner', $dinner);
    }

    public function patientView(){
        $patients = DB::table('users')->where("user_id", $_SESSION['user'])->get();
        $doctor = "";
        $caregiver = "";
        $check = 0;
        $morningMed = 0;
        $afternoonMed = 0;
        $nightMed = 0;
        $breakfast = 0;
        $lunch = 0;
        $dinner = 0;
        return view('patienthome')
    ->with('patients', $patients)
      ->with('doctor', $doctor)
      ->with('caregiver', $caregiver)
      ->with('check', $check)
      ->with('morningmed', $morningMed)
      ->with('afternoonmed', $afternoonMed)
      ->with('nightmed', $nightMed)
      ->with('breakfast', $breakfast)
      ->with('lunch', $lunch)
      ->with('dinner', $dinner);
    }

    public function doctor_view(){
        date_default_timezone_set('America/New_York');
        $current_date = date('Y/m/d');
        $patients = DB::table('users')
        ->where('role_id', 5)->get();
        $dates = DB::table('prescription')->get();
        $comment = DB::table('prescription')->get();
        $medicine = DB::table('prescription')->get();
        $tables = DB::table('users')
        ->join('roles', 'users.role_id', '=','roles.role_id')
        ->join('prescription', 'users.user_id','=','prescription.patient_id')
        ->select('users.first_name','users.last_name', 'prescription.date', 'prescription.comment', 'prescription.morning_med', 'prescription.afternoon_med', 'prescription.night_med')
        ->where('users.role_id', 5)
        ->get();
        $appointment = [];
        return view('doctorhome')
        ->with('tables', $tables)
        ->with('medicine', $medicine)
        ->with('patients', $patients)
        ->with('dates', $dates)
        ->with('comment', $comment)
        ->with('appointment', $appointment);
    }

    public function caregiver_home(){
        date_default_timezone_set('America/New_York');
        $caregiver = DB::table('users')->where('user_id', '=', $_SESSION['user'])->first();
        $carename = $caregiver->first_name . " " . $caregiver->last_name;
        $roster = DB::table('roster')->latest('date')->first();
        $group_no = 0;
        $todaysdate = date('Y-m-d');
        

        if($roster->caregiver1 == $carename){
            $group_no = 1;
        }
        else if($roster->caregiver2 == $carename){
            $group_no = 2;
        }
        else if($roster->caregiver3 == $carename){
            $group_no = 3;
        }
        else if($roster->caregiver4 == $carename){
            $group_no = 4;
        }

        $patientstuff = DB::table('users')
        ->join('patientinfo', 'users.user_id', '=', 'patientinfo.user_id')
        ->select('users.user_id')
        ->where('patientinfo.group_no', '=', $group_no)
        ->get();

        $patientswork = DB::table('users')
        ->join('daily', 'users.user_id', '=', 'daily.patient_id')
        ->join('patientinfo', 'users.user_id', '=', 'patientinfo.user_id')
        ->select('daily.date', 'users.user_id')
        ->where('patientinfo.group_no', '=', $group_no)
        ->where('daily.date', '=', $todaysdate)
        ->get();
        

        if(count($patientswork) == null){
            foreach ($patientstuff as $patient) {
                    DB::table('daily')->insert(
                        ['patient_id' => $patient->user_id, 'date' => $todaysdate, 'morning_med' => 0, 
                        'afternoon_med' => 0, 'night_med' => 0, 'breakfast' => 0, 'lunch' => 0, 'dinner' => 0]
                    );
            }
        }
        

        $patients = DB::table('users')
        ->join('patientinfo', 'users.user_id', '=', 'patientinfo.user_id')
        ->join('daily', 'users.user_id', '=', 'daily.patient_id')
        ->select('users.user_id', 'users.first_name', 'users.last_name', 'daily.morning_med', 'daily.afternoon_med', 
        'daily.night_med', 'daily.breakfast', 'daily.lunch', 'daily.dinner')
        ->where('patientinfo.group_no', '=', $group_no)
        ->where('daily.date', '=', $todaysdate)
        ->get();



        return view('caregiverhome')
      ->with('patients', $patients);
    }

    public function admin_home(){
        return view('adminhome');
    }

    public function supervisor_home(){
        return view('supervisorhome');
    }

    public function add_info(){
        $first_name = '';
        $last_name = '';
        $group = '';
        $admission_date = '';
        $patients = DB::table('users')->where('role_id', 5)->get();
        return view('addinfo')
            ->with('patients', $patients)
            ->with('first_name', $first_name)
            ->with('last_name', $last_name)
            ->with('group', $group)
            ->with('admission_date', $admission_date);
    }

    public function doc_appoint(){
        $dates = DB::table('roster')->get();
        $patients = DB::table('users')->where('role_id', 5)->get();
        $doctors = DB::table('roster')->get();
        $lname = '';
        $fname = '';
        $d = '';
        $user_id = '';
        return view('appointment')
            ->with('user_id', $user_id)
            ->with('d', $d)
            ->with('fname', $fname)
            ->with('lname', $lname)
            ->with('doctors', $doctors)
            ->with('patients', $patients)
            ->with('dates', $dates);
    }


    public function role_view(){
        return view('role');
    }

    public function employee(){
        $employees = DB::table('users')
            ->whereBetween('role_id', [1,4])->get();
        $roles = DB::table('roles')
            ->whereBetween('access_level', [1,4])->get();
        $salaries = DB::table('salaries')->get();
        $tables = DB::table('users')
            ->join('roles', 'users.role_id', '=','roles.role_id')
            ->join('salaries', 'users.user_id','=','salaries.user_id')
            ->select('users.user_id','users.first_name','users.last_name','roles.role','salaries.salary')
            ->get();
        return view('employee')
            ->with('tables', $tables)
            ->with('employees', $employees)
            ->with('roles', $roles)
            ->with('salaries', $salaries);
    }

    public function patients(){
        $tables = DB::table('users')
        ->join('patientinfo', 'users.user_id', '=','patientinfo.user_id')
        ->get();
        $patients = DB::table('users')->where('role_id', 5)->get();
        $infos = DB::table('patientinfo')->get();
        return view('patients')
            ->with('infos', $infos)
            ->with('patients', $patients)
            ->with('tables', $tables);
    }

    public function reg_approval(){
        $users = DB::table('approvals')->get();
        return view('regapproval', ['users' => $users]);
    }

    public function roster_view(){
        $rosters = DB::table('roster')->get();
        $supervisor = '';
        $doctor = '';
        $caregiver1 = '';
        $caregiver2 = '';
        $caregiver3 = '';
        $caregiver4 = '';
        return view('roster')
            ->with('supervisor', $supervisor)
            ->with('doctor', $doctor)
            ->with('caregiver1', $caregiver1)
            ->with('caregiver2', $caregiver2)
            ->with('caregiver3', $caregiver3)
            ->with('caregiver4', $caregiver4)
            ->with('rosters', $rosters);
    }

    public function new_roster(){
        $supervisors = DB::table('users')->where('role_id', '=', 2)->get();
        $doctors = DB::table('users')->where('role_id', '=', 3)->get();
        $caregivers = DB::table('users')->where('role_id', '=', 4)->get();
        return view('newroster')
            ->with('supervisors', $supervisors)
            ->with('doctors', $doctors)
            ->with('caregivers', $caregivers);
    }

    public function admin_report(){
        $patients = [];
        $reportdates = DB::table('daily')
        ->select('date')
        ->distinct()->get();


        return view('adminreport')
        ->with('patients', $patients)
        ->with('reportdates', $reportdates);
    }

    public function payment(){
        return view('payment');
    }

    public function patientofdoctor(){
        return view('patientofdoctor');
    }
}
