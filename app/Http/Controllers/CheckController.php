<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CheckInOut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CheckController extends Controller
{
    public function addcheck(Request $request)
    {
        $check = new CheckInOut();
        $check->time = $request->input('time');
        $check->employee_id = $request->input('employee_id');
        $check->save();
        return Redirect::back()->withErrors(['Added Successfully', 'The Message']);
    }

    public function add()
    {
        return view('layouts.check');
    }
    public function create () {
        $employees = DB::select("select * from users ");
        return view('layouts.check')->with('employees', $employees);
    }
}
