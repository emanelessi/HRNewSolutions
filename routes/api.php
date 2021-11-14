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

});
