<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Holiday;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class HolidayController extends Controller
{
    public function index()
    {
        $employee_id = Auth::user()->id;
        $holiday = Holiday::where('employee_id', $employee_id)->paginate(1);
        return view('layouts.holiday')->with(compact('holiday'));
    }

    public function addholiday(Request $request)
    {
        $check = new Holiday();
        $check->duration = $request->input('duration');
        $check->description = $request->input('description');
        $check->date = $request->input('date');
        $check->type = $request->input('type');
        $check->employee_id = $request->input('employee_id');
        $check->save();
        return Redirect::back()->withErrors(['Added Successfully', 'The Message']);
    }


}
