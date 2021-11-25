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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::view('/home', 'home')->middleware('auth');

Auth::routes();

Route::get('/home', [Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'], function () {
    Route::get('/profile', [Controllers\ProfileController::class, 'index'])->name('profile');
    Route::get('/profile/edit', [Controllers\ProfileController::class, 'editprofile']);

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
Route::get('/employee', [Admin\UserController::class, 'index'])->name('employee');
Route::get('/employee/add', [Admin\UserController::class, 'add'])->name('employee');
Route::get('/employee/add', [Admin\UserController::class, 'create'])->name('create');
Route::post('/employee/edit', [Admin\UserController::class, 'edit']);
Route::get('/employee/delete', [Admin\UserController::class, 'destroy']);

Route::get('/holiday', [Admin\HomeController::class, 'index'])->name('holiday');
Route::get('/holiday/add', [Admin\HomeController::class, 'add'])->name('holiday');
Route::get('/holiday/add', [Admin\HomeController::class, 'create'])->name('create');
Route::post('/holiday/edit', [Admin\HomeController::class, 'edit']);
Route::get('/holiday/delete', [Admin\HomeController::class, 'destroy']);

Route::get('/job', [Admin\JobController::class, 'index'])->name('job');
Route::get('/job/add', [Admin\JobController::class, 'add'])->name('job');
Route::get('/job/add', [Admin\JobController::class, 'create'])->name('create');
Route::post('/job/edit', [Admin\JobController::class, 'edit']);
Route::get('/job/delete', [Admin\JobController::class, 'destroy']);
Route::get('/job/history', [Admin\JobController::class, 'showhistory']);


Route::get('/project', [Admin\ProjectController::class, 'index'])->name('project');
Route::get('/project/add', [Admin\ProjectController::class, 'add'])->name('project');
Route::get('/project/add', [Admin\ProjectController::class, 'create'])->name('create');
Route::post('/project/edit', [Admin\ProjectController::class, 'edit']);
Route::get('/project/delete', [Admin\ProjectController::class, 'destroy']);

Route::get('/reward', [Admin\RewardController::class, 'index'])->name('reward');
Route::get('/reward/add', [Admin\RewardController::class, 'add'])->name('reward');
Route::get('/reward/add', [Admin\RewardController::class, 'create'])->name('create');
Route::post('/reward/edit', [Admin\RewardController::class, 'edit']);
Route::get('/reward/delete', [Admin\RewardController::class, 'destroy']);


Route::get('/check', [Admin\CheckController::class, 'index'])->name('Check');
Route::get('/check/add', [Admin\CheckController::class, 'add'])->name('Check');
Route::get('/check/add', [Admin\CheckController::class, 'create'])->name('create');
Route::post('/check/add', [Admin\CheckController::class, 'addcheck'])->name('addcheck');
Route::post('/check/edit', [Admin\CheckController::class, 'edit']);
Route::get('/check/delete', [Admin\CheckController::class, 'destroy']);

Route::get('/department', [Admin\DepartmentController::class, 'index'])->name('department');
Route::get('/department/add', [Admin\DepartmentController::class, 'add'])->name('department');
Route::get('/department/add', [Admin\DepartmentController::class, 'create'])->name('create');
Route::post('/department/add', [Admin\DepartmentController::class, 'adddepartment'])->name('adddepartment');
Route::post('/department/edit', [Admin\DepartmentController::class, 'edit']);
Route::get('/department/delete', [Admin\DepartmentController::class, 'destroy']);

