<?php

use App\http\Controllers\MainController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/role_login', [MainController::class, 'role_login']);

Route::post('/register', [MainController::class, 'register']);

Route::post('/approval', [MainController::class, 'approval']);

Route::post('/role', [MainController::class, 'make_role']);

Route::post('/add_info', [MainController::class, 'additional_info']);

Route::post('/send_new_roster', [MainController::class, 'make_new_roster']);

Route::post('/display_roster', [MainController::class, 'display_roster']);

Route::post('/search_id', [MainController::class, 'search_id']);

Route::post('/employee', [MainController::class, 'change_salary']);

Route::post('/search_name', [MainController::class, 'search_name']);

Route::post('/search_role', [MainController::class, 'search_role']);

Route::post('/search_salary', [MainController::class, 'search_salary']);