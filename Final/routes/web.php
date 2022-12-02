<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

session_start();

Route::get('/', [WebController::class, 'home_view']);

Route::get('/login', [WebController::class, 'login_view']);

Route::get('/register', [WebController::class, 'register_view']);

Route::get('/phome', [WebController::class, 'patient_view']);

Route::get('/dhome', [WebController::class, 'doctor_view']);

Route::get('/fhome', [WebController::class, 'family_home']);

Route::get('/chome', [WebController::class, 'caregiver_home']);

Route::get('/ahome', [WebController::class, 'admin_home']);

Route::get('/shome', [WebController::class, 'supervisor_home']);

Route::get('/info', [WebController::class, 'add_info']);

Route::get('/appointment', [WebController::class, 'doc_appoint']);

Route::get('/role', [WebController::class, 'role_view']);

Route::get('/employee', [WebController::class, 'employee']);

Route::get('/patients', [WebController::class, 'patients']);

Route::get('/approval', [WebController::class, 'reg_approval']);

Route::get('/roster', [WebController::class, 'roster_view']);

Route::get('/makeroster', [WebController::class, 'new_roster']);

Route::get('/report', [WebController::class, 'admin_report']);

Route::get('/payment', [WebController::class, 'payment']);
