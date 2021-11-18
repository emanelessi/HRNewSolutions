<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'], function () {
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
    Route::get('/profile/edit', [App\Http\Controllers\ProfileController::class, 'editprofile']);

    Route::get('/check/add', [App\Http\Controllers\CheckController::class, 'add'])->name('Check');
    Route::post('/check/add', [App\Http\Controllers\CheckController::class, 'addcheck'])->name('addcheck');

    Route::get('/holiday', [App\Http\Controllers\HolidayController::class, 'index'])->name('holiday');
    Route::get('/holiday/add', [App\Http\Controllers\HolidayController::class, 'addholiday'])->name('addholiday');

    Route::get('/job', [App\Http\Controllers\JobController::class, 'index'])->name('job');

    Route::get('/project', [App\Http\Controllers\ProjectController::class, 'index'])->name('project');

    Route::get('/reward', [App\Http\Controllers\RewardsController::class, 'index'])->name('rewards');

});

