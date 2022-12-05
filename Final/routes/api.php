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

Route::get('/testcase', [MainController::class, 'testcase']);

Route::post('/role', [MainController::class, 'make_role']);

Route::post('/add_info', [MainController::class, 'additional_info']);