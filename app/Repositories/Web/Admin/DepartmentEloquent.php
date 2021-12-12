<?php


namespace App\Repositories\Web\Admin;


use App\Models\Department;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DepartmentEloquent
{
    private $model;

    public function __construct(Department $department)
    {
        $this->model = $department;
    }
    public function index()
    {
        $employees = User::all();
        $departments = Department::paginate(10);
        return view('layouts.Admin.department.department')->with(compact('departments', 'employees'));
    }

    public function addDepartment(array $data)
    {
        $department = new Department();
        $department->name = $data['name'];
        $department->manager_id = $data['manager_id'];
        $department->save();
        return Redirect::back()->withErrors(['Added Successfully', 'The Message']);
    }


    public function create()
    {
        $employees = User::all();
        $departments = Department::paginate(10);
        return view('layouts.Admin.department.addDepartment')->with('employees', $employees)->with('departments', $departments);
    }

    public function update(array $data)
    {
        $id = $data['id'];
        $department = Department::find($id);
        $department->name = $data['name'];
        $department->manager_id = $data['manager_id'];
        $department->save();
        return Redirect::back()->withErrors(['Edited Successfully', 'The Message']);

    }

    public function edit( $id)
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
