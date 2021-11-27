<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\EmployeeController;
use \App\Http\Controllers\AdminController;
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

Route::middleware([\App\Http\Middleware\Admin::class])->group(function(){
    Route::get('home', [AdminController::class,'home']);

    Route::post('employees', [AdminController::class,'employees']);
    Route::post('employee', [AdminController::class,'employee']);
    Route::put('employee/{id}',[AdminController::class,'editEmployee']);
    Route::delete('employee/{id}', [AdminController::class,'deleteEmployee']);

    Route::post('all/holidays', [AdminController::class,'holidays']);
    Route::post('add/holiday/{id}',[AdminController::class,'holiday']);
    Route::delete('holiday/{id}',[AdminController::class,'deleteHoliday']);
    Route::put('holiday/{id}',[AdminController::class,'editHoliday']);

    Route::post('jobs',[AdminController::class,'jobs']);
    Route::post('add/job',[AdminController::class,'job']);
    Route::delete('job/{id}',[AdminController::class,'deleteJob']);
    Route::put('job/{id}',[AdminController::class,'editJob']);

    Route::post('all/projects',[AdminController::class,'projects']);
    Route::post('add/project/{id}',[AdminController::class,'project']);
    Route::delete('project/{id}',[AdminController::class,'deleteProject']);
    Route::put('project/{id}',[AdminController::class,'editProject']);

    Route::post('all/rewards',[AdminController::class,'rewards']);
    Route::post('reward/{id}',[AdminController::class,'reward']);
    Route::delete('reward/{id}',[AdminController::class,'deleteReward']);
    Route::put('reward/{id}',[AdminController::class,'editReward']);

    Route::post('all/jobhistories',[AdminController::class,'jobhistories']);
    Route::post('jobhistory/{id}',[AdminController::class,'jobhistory']);
    Route::delete('jobhistory/{id}',[AdminController::class,'deleteJobhistory']);
    Route::put('jobhistory/{id}',[AdminController::class,'editJobhistory']);

    Route::post('all/checkinouts',[AdminController::class,'checkinouts']);
    Route::post('checkinout/{id}',[AdminController::class,'checkinout']);
    Route::delete('checkinout/{id}',[AdminController::class,'deleteCheckinout']);
    Route::put('checkinout/{id}',[AdminController::class,'editCheckinout']);

    Route::post('all/departments',[AdminController::class,'departments']);
    Route::post('department/{id}',[AdminController::class,'department']);
    Route::delete('department/{id}',[AdminController::class,'deleteDepartment']);
    Route::put('department/{id}',[AdminController::class,'editDepartment']);

});
