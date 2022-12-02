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
        return view('addinfo');
    }

    public function doc_appoint(){
        return view('appointment');
    }

    public function role_view(){
        return view('role');
    }

    public function employee(){
        return view('employee');
    }

    public function patients(){
        return view('patients');
    }

    public function reg_approval(){
        return view('regapproval');
    }

    public function roster_view(){
        return view('roster');
    }

    public function new_roster(){
        return view('newroster');
    }

    public function admin_report(){
        return view('adminreport');
    }

    public function payment(){
        return view('payment');
    }

}
