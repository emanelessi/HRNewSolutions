<?php


namespace App\Repositories\Web\Admin;


use App\Http\Requests\Admin\AddEmployeeRequest;
use App\Models\Department;
use App\Models\EmployeeProject;
use App\Models\Holiday;
use App\Models\Job;
use App\Models\Reward;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EmployeeEloquent
{
    private $model;

    public function __construct(User $employee)
    {
        $this->model = $employee;
    }
    public function index()
    {
        $employee = User::paginate(10);
//        dd($employee->items()[0]->department);
        $departments = Department::all();
        $jobs = Job::all();
        $users = User::all();
        $projects = EmployeeProject::all();
        $rewards = Reward::all();
        return view('layouts.Admin.employee.employee')->with(compact('employee', 'departments', 'jobs', 'users', 'projects', 'rewards'));
    }

    public function home()
    {
        $users = User::all();
        $departments = Department::paginate(10);
        $projects = EmployeeProject::paginate(10);
        $rewards = Reward::paginate(10);
        $holidays = Holiday::paginate(10);
        $jobs = Job::paginate(10);
        return view('layouts.Admin.home')->with('users', $users)->with('departments', $departments)->with('projects', $projects)->with('rewards', $rewards)->with('holidays', $holidays)->with('jobs', $jobs);
    }

    public function addEmployee(array $data)
    {
        $employee = new User();
        $employee->first_name = $data['first_name'];
        $employee->last_name = $data['last_name'];
        $employee->email = $data['email'];
        $employee->password = $data['password'];
        $employee->phone_number = $data['phone_number'];
        $employee->hire_date =$data['hire_date'];
        $employee->salary = $data['salary'];
        $employee->photo = $data['photo'];
        $employee->department_id = $data['department_id'];
        $employee->job_id = $data['job_id'];
        $employee->manager_id = $data['manager_id'];
        $employee->save();
        return Redirect::back()->withErrors(['Added Successfully', 'The Message']);
    }

    public function create()
    {
        $employees = User::all();
        $departments = Department::all();
        $jobs = Job::all();
        return view('layouts.Admin.employee.addEmployee')->with(compact('employees', 'departments', 'jobs'));
    }


    public function update(array $data)
    {
        $id =  $data['id'];
        $users = User::find($id);
        $users->first_name =  $data['first_name'];
        $users->last_name =  $data['last_name'];
        $users->email =  $data['email'];
        $users->password = bcrypt( $data['password']);
        $users->phone_number =  $data['phone_number'];
        $users->hire_date =  $data['hire_date'];
        $users->salary =  $data['salary'];
        $users->photo =  $data['photo'];
        $users->department_id =  $data['department_id'];
        $users->job_id =  $data['job_id'];
        $users->manager_id =  $data['manager_id'];
        $users->save();
        return Redirect::back()->withErrors(['Edited Successfully', 'The Message']);
    }

    public function edit($id)
    {
        $users = User::findOrFail($id);
        $Departments = Department::all();
        $Jobs = Job::all();
        return view('layouts.Admin.employee.editEmployee', compact('users', 'Departments', 'Jobs'));
    }


    public function destroy($id)
    {
        $movie = User::find($id);
        $movie->destroy($id);
        return Redirect::back();
    }


}
