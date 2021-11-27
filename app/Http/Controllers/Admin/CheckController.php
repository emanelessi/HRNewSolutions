<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CheckInOut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CheckController extends Controller
{
    public function index()
    {

        $checks = CheckInOut::paginate(10);
        return view('layouts.admin.check.check')->with(compact('checks'));
    }

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
        return view('layouts.admin.check.addcheck');
    }

    public function create()
    {
        $employees = DB::select("select * from users ");
        return view('layouts.admin.check.addcheck')->with('employees', $employees);
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $check = CheckInOut::find($id);
        $check->time = $request->input('time');
        $check->employee_id = $request->input('employee_id');
        $check->save();
        return Redirect::back()->withErrors(['Edited Successfully', 'The Message']);

    }

    public function edit(Request $request)
    {

        $id = $request->input('id');
        $users = CheckInOut::find($id);
        return view('layouts.admin.check.editcheck', compact('users'));

    }


    public function destroy($id)
    {
        $check = CheckInOut::find($id);
        $check->destroy($id);
        return Redirect::back();
    }

}
