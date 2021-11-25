<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Auth;
use App\Http\Controllers;
use App\Http\Controllers\admin;


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
Route::get('/employee', [admin\UserController::class, 'index'])->name('employee');
Route::get('/employee/add', [admin\UserController::class, 'add'])->name('employee');
Route::get('/employee/add', [admin\UserController::class, 'create'])->name('create');
Route::post('/employee/edit', [admin\UserController::class, 'edit']);
Route::get('/employee/delete', [admin\UserController::class, 'destroy']);

Route::get('/holiday', [admin\HomeController::class, 'index'])->name('holiday');
Route::get('/holiday/add', [admin\HomeController::class, 'add'])->name('holiday');
Route::get('/holiday/add', [admin\HomeController::class, 'create'])->name('create');
Route::post('/holiday/edit', [admin\HomeController::class, 'edit']);
Route::get('/holiday/delete', [admin\HomeController::class, 'destroy']);

Route::get('/job', [admin\JobController::class, 'index'])->name('job');
Route::get('/job/add', [admin\JobController::class, 'add'])->name('job');
Route::get('/job/add', [admin\JobController::class, 'create'])->name('create');
Route::post('/job/edit', [admin\JobController::class, 'edit']);
Route::get('/job/delete', [admin\JobController::class, 'destroy']);
Route::get('/job/history', [admin\JobController::class, 'showhistory']);


Route::get('/project', [admin\ProjectController::class, 'index'])->name('project');
Route::get('/project/add', [admin\ProjectController::class, 'add'])->name('project');
Route::get('/project/add', [admin\ProjectController::class, 'create'])->name('create');
Route::post('/project/edit', [admin\ProjectController::class, 'edit']);
Route::get('/project/delete', [admin\ProjectController::class, 'destroy']);

Route::get('/reward', [admin\RewardController::class, 'index'])->name('reward');
Route::get('/reward/add', [admin\RewardController::class, 'add'])->name('reward');
Route::get('/reward/add', [admin\RewardController::class, 'create'])->name('create');
Route::post('/reward/edit', [admin\RewardController::class, 'edit']);
Route::get('/reward/delete', [admin\RewardController::class, 'destroy']);


Route::get('/check', [admin\CheckController::class, 'index'])->name('Check');
Route::get('/check/add', [admin\CheckController::class, 'add'])->name('Check');
Route::get('/check/add', [admin\CheckController::class, 'create'])->name('create');
Route::post('/check/add', [admin\CheckController::class, 'addcheck'])->name('addcheck');
Route::post('/check/edit', [admin\CheckController::class, 'edit']);
Route::get('/check/delete', [admin\CheckController::class, 'destroy']);

Route::get('/department', [admin\DepartmentController::class, 'index'])->name('department');
Route::get('/department/add', [admin\DepartmentController::class, 'add'])->name('department');
Route::get('/department/add', [admin\DepartmentController::class, 'create'])->name('create');
Route::post('/department/add', [admin\DepartmentController::class, 'adddepartment'])->name('adddepartment');
Route::post('/department/edit', [admin\DepartmentController::class, 'edit']);
Route::get('/department/delete', [admin\DepartmentController::class, 'destroy']);

