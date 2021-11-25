<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CheckInOut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CheckController extends Controller
{
    public function index()
    {
        $employee_id = Auth::user()->id;
        $check = CheckInOut::where('employee_id', $employee_id)->paginate(1);
        return view('layouts.admin.check.check')->with(compact('check'));
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
        return view('layouts.admin.check.check');
    }

    public function edit(Request $request)
    {
        $id = $request->input('id');
        $check = CheckInOut::find($id);
        $check->time = $request->input('time');
        $check->employee_id = $request->input('employee_id');
        $check->save();
        return Redirect::back()->withErrors(['Edited Successfully', 'The Message']);

    }

    public function destroy($id)
    {
        $check = CheckInOut::find($id);
        $check->destroy($id);
        return Redirect::back();
    }

}
