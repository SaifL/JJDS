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

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [WebController::class, 'login_view']);

Route::get('/register', [WebController::class, 'register_view']);

Route::get('/phome', function () {
    return view('patienthome');
});