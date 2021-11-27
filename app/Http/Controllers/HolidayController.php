<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Holiday;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class HolidayController extends Controller
{
    public function index()
    {
        $users = DB::select("select * from users ");
        $employee_id = Auth::user()->id;
        $holiday = Holiday::where('employee_id', $employee_id)->paginate(1);
        return view('layouts.holiday')->with(compact('holiday', 'users'));
    }


    public function addholiday(Request $request)
    {
        $holiday = new Holiday();
        $holiday->duration = $request->input('duration');
        $holiday->description = $request->input('description');
        $holiday->date = $request->input('date');
        $holiday->type = $request->input('type');
        $holiday->employee_id = $request->input('employee_id');
        $holiday->save();
        return Redirect::back()->withErrors(['Added Successfully', 'The Message']);
    }

    public function add()
    {
        return view('layouts.addholiday');
    }

    public function create()
    {
        $employees = DB::select("select * from users ");
        return view('layouts.addholiday')->with('employees', $employees);
    }


}
