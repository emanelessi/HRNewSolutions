<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\EmployeeController;
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

Route::post('/register',[EmployeeController::class,'register']);
Route::post('/login',[EmployeeController::class,'login']);
Route::group(['middleware'=>'auth:api'],function (){
    Route::get('profile/{id?}',[EmployeeController::class,'profile']);
    Route::put('profile',[EmployeeController::class,'editProfile']);
    Route::post('projects',[EmployeeController::class,'projects']);
    Route::post('checkinout',[EmployeeController::class,'checkinout']);
    Route::post('holiday',[EmployeeController::class,'holiday']);
    Route::post('holidays',[EmployeeController::class,'holidays']);
    Route::post('job',[EmployeeController::class,'job']);
    Route::post('rewards',[EmployeeController::class,'rewards']);
});
