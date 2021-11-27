<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AddEmployeeRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index()
    {
        $employee = User::paginate(10);
        $departments = DB::select("select * from departments ");
        $jobs = DB::select("select * from jobs ");
        $users = DB::select("select * from users ");
        $projects = DB::select("select * from projects");
        $rewards = DB::select("select * from rewards");
        return view('layouts.admin.employee.employee')->with(compact('employee', 'departments', 'jobs', 'users', 'projects', 'rewards'));
    }


    public function addemployee(AddEmployeeRequest $request)
    {
        $employee = new User();
        $employee->first_name = $request->input('first_name');
        $employee->last_name = $request->input('last_name');
        $employee->email = $request->input('email');
        $employee->password = $request->input('password');
        $employee->phone_number = $request->input('phone_number');
        $employee->hire_date = $request->input('hire_date');
        $employee->salary = $request->input('salary');
        $employee->photo = $request->input('photo');
        $employee->department_id = $request->input('department_id');
        $employee->job_id = $request->input('job_id');
        $employee->manager_id = $request->input('manager_id');
        $employee->save();
        return Redirect::back()->withErrors(['Added Successfully', 'The Message']);
    }

    public function create()
    {
        $employees = DB::select("select * from users ");
        $departments = DB::select("select * from departments ");
        $jobs = DB::select("select * from jobs ");
        return view('layouts.admin.employee.addemployee')->with(compact('employees', 'departments', 'jobs'));
    }

    public function add()
    {
        return view('layouts.admin.employee.addemployee');
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $users = User::find($id);
        $users->first_name = $request->input('first_name');
        $users->last_name = $request->input('last_name');
        $users->email = $request->input('email');
        $users->password = $request->input('password');
        $users->phone_number = $request->input('phone_number');
        $users->hire_date = $request->input('hire_date');
        $users->salary = $request->input('salary');
        $users->photo = $request->input('photo');
        $users->department_id = $request->input('department_id');
        $users->job_id = $request->input('job_id');
        $users->manager_id = $request->input('manager_id');
        $users->save();
        return Redirect::back()->withErrors(['Edited Successfully', 'The Message']);

    }

    public function edit(Request $request)
    {

        $id = $request->input('id');
        $users = User::find($id);
        return view('layouts.admin.employee.editemployee', compact('users'));

    }


    public function destroy($id)
    {
        $movie = User::find($id);
        $movie->destroy($id);
        return Redirect::back();
    }


}
