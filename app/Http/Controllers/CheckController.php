<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CheckInOut;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CheckController extends Controller
{
    public function addCheck(Request $request)
    {
        $user_ip = $request->ip();
        if ($user_ip == '127.0.0.1') {
            $check = new CheckInOut();
            $check->time = $request->input('time');
            $check->type = $request->input('type');
            $check->employee_id = $request->input('employee_id');
            $check->save();
            return Redirect::back()->withErrors(['Added Successfully', 'The Message']);
        } else {
            return Redirect::back()->withErrors(['You are not in the company', 'The Message']);
        }

    }

    public function add()
    {
        return view('layouts.check');
    }


}
