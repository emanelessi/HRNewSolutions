<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\User;
use App\Repositories\Web\Admin\DepartmentEloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class DepartmentController extends Controller
{
    public function __construct(DepartmentEloquent $departmentEloquent)
    {
        $this->department = $departmentEloquent;
    }
    public function index()
    {
        $employees = User::all();
        $departments = Department::paginate(10);
        return view('layouts.Admin.department.department')->with(compact('departments', 'employees'));
    }

    public function addDepartment(Request $request)
    {
        $department = new Department();
        $department->name = $request->input('name');
        $department->manager_id = $request->input('manager_id');
        $department->save();
        return Redirect::back()->withErrors(['Added Successfully', 'The Message']);
    }


    public function create()
    {
        $employees = User::all();
        $departments = Department::paginate(10);
        return view('layouts.Admin.department.addDepartment')->with('employees', $employees)->with('departments', $departments);
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

    public function edit(Request $request, $id)
    {
        $users = Department::findOrFail($id);
        return view('layouts.Admin.department.editDepartment', compact('users'));
    }

    public function destroy($id)
    {
        $department = Department::find($id);
        $department->destroy($id);
        return Redirect::back();
    }

}
