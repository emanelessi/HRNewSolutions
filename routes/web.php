<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Auth;
use App\Http\Controllers;
use App\Http\Controllers\Admin;


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
Route::view('/home', 'home')->middleware('auth');

Auth::routes();

Route::get('/home', [Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'], function () {
    Route::get('/profile', [Controllers\ProfileController::class, 'index'])->name('profile');
    Route::post('/profile/edit', [Controllers\ProfileController::class, 'editprofile']);
    Route::get('/profile/edit', [Controllers\ProfileController::class, 'edit']);

    Route::get('/check/add', [Controllers\CheckController::class, 'add'])->name('Check');
    Route::get('/check/add', [Controllers\CheckController::class, 'create'])->name('create');
    Route::post('/check/add', [Controllers\CheckController::class, 'addcheck'])->name('addcheck');

    Route::get('/holiday', [Controllers\HolidayController::class, 'index'])->name('holiday');
    Route::get('/holiday/add', [Controllers\HolidayController::class, 'add'])->name('Holiday');
    Route::get('/holiday/add', [Controllers\HolidayController::class, 'create'])->name('create');
    Route::post('/holiday/add', [Controllers\HolidayController::class, 'addholiday'])->name('addholiday');

    Route::get('/job', [Controllers\JobController::class, 'index'])->name('job');

    Route::get('/project', [Controllers\ProjectController::class, 'index'])->name('project');

    Route::get('/reward', [Controllers\RewardsController::class, 'index'])->name('rewards');

});
Route::get('/admin/employee', [Admin\UserController::class, 'index'])->name('employee');
Route::get('/admin/employee/add', [Admin\UserController::class, 'add'])->name('employee');
Route::post('/admin/employee/add', [Admin\UserController::class, 'addemployee'])->name('addemployee');
Route::get('/admin/employee/add', [Admin\UserController::class, 'create'])->name('create');
Route::post('/admin/employee/edit', [Admin\UserController::class, 'update'])->name('editemployee');
Route::get('/admin/employee/edit/{id}', [Admin\UserController::class, 'edit']);
Route::get('/admin/employee/delete/{id}', [Admin\UserController::class, 'destroy']);

Route::get('/admin/holiday', [Admin\HolidayController::class, 'index'])->name('holiday');
Route::get('/admin/holiday/add', [Admin\HolidayController::class, 'add'])->name('holiday');
Route::get('/admin/holiday/add', [Admin\HolidayController::class, 'addholiday'])->name('addholiday');
Route::get('/admin/holiday/add', [Admin\HolidayController::class, 'create'])->name('create');
Route::post('/admin/holiday/edit', [Admin\HolidayController::class, 'update'])->name('editholiday');
Route::get('/admin/holiday/edit/{id}', [Admin\HolidayController::class, 'edit']);
Route::get('/admin/holiday/delete/{id}', [Admin\HolidayController::class, 'destroy']);

Route::get('/admin/job', [Admin\JobController::class, 'index'])->name('job');
Route::get('/admin/job/add', [Admin\JobController::class, 'add'])->name('job');
Route::get('/admin/job/add', [Admin\JobController::class, 'addjob'])->name('addjob');
Route::get('/admin/job/add', [Admin\JobController::class, 'create'])->name('create');
Route::post('/admin/job/edit', [Admin\JobController::class, 'update'])->name('editjob');
Route::get('/admin/job/edit/{id}', [Admin\JobController::class, 'edit']);
Route::get('/admin/job/delete/{id}', [Admin\JobController::class, 'destroy']);
Route::get('/admin/job/history', [Admin\JobController::class, 'showhistory']);
Route::get('/admin/job/history/{id}', [Admin\JobController::class, 'showhistory']);


Route::get('/admin/project', [Admin\ProjectController::class, 'index'])->name('project');
Route::get('/admin/project/add', [Admin\ProjectController::class, 'add'])->name('project');
Route::get('/admin/project/add', [Admin\ProjectController::class, 'addproject'])->name('addproject');
Route::get('/admin/project/add', [Admin\ProjectController::class, 'create'])->name('create');
Route::post('/admin/project/edit', [Admin\ProjectController::class, 'update'])->name('editproject');
Route::get('/admin/project/edit/{id}', [Admin\ProjectController::class, 'edit']);
Route::get('/admin/project/delete/{id}', [Admin\ProjectController::class, 'destroy']);

Route::get('/admin/reward', [Admin\RewardController::class, 'index'])->name('reward');
Route::get('/admin/reward/add', [Admin\RewardController::class, 'add'])->name('reward');
Route::get('/admin/reward/add', [Admin\RewardController::class, 'addreward'])->name('addreward');
Route::get('/admin/reward/add', [Admin\RewardController::class, 'create'])->name('create');
Route::post('/admin/reward/edit', [Admin\RewardController::class, 'update'])->name('editreward');
Route::get('/admin/reward/edit/{id}', [Admin\RewardController::class, 'edit']);
Route::get('/admin/reward/delete/{id}', [Admin\RewardController::class, 'destroy']);


Route::get('/admin/check', [Admin\CheckController::class, 'index'])->name('Check');
Route::get('/admin/check/add', [Admin\CheckController::class, 'add'])->name('Check');
Route::post('/admin/check/add', [Admin\CheckController::class, 'addcheck'])->name('addcheck');
Route::get('/admin/check/add', [Admin\CheckController::class, 'create'])->name('create');
Route::post('/admin/check/edit', [Admin\CheckController::class, 'update'])->name('editcheck');
Route::get('/admin/check/edit/{id}', [Admin\CheckController::class, 'edit']);
Route::get('/admin/check/delete/{id}', [Admin\CheckController::class, 'destroy']);

Route::get('/admin/department', [Admin\DepartmentController::class, 'index'])->name('department');
Route::get('/admin/department/add', [Admin\DepartmentController::class, 'add'])->name('department');
Route::post('/admin/department/add', [Admin\DepartmentController::class, 'adddepartment'])->name('adddepartment');
Route::get('/admin/department/add', [Admin\DepartmentController::class, 'create'])->name('create');
Route::post('/admin/department/edit', [Admin\DepartmentController::class, 'update'])->name('editdepartment');
Route::get('/admin/department/edit/{id}', [Admin\DepartmentController::class, 'edit']);
Route::get('/admin/department/delete/{id}', [Admin\DepartmentController::class, 'destroy']);

