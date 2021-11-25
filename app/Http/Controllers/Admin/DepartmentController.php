<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class DepartmentController extends Controller
{
    public function index()
    {
        $employee_id = Auth::user()->id;
        $department = Department::where('id', $employee_id)->paginate(1);
        return view('layouts.admin.department.department')->with(compact('department'));
    }
    public function adddepartment(Request $request)
    {
        $department = new Department();
        $department->name = $request->input('name');
        $department->manager_id = $request->input('manager_id');
        $department->save();
        return Redirect::back()->withErrors(['Added Successfully', 'The Message']);
    }

    public function add()
    {
        return view('layouts.admin.department.department');
    }

    public function edit(Request $request)
    {
        $id = $request->input('id');
        $department = Department::find($id);
        $department->name = $request->input('name');
        $department->manager_id = $request->input('manager_id');
        $department->save();
        return Redirect::back()->withErrors(['Edited Successfully', 'The Message']);

    }

    public function destroy($id)
    {
        $department = Department::find($id);
        $department->destroy($id);
        return Redirect::back();
    }

}
