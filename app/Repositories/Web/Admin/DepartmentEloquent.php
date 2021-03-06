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
        return view('admin.department.department')->with(compact('departments', 'employees'));
    }

    public function addDepartment(array $data)
    {
        $department = new Department();
        $department->name = $data['name'];
        $department->manager_id = $data['manager_id'];
        $department->save();
//        return Redirect::back()->withErrors(['Added Successfully', 'The Message']);
        return response()->json(['success'=>'post added successfully']);
    }


    public function create()
    {
        $employees = User::all();
        $departments = Department::paginate(10);
        return view('admin.department.addDepartment')->with('employees', $employees)->with('departments', $departments);
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
        return view('admin.department.editDepartment', compact('users'));
    }

    public function destroy($id)
    {
        $department = Department::find($id);
        $department->destroy($id);
        return Redirect::back();
    }

}
