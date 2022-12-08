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
        return view('login');
    }

    public function register_view(){
        $roles = DB::table('roles')->get();
        $em_response = '';
        return view('register', ['roles' => $roles], ['em_response' => $em_response]);
    }

    public function family_home(){
      return view('familyhome');
    }

    public function patient_view(){
        return view('patienthome');
    }

    public function doctor_view(){
        return view('doctorhome');
    }

    public function caregiver_home(){
      return view('caregiverhome');
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
        return view('addinfo')
            ->with('first_name', $first_name)
            ->with('last_name', $last_name)
            ->with('group', $group)
            ->with('admission_date', $admission_date);
    }

    public function doc_appoint(){
        return view('appointment');
    }


    public function role_view(){
        return view('role');
    }

    public function employee(){
        $employees = DB::table('users')
            ->whereBetween('role_id', [1,4])->get();
        return view('employee');
    }

    public function patients(){
        return view('patients');
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
        return view('adminreport');
    }

    public function payment(){
        return view('payment');
    }

    public function patientofdoctor(){
        return view('patientofdoctor');
    }
}
