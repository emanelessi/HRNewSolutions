<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CheckInOut;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CheckController extends Controller
{
    public function index()
    {
        $checks = CheckInOut::paginate(10);
        $employees = User::all();
        return view('layouts.admin.check.check')->with(compact('checks','employees'));
    }

    public function addCheck(Request $request)
    {
        $check = new CheckInOut();
        $check->time = $request->input('time');
        $check->type = $request->input('type');
        $check->employee_id = $request->input('employee_id');
        $check->save();
        return Redirect::back()->withErrors(['Added Successfully', 'The Message']);
    }



    public function create()
    {
        $employees = User::all();
        return view('layouts.admin.check.addCheck')->with('employees', $employees);
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $check = CheckInOut::find($id);
        $check->time = $request->input('time');
        $check->type = $request->input('type');
        $check->employee_id = $request->input('employee_id');

        $check->save();
        return Redirect::back()->withErrors(['Edited Successfully', 'The Message']);
    }

    public function edit(Request $request, $id)
    {
        $users = User::all();
        $check = CheckInOut::findOrFail($id);
        return view('layouts.admin.check.editCheck', compact('users', 'check'));
    }


    public function destroy($id)
    {
        $check = CheckInOut::find($id);
        $check->destroy($id);
        return Redirect::back();
    }

}
