<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

Auth::routes();

Route::get('/admin/login', [LoginController::class,'showAdminLoginForm']);
Route::get('/admin/register', [RegisterController::class,'showAdminRegisterForm']);

Route::post('/admin/login', [LoginController::class,'adminLogin']);
Route::post('/admin/register', [RegisterController::class,'createAdmin']);


Route::view('/home', 'home')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


