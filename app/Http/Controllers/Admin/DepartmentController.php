<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::paginate(10);
        return view('layouts.admin.department.department')->with(compact('departments'));
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
        return view('layouts.admin.department.adddepartment');
    }

    public function create()
    {
        $employees = DB::select("select * from users ");
        return view('layouts.admin.department.adddepartment')->with('employees', $employees);
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $department = Department::find($id);
        $department->name = $request->input('name');
        $department->manager_id = $request->input('manager_id');
        $department->save();
        return Redirect::back()->withErrors(['Edited Successfully', 'The Message']);

    }

    public function edit(Request $request)
    {

        $id = $request->input('id');
        $users = Department::find($id);
        return view('layouts.admin.department.editdepartment', compact('users'));

    }

    public function destroy($id)
    {
        $department = Department::find($id);
        $department->destroy($id);
        return Redirect::back();
    }

}
