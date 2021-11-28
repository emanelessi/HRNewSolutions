<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Holiday;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class HolidayController extends Controller
{
    public function index()
    {
        $holidays = Holiday::paginate(10);
        $employee = User::all();
        return view('layouts.admin.holiday.holiday')->with(compact('holidays', 'employee'));
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
        return view('layouts.admin.holiday.addholiday');
    }

    public function create()
    {
        $employees = DB::select("select * from users ");
        $holidays = DB::select("select * from Holidays ");
        return view('layouts.admin.holiday.addholiday')->with(compact('employees', 'holidays'));
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $holiday = Holiday::find($id);
        $holiday->duration = $request->input('duration');
        $holiday->description = $request->input('description');
        $holiday->date = $request->input('date');
        $holiday->type = $request->input('type');
        $holiday->status = $request->input('status');
        $holiday->employee_id = $request->input('employee_id');
        $holiday->save();
        return Redirect::back()->withErrors(['Edited Successfully', 'The Message']);

    }

    public function edit(Request $request)
    {

        $id = $request->input('id');
        $users = Holiday::find($id);
        return view('layouts.admin.holiday.editholiday', compact('users'));

    }


    public function destroy($id)
    {
        $holiday = Holiday::find($id);
        $holiday->destroy($id);
        return Redirect::back();
    }

}
