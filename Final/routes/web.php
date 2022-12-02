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

Route::get('/addinfo', [WebController::class, 'additional_info']);

Route::get('appointment', [WebController::class, 'appointment']);