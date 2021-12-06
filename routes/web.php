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
Route::get('/', function () {
    return view('welcome');
});

Route::view('/home', 'home')->middleware('auth');

Auth::routes();

Route::get('/home', [Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'], function () {
    Route::get('/profile', [Controllers\ProfileController::class, 'index']);
    Route::post('/profile/edit', [Controllers\ProfileController::class, 'editProfile'])->name('editProfile');;
    Route::get('/profile/edit', [Controllers\ProfileController::class, 'edit']);

    Route::get('/check/add', [Controllers\CheckController::class, 'add']);
    Route::post('/check/add', [Controllers\CheckController::class, 'addCheck'])->name('addEmployeeCheck');

    Route::get('/holiday', [Controllers\HolidayController::class, 'index'])->name('Holiday');
    Route::get('/holiday/add', [Controllers\HolidayController::class, 'add']);
    Route::get('/holiday/add', [Controllers\HolidayController::class, 'create']);
    Route::post('/holiday/add', [Controllers\HolidayController::class, 'addHoliday'])->name('addHoliday');

    Route::get('/job', [Controllers\JobController::class, 'index']);

    Route::get('/project', [Controllers\ProjectController::class, 'index']);

    Route::get('/reward', [Controllers\RewardsController::class, 'index']);

});
Route::get('/admin/home', [Admin\UserController::class, 'home'])->name('adminHome');
Route::get('/admin/employee', [Admin\UserController::class, 'index'])->name('Employee');
Route::post('/admin/employee/add', [Admin\UserController::class, 'add']);
Route::get('/admin/employee/add', [Admin\UserController::class, 'addEmployee']);
Route::get('/admin/employee/add', [Admin\UserController::class, 'create'])->name('addEmployee');
Route::post('/admin/employee/edit', [Admin\UserController::class, 'update'])->name('editEmployee');
Route::get('/admin/employee/edit/{id}', [Admin\UserController::class, 'edit']);
Route::get('/admin/employee/delete/{id}', [Admin\UserController::class, 'destroy']);

Route::get('/admin/holiday', [Admin\HolidayController::class, 'index'])->name('Holiday');
Route::post('/admin/holiday/add', [Admin\HolidayController::class, 'add']);
Route::get('/admin/holiday/add', [Admin\HolidayController::class, 'addHoliday'])->name('addHoliday');
Route::get('/admin/holiday/add', [Admin\HolidayController::class, 'create']);
Route::post('/admin/holiday/edit', [Admin\HolidayController::class, 'update'])->name('editHoliday');
Route::get('/admin/holiday/edit/{id}', [Admin\HolidayController::class, 'edit']);
Route::get('/admin/holiday/delete/{id}', [Admin\HolidayController::class, 'destroy']);

Route::get('/admin/job', [Admin\JobController::class, 'index'])->name('Job');
Route::get('/admin/job/add', [Admin\JobController::class, 'add']);
Route::post('/admin/job/add', [Admin\JobController::class, 'addJob']);
Route::get('/admin/job/add', [Admin\JobController::class, 'create'])->name('addJob');
Route::post('/admin/job/edit', [Admin\JobController::class, 'update'])->name('editJob');
Route::get('/admin/job/edit/{id}', [Admin\JobController::class, 'edit']);
Route::get('/admin/job/delete/{id}', [Admin\JobController::class, 'destroy']);

Route::get('/admin/job/history', [Admin\JobHistoryController::class, 'index'])->name('History');
Route::get('/admin/job/history/add', [Admin\JobHistoryController::class, 'add']);
Route::post('/admin/job/history/add', [Admin\JobHistoryController::class, 'addHistory']);
Route::get('/admin/job/history/add', [Admin\JobHistoryController::class, 'create'])->name('addHistory');
Route::post('/admin/job/history/edit', [Admin\JobHistoryController::class, 'update'])->name('editHistory');
Route::get('/admin/job/history/edit/{id}', [Admin\JobHistoryController::class, 'edit']);
Route::get('/admin/job/history/delete/{id}', [Admin\JobHistoryController::class, 'destroy']);


Route::get('/admin/project', [Admin\ProjectController::class, 'index'])->name('Project');
Route::get('/admin/project/add', [Admin\ProjectController::class, 'add']);
Route::post('/admin/project/add', [Admin\ProjectController::class, 'addProject']);
Route::get('/admin/project/add', [Admin\ProjectController::class, 'create'])->name('addProject');
Route::post('/admin/project/edit', [Admin\ProjectController::class, 'update'])->name('editProject');
Route::get('/admin/project/edit/{id}', [Admin\ProjectController::class, 'edit']);
Route::get('/admin/project/delete/{id}', [Admin\ProjectController::class, 'destroy']);

Route::get('/admin/reward', [Admin\RewardController::class, 'index'])->name('Reward');
Route::get('/admin/reward/add', [Admin\RewardController::class, 'add']);
Route::post('/admin/reward/add', [Admin\RewardController::class, 'addReward']);
Route::get('/admin/reward/add', [Admin\RewardController::class, 'create'])->name('addReward');
Route::post('/admin/reward/edit', [Admin\RewardController::class, 'update'])->name('editReward');
Route::get('/admin/reward/edit/{id}', [Admin\RewardController::class, 'edit']);
Route::get('/admin/reward/delete/{id}', [Admin\RewardController::class, 'destroy']);

Route::get('/admin/invoice', [Admin\InvoiceController::class, 'index'])->name('Invoice');
Route::get('/admin/invoice/add', [Admin\InvoiceController::class, 'add']);
Route::post('/admin/invoice/add', [Admin\InvoiceController::class, 'addInvoice']);
Route::get('/admin/invoice/add', [Admin\InvoiceController::class, 'create'])->name('addInvoice');
Route::post('/admin/invoice/edit', [Admin\InvoiceController::class, 'update'])->name('editInvoice');
Route::get('/admin/invoice/edit/{id}', [Admin\InvoiceController::class, 'edit']);
Route::get('/admin/invoice/delete/{id}', [Admin\InvoiceController::class, 'destroy']);

Route::get('/admin/check', [Admin\CheckController::class, 'index'])->name('Check');
Route::post('/admin/check/add', [Admin\CheckController::class, 'add']);
Route::post('/admin/check/add', [Admin\CheckController::class, 'addCheck']);
Route::get('/admin/check/add', [Admin\CheckController::class, 'create'])->name('addCheck');
Route::post('/admin/check/edit', [Admin\CheckController::class, 'update'])->name('editCheck');
Route::get('/admin/check/edit/{id}', [Admin\CheckController::class, 'edit']);
Route::get('/admin/check/delete/{id}', [Admin\CheckController::class, 'destroy']);

Route::get('/admin/department', [Admin\DepartmentController::class, 'index'])->name('Department');
Route::get('/admin/department/add', [Admin\DepartmentController::class, 'add']);
Route::post('/admin/department/add', [Admin\DepartmentController::class, 'addDepartment']);
Route::get('/admin/department/add', [Admin\DepartmentController::class, 'create'])->name('addDepartment');
Route::post('/admin/department/edit', [Admin\DepartmentController::class, 'update'])->name('editDepartment');
Route::get('/admin/department/edit/{id}', [Admin\DepartmentController::class, 'edit']);
Route::get('/admin/department/delete/{id}', [Admin\DepartmentController::class, 'destroy']);

